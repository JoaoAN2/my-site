<?php
require '../vendor/autoload.php'; // Inclua o autoload da biblioteca Dotenv
require_once 'classes/DB.class.php';
require_once 'routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Especifique o diretório onde está o arquivo .env
$dotenv->load(); // Carregue as variáveis de ambiente do arquivo .env para $_ENV

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json; charset=utf-8');

date_default_timezone_set("America/Sao_Paulo");

$path = substr($_GET['path'], 3);
$method = $_SERVER["REQUEST_METHOD"];

new Routes($method, $path);
