<?php 

//Traz as dependencias do Composer
require_once("vendor/autoload.php");

//Namespaces que eu vou precisar aqui
use \Slim\Slim;
use \Hcode\Page;

//Ajuda nas rotas
$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");
	
});

$app->run();

 ?>