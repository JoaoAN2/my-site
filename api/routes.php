<?php
require_once 'classes/Router.class.php';
require_once 'controllers/GetInstitucionalController.php';

class Routes
{
    function __construct(string $method, string $path)
    {
        $router = new Router();
        $router->addRoute("GET", "/teste", function (): void {
            $data = [
                ["id" => "1","username" => "João Augusto"]
            ];
            
            die(json_encode($data));
        });

        $router->addRoute("GET", "/institucional", function (): void {
            $getInstitucionalController = new GetInstitucionalController();
            $data = $getInstitucionalController->handle();
            
            die(json_encode($data));
        });

        $router->route($method, $path);
    }
}
