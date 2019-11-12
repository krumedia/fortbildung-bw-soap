<?php

use FortbildungBwSoap\SClient;

require_once __DIR__ . '/../vendor/autoload.php';

/**
 * START CREDENTIALS
 */
$user = '';
$password = '';
/**
 * ENDE CREDENTIALS
 */

if (PHP_SAPI !== 'cli') {
	echo '<pre>';
	ob_start(static function (string $input): string {
		return nl2br(htmlspecialchars($input));
	});
}
if (empty($user) || empty($password)) {
	echo sprintf(
		"to run this test update the  files \n '%s'\n and provide the credentials of a registered user of www.fortbildung-bw.de",
		__FILE__
	);
	exit;
}

$client = new SClient($user, $password);
