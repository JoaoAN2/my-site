<?php

require_once "classes/DB.class.php";
require_once "services/GetInstitucionalService.php";

class GetInstitucionalController {

    public static function handle() {

        $db = new DB($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME'], $_ENV['DB_TYPE']);
        $pdo = $db->getPDO();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $getInstitucionalService = new GetInstitucionalService();
        $institucional = $getInstitucionalService->execute($pdo);
        return die(json_encode($institucional, JSON_UNESCAPED_UNICODE));

    }

}

?>