<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true); // modo debug ligado

$app->get('/', function() {
    
	echo "OK";

});

$app->run();

 ?>