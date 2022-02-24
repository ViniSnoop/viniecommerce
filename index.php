<?php 

//Traz as dependencias do Composer
require_once("vendor/autoload.php");

//Namespaces que eu vou precisar aqui
use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

//Ajuda nas rotas
$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");
	
});

$app->get('/admin', function() {
    
	$page = new PageAdmin();

	$page->setTpl("index");
	
});

$app->run();

 ?>