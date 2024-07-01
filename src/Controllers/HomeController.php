<?php

namespace App\Controllers;

use App\Service\Blog\Blog;

class HomeController
{
    public static function index()
    {
        extract(['blogs' => Blog::select('articles', null, true)]);
        require_once PAGES . '/home.php';
    }
}