<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \HCode\Page; 

$app = new Slim(); 

$app->config('debug', true); // modo debug ligado

$app->get('/', function() {
  
 	$page = new Page(); //adiciona o header na tela

 	$page->setTpl("index"); // chama o arquivo html index e depois o destruct (de forma automática) chamando o footer

});

$app->run();

?>


