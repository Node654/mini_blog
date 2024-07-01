<?php

use App\Controllers\ArticlesController;
use App\Controllers\HomeController;
use App\Route\Route;

Route::get('/^\/addArticle$/', [ArticlesController::class, 'create']);

Route::get('/^\/$/', [HomeController::class, 'index']);

Route::post('#^/articles/update$#', [ArticlesController::class, 'edit']);

Route::get('/^\/articles\/(\d+)$/', [ArticlesController::class, 'show']);

Route::post('/^\\/article\\/store$/', [ArticlesController::class, 'store']);

Route::get('#^/edit/(\d+)$#', [ArticlesController::class, 'update']);

Route::post('/^\/delete$/', [ArticlesController::class, 'destroy']);
