<?php
class Router
{
    private array $routes = [];

    public function get(string $path, callable $callback): void {
        $this->routes[] = ['method' => 'GET', 'path' => $path, 'callback' => $callback];
    }

    public function post(string $path, callable $callback): void {
        $this->routes[] = ['method' => 'POST', 'path' => $path, 'callback' => $callback];
    }

    public function put(string $path, callable $callback): void {
        $this->routes[] = ['method' => 'PUT', 'path' => $path, 'callback' => $callback];
    }

    public function delete(string $path, callable $callback): void {
        $this->routes[] = ['method' => 'DELETE', 'path' => $path, 'callback' => $callback];
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
