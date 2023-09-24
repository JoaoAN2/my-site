<?php
class Router
{
    private array $routes = [];

    public function addRoute(string $method, string $path, callable $callback):void {
        $this->routes[] = ['method' => $method, 'path' => $path, 'callback' => $callback];
    }

    public function route(string $method, string $path): void {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $path) {
                call_user_func($route['callback']);
                return;
            }
        }
        echo "Rota não encontrada.";
    }
}
