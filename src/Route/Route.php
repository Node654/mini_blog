<?php

namespace App\Route;

class Route
{
    private static $getRoutes = [];
    private static $postRoutes = [];

    public static function get($pattern, $callback) {
        self::$getRoutes[$pattern] = $callback;
    }

    public static function post($pattern, $callback) {
        self::$postRoutes[$pattern] = $callback;
    }

    public static function run($url, $method) {
        $routes = $method === 'GET' ? self::$getRoutes : self::$postRoutes;
        foreach ($routes as $pattern => $callback) {
            if (preg_match($pattern, $url, $matches)) {
                array_shift($matches);
                return call_user_func_array($callback, $matches);
            }
        }
        echo "404 Not Found";
    }
}