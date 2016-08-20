<?php
// все зробити через сінглтон
echo 'This is my FRAMEWOOOORK!';
echo "<br> фрейм!";
use App\App;
require_once  ('../vendor/autoload.php');

$app= App::getInstance();
$app->run();
$app->done();

?>

<title>Framework by Tolanuch</title>