<?php

namespace FortbildungBwSoap\Model;

use stdClass;

class FilterAnbieter extends Filter
{
	use FilterLocationTrait;

	public function __construct(?stdClass $input = null)
	{
		parent::__construct($input);
		$this->constructFilterLocationTrait($input);
	}
}
