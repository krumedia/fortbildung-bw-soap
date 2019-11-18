<?php

namespace FortbildungBwSoap\Model;

use stdClass;

class FilterKurs extends Filter
{
	/**
	 * begins in int days
	 * @var int
	 */
	public $beginntIn;

	/**
	 *
	 * @var boolean
	 */
	public $abendKurs;

	/**
	 * @var boolean
	 */
	public $bildungsGutschein;

	public function __construct(?stdClass $input = null)
	{
		parent::__construct($input);
		$this->beginntIn = $input->beginntIn ?? null;
		$this->abendKurs = $input->abendKurs ?? null;
		$this->bildungsGutschein = $input->bildungsGutschein ?? null;
	}
}

