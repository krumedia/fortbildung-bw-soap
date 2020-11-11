<?php

namespace FortbildungBwSoap\Model;

abstract class BaseKurs extends ModelHint
{
	public $id;
	public $titel;
	public $kosten;
	public $bildungsGutschein;
	public $voraussetzung;
	public $abschluss;
	public $url;
	public $urlAnmeldung;
	public $beschreibung;
	public $anbieterAbstract;
	public $backlink;

}
