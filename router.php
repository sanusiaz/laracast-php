<?php
    include_once(dirname(__FILE__) . './app/Http/Route.php');
    use App\Http\Route\Route;

    Route::get_instance();
    
    Route::get('/', 'home/index');

    Route::get('/about', function () {
        
        echo "Do Something here";

    });
   
