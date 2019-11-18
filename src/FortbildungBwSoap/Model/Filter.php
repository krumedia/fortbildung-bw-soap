<?php

namespace FortbildungBwSoap\Model;

use DateTime;
use stdClass;

abstract class Filter
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
	 *
	 * @var string
	 */
	public $plz;

	/**
	 * radius in km
	 * @var int
	 */
	public $radius;

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
		$this->stichwort = $input->stichwort ?? '';
		$this->rubrik = $input->rubrik ?? null;
		$this->plz = $input->plz ?? null;
		$this->radius = $input->radius ?? null;
		$this->orderby = $input->orderby ?? 'titel';
		$this->sortby = $input->sortby ?? 'asc';
		$this->lastUpdate = $input->lastUpdate ?? null;
	}
}

