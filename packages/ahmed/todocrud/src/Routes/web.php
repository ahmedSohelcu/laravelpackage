<?php

use Ahmed\Todocrud\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/todos', function(){
    dd('welcom to web routes of package..');        
    // return view('todopackage::todos.index');
});


Route::get('/todo-list', [TodoController::class, 'index']);