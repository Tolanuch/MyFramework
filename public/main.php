<?php

// Create the global constant for th config dir.
define('CONFIG', $_SERVER['DOCUMENT_ROOT'] . '/../config/');
define('APP_PATH', $_SERVER['DOCUMENT_ROOT'] . '/../vendor/Tolanuch/Eshopframework/');

echo 'This is my FRAMEWOOOORK!';

require_once  ('../vendor/autoload.php');

use Eshopframework\App;

$app= App::getInstance();
$app->run();
$app->done();

?>

<title>Framework by Tolanuch</title>