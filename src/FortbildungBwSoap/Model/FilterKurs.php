<?php

namespace FortbildungBwSoap\Model;

class FilterKurs
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
	 * begins in int days
	 * @var int
	 */
	public $beginntIn;

	/**
	 *
	 * @var int
	 */
	public $plz;

	/**
	 *  radius in km
	 * @var int
	 */
	public $radius;

	/**
	 *
	 * @var boolean
	 */
	public $abendKurs;

	/**
	 * @var boolean
	 */
	public $bildungsGutschein;

	/**
	 * "titel"|"beginn"|"plz";
	 * @var string
	 */
	public $orderby = "titel";

	/**
	 * asc|desc
	 * @var string
	 */
	public $sortby;

	/**
	 *
	 */
	public $lastUpdate;

}

