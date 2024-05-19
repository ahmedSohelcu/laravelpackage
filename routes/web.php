<?php

use Ahmed\Todolist\Hello;
use Ahmed\Todolist\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {    
    return view('welcome');
});


Route::get('/package-test', function () {    
    
    $obj = new Welcome();
    dd($obj->msg());
});
