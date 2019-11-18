<?php

namespace FortbildungBwSoap\Model;

use SoapClient;
use stdClass;

/**
 * @method stdClass[] getKurs(string $login, string $password, int|mixed[]|FilterKurs $arg)
 * @method stdClass[] getAnbieter(string $login, string $password, null|int|mixed[]|FilterAnbieter $arg)
 */
class WbSoapClient extends SoapClient
{
}
