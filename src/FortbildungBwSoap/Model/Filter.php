<?php

namespace FortbildungBwSoap\Model;

use DateTime;
use stdClass;

abstract class Filter extends ModelHint
{
	/**
	 * words to search for
	 * @var string
	 */
	public $stichwort;

	/**
	 *
	 * @var string
	 */
	public $rubrik;

	/**
	 * "titel"|"beginn"|"plz";
	 * @var string
	 */
	public $orderby;

	/**
	 * asc|desc
	 * @var string
	 */
	public $sortby;

	/**
	 * @var DateTime|null
	 */
	public $lastUpdate;

	/**
	 * @param null|stdClass $input
	 */
	public function __construct(?stdClass $input = null)
	{
		parent::__construct();
		$this->stichwort = $input->stichwort ?? '';
		$this->rubrik = $input->rubrik ?? null;
		$this->orderby = $input->orderby ?? 'titel';
		$this->sortby = $input->sortby ?? 'asc';
		$this->lastUpdate = $input->lastUpdate ?? null;
	}
}

