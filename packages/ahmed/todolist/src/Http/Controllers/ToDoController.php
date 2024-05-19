<?php

namespace Ahmed\Todolist\Http\Controllers;

use App\Http\Controllers\Controller;


class TodoController extends Controller
{
    public function index()
    {
        dd('hello index');

        // return view('todopackage::index');
    }
}
