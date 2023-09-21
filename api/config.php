<?php
require '../vendor/autoload.php'; // Inclua o autoload da biblioteca Dotenv

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__); // Especifique o diretório onde está o arquivo .env
$dotenv->load(); // Carregue as variáveis de ambiente do arquivo .env para $_ENV

echo $_ENV['DB_NAME'];
?>