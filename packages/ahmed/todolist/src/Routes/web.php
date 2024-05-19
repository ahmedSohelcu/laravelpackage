<?php

use Illuminate\Support\Facades\Route;

// Route::get('/todo', [TodoController::class, 'index']);
Route::get('/todos', function(){
    // dd('welcom to web routes of package..');    
    return view('todopackage::todos.index');
});
