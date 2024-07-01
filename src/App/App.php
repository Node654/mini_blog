<?php

namespace App\App;

use App\Route\Route;

class App
{
    public static function run()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $method  = $_SERVER['REQUEST_METHOD'];
        Route::run($uri, $method);
    }
}