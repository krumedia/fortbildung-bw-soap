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

	public function __construct(stdClass $input)
	{
		parent::__construct($input);
		$this->beginntIn = $input->beginntIn ?? 0;
		$this->abendKurs = $input->abendKurs ?? false;
		$this->bildungsGutschein = $input->bildungsGutschein ?? false;
	}
}

