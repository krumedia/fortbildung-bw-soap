<?php

namespace FortbildungBwSoap\Model;

class FilterAnbieter
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
	 * Postleitzahl
	 * @var int
	 */
	public $plz;

	/**
	 * Der Radius in km
	 * @var int
	 */
	public $radius;

	/**
	 * "titel"|"plz"
	 * @var string
	 */
	public $orderby;

	/**
	 * "ASC"|"DESC"
	 * @var string
	 */
	public $sortby;

	public $lastUpdate;

}
