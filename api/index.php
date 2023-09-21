<?php
require '../vendor/autoload.php'; // Inclua o autoload da biblioteca Dotenv
require_once 'classes/db.class.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Especifique o diretório onde está o arquivo .env
$dotenv->load(); // Carregue as variáveis de ambiente do arquivo .env para $_ENV

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');

date_default_timezone_set("America/Sao_Paulo");

$path = explode("/", $_GET['path']);

$method = $_SERVER["REQUEST_METHOD"];

$db = new DB($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME'], $_ENV['DB_TYPE']);
$pdo = $db->connect();