<?php

namespace Ahmed\Todocrud\Http\Controllers;

use Ahmed\Todocrud\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    // public function index()
    // {
    //     // dd('hello from index of todo controller');

    //     return view('todopackage::todos.index');
    // }

    public function index()
    {
        $todos = Todo::all();
        return view('todopackage::todos.index', compact('todos'));
    }

    public function create()
    {
        return view('todopackage::create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('Todos.index');
    }

    public function show(Todo $Todo)
    {
        return view('todopackage::show', compact('Todo'));
    }

    public function edit(Todo $Todo)
    {
        return view('todopackage::edit', compact('Todo'));
    }

    public function update(Request $request, Todo $Todo)
    {
        $Todo->update($request->all());
        return redirect()->route('Todos.index');
    }

    public function destroy(Todo $Todo)
    {
        $Todo->delete();
        return redirect()->route('Todos.index');
    }
}

