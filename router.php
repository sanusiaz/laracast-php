<?php
    include_once(dirname(__FILE__) . './app/Http/Route.php');

    require_once(dirname(__FILE__) . './app/controllers/HomePageController.php');

    use App\Controllers\HomePageController\HomePageController;
    use App\Http\Route\Route;

    Route::get_instance();
    
    Route::get('/', 'home/index');

    Route::get('/about', [HomePageController::class, 'index']);
   
