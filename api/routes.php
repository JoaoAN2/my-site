<?php
require_once 'classes/Router.class.php';
require_once 'controllers/GetInstitucionalController.php';

class Routes
{

    function __construct(string $method, string $path)
    {
        $handleGetInstitucionalController = function() {
            GetInstitucionalController::handle();
        };

        $router = new Router();
        $router->addRoute("GET", "/teste", function (): void {
            $data = [
                ["id" => "1","username" => "João Augusto"]
            ];
            
            die(json_encode($data, JSON_UNESCAPED_UNICODE));
        });

        $router->addRoute("GET", "/institucional", $handleGetInstitucionalController);

        $router->route($method, $path);
    }
}
