<?php

use Illuminate\Support\Facades\Route;

// Route::get('/todo', [TodoController::class, 'index']);
Route::get('api/todo', function(){
    dd('welcome from api route of package..');
});