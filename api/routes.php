<?php
require_once 'classes/router.class.php';

class Routes
{
    function __construct(string $method, string $path)
    {
        $router = new Router();
        $router->get("/teste", function (): void {
            var_dump("Página teste ");
        });

        $router->route($method, $path);
    }
}
