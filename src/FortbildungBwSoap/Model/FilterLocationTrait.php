<?php

namespace FortbildungBwSoap\Model;

use stdClass;

trait FilterLocationTrait
{
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
	 * @param null|stdClass $input
	 */
	protected function constructFilterLocationTrait(?stdClass $input = null):void
	{
		$this->plz = $input->plz ?? null;
		$this->radius = $input->radius ?? null;
	}
}

