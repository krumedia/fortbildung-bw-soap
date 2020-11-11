<?php

namespace FortbildungBwSoap\Model;

use LogicException;
use stdClass;

class FilterOnlineKurs extends Filter
{
	/**
	 * @var boolean
	 */
	public $bildungsGutschein;

	public function __construct(?stdClass $input = null)
	{
		if (isset($input->plz) || isset($input->radius)) {
			throw new LogicException('unexpected in this context, plz and radius are not defined for FilterOnlineKurs!');
		}
		parent::__construct($input);
		$this->bildungsGutschein = $input->bildungsGutschein ?? null;
	}
}

