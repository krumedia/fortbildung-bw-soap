<?php

namespace FortbildungBwSoap\Model;

abstract class ModelHint
{
	/**
	 * Durch soap wird nur stdClass übergeben
	 * Hiermit kann die Klasse des Kurses erkannt werden
	 * @var string
	 */
	public $className;

	public function __construct()
	{
		$this->className = static::class;
	}
}
