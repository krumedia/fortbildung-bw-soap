<?php

namespace FortbildungBwSoap;

use FortbildungBwSoap\Model\WbSoapClient;
use SoapFault;
use FortbildungBwSoap\Model\FilterAnbieter;
use FortbildungBwSoap\Model\FilterKurs;
use FortbildungBwSoap\Model\FilterOnlineKurs;
use stdClass;

class SClient
{
	private $inputData = [];

	public function __construct(string $user, string $password)
	{
		global $argc, $argv;

		if (PHP_SAPI === 'cli') {
			if ($argc === 2) {
				$this->inputData = json_decode($argv[1], true);
			}
		} else {
			$this->inputData = $_GET;
		}
		ini_set('soap.wsdl_cache_enabled', 0);
		$this->initClient($user, $password);
	}

	/**
	 * @param string $login
	 * @param string $password
	 */
	private function initClient(string $login, string $password)
	{
		$options = [
			'trace' => true,
			'exceptions' => true,
		];
		try {
			$client = new WbSoapClient('https://www.fortbildung-bw.de/export/soap.php?wsdl', $options);
			if (!isset($this->inputData['function'])) {
				$functions = $client->__getFunctions();
				var_dump($functions);
			} else if ($this->inputData['function'] === 'getKurs') {

				$filterData = new stdClass();
				$filterData->radius = 25;
				$filterData->plz = 71131;
				$filter = new FilterKurs($filterData);
				var_dump($client->getKurs($login, $password, $filter));

				$filterData = new stdClass();
				$filter = new FilterOnlineKurs($filterData);
				var_dump($client->getKurs($login, $password, $filter));
			} else if ($this->inputData['function'] === 'getAnbieter') {
				$filter = new FilterAnbieter();
				$filter->lastUpdate = 300;
				var_dump($client->getAnbieter($login, $password, $filter));
			}
		} catch (SoapFault $fault) {
			echo $fault->getMessage();
		}
	}
}
