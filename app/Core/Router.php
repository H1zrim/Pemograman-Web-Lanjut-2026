<?php

class Router
{
    // Menyimpan daftar route berdasarkan method HTTP seperti GET dan POST.
    private static array $routes = [];

    public static function get(string $path, string $handler): void
    {
        self::$routes['GET'][$path] = $handler;
    }

    public static function post(string $path, string $handler): void
    {
        self::$routes['POST'][$path] = $handler;
    }

    // Menjalankan router dengan mencocokkan URL saat ini ke daftar route yang terdaftar.
    public static function run(): void
    {
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $requestPath = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/');
        $baseUrl = defined('BASE_URL') ? urldecode((string) BASE_URL) : '';
        $baseUrl = $baseUrl === '/' ? '' : rtrim($baseUrl, '/');
        $scriptDir = urldecode(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')));

        if ($baseUrl !== '' && str_starts_with($requestPath, $baseUrl)) {
            $requestPath = substr($requestPath, strlen($baseUrl));
        }

        if ($scriptDir !== '/' && $scriptDir !== '.' && str_starts_with($requestPath, $scriptDir)) {
            $requestPath = substr($requestPath, strlen($scriptDir));
        }

        if (str_starts_with($requestPath, '/public')) {
            $requestPath = substr($requestPath, strlen('/public')) ?: '/';
        }

        $path = '/' . trim($requestPath, '/');
        $path = $path === '//' ? '/' : $path;

        $routes = self::$routes[$method] ?? [];

        foreach ($routes as $route => $handler) {
            $pattern = preg_replace('/\{[^}]+\}/', '([^/]+)', $route);
            $pattern = '#^' . $pattern . '$#';

            if (preg_match($pattern, $path, $matches)) {
                array_shift($matches);
                self::dispatch($handler, $matches);
                return;
            }
        }

        http_response_code(404);
        echo '404 - Halaman tidak ditemukan';
    }

    private static function dispatch(string $handler, array $params = []): void
    {
        [$controllerName, $action] = explode('@', $handler);

        $controllerFile = BASE_PATH . '/app/Controllers/' . $controllerName . '.php';

        if (!file_exists($controllerFile)) {
            http_response_code(404);
            echo "404 - Controller '$controllerName' tidak ditemukan";
            return;
        }

        require_once $controllerFile;

        if (!class_exists($controllerName)) {
            http_response_code(500);
            echo "500 - Class '$controllerName' tidak ditemukan";
            return;
        }

        $obj = new $controllerName();

        if (!method_exists($obj, $action)) {
            http_response_code(404);
            echo "404 - Method '$action' tidak ditemukan di $controllerName";
            return;
        }

        call_user_func_array([$obj, $action], $params);
    }
}