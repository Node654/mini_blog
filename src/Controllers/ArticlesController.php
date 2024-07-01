<?php

namespace App\Controllers;

use App\Service\Blog\Blog;

class ArticlesController
{
    public static function create()
    {
        require_once PAGES . '/articles/add/addForm.php';
    }

    public static function show(int $id)
    {
        $blog = Blog::select('articles', ['id' => $id]);
        if (! $blog)
        {
            header('Location: /');
            die();
        }
        extract(['blog' => $blog]);
        require_once PAGES . '/showArticle.php';
    }

    public static function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $id = Blog::insert('articles', ['title' => $title, 'content' => $content]);
        header("Location: /articles/$id");
        die();
    }

    public static function update(int $id)
    {
        $blog = Blog::select('articles', ['id' => $id]);
        if (! $blog)
        {
            header('Location: /');
            die();
        }
        extract(['blog' => $blog]);
        require_once PAGES . '/articles/update/editForm.php';
    }

    public static function edit()
    {
        $id = (int)$_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        Blog::update('articles', ['id' => $id, 'title' => $title, 'content' => $content], 'id = :id');
        header("Location: /articles/$id");
        die();
    }

    public static function destroy()
    {
        Blog::delete('articles', ['id' => (int)$_POST['id']]);
        header("Location: /");
        die();
    }
}