<?php
$autoloader = __DIR__.'/vendor/autoload.php';
if (!file_exists($autoloader)) {
  die('You must run `composer install` in the sample app directory');
}

require($autoloader);

use OpenTok\OpenTok;

$API_KEY = '45713882';
$API_SECRET = 'e6e13f083a2bbeea27dd6df7d6789152de13ac4f';

$apiObj = new OpenTok($API_KEY, $API_SECRET);

$session = $apiObj->createSession();
echo $session->getSessionId();
?>