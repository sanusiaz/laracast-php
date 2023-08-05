<?php

    include_once(dirname(__FILE__, 2) . './app/Http/Route.php');

    require_once(dirname(__FILE__, 2) . './app/controllers/HomePageController.php');
    require_once(dirname(__FILE__, 2) . './app/controllers/NoteController.php');

    use App\Controllers\HomePageController;
    use App\Http\Route\Route;
    use App\Controllers\NoteController;

    Route::get_instance();
    
    Route::get('/', [HomePageController::class, 'index']);
    Route::get('/about', 'about/index');
    Route::get('/notes', [NoteController::class, 'index']);
    Route::get('/notes/create', [NoteController::class, 'create']);
   
