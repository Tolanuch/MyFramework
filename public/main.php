<?php

echo 'This is my fucking FRAMEWOOOORK!';

define('ROOT',dirname(__FILE__).'/');
define('IDEAL',dirname(__FILE__).'/ideal/');
define('APP',dirname(__FILE__).'/application/');
include IDEAL.'framework.php';
app::gi()->start();

?>

<title>Framework by Tolanuch</title>