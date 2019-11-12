<?php

namespace FortbildungBwSoap;

use SoapClient;
use SoapFault;
use FortbildungBwSoap\Model\FilterAnbieter;
use FortbildungBwSoap\Model\FilterKurs;

class SClient
{
	private $inputData=[];

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
		ini_set ( 'soap.wsdl_cache_enabled', 0 );
		$this->initClient($user, $password);
	}

	/**
	 * @param string $login
	 * @param string $password
	 */
	private function initClient(string $login, string $password)
	{
		$options = array (
				'trace' => true,
				'exceptions' => true
		);
		try {
 			$client = new SoapClient ( 'https://www.fortbildung-bw.de/export/soap.php?wsdl', $options );
			if (! isset ( $this->inputData ['function'] )) {
				$functions = $client->__getFunctions ();
				var_dump ( $functions );
			} else if ($this->inputData ['function'] === 'getKurs') {
				$filter = new FilterKurs();
				$filter->radius = 25;
				$filter->plz = 71131;
				var_dump($client->getKurs($login, $password, $filter));
			} else if ($this->inputData ['function'] === 'getAnbieter') {
 				$filter = new FilterAnbieter();
 				$filter->lastUpdate = 300;
				var_dump($client->getAnbieter ($login, $password, $filter));
			}
		} catch (SoapFault $fault ) {
			echo $fault->getMessage();
		}
	}
}
