<?php 

//inicia a seção
session_start();

//Traz as dependencias do Composer
require_once("vendor/autoload.php");

//Namespaces que eu vou precisar aqui
use \Slim\Slim;

//Ajuda nas rotas
$app = new Slim();

$app->config('debug', true);

require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");

$app->run();

 ?>