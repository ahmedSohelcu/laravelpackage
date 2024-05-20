<?php

namespace Ahmed\Todocrud\Http\Controllers;

use Ahmed\Todocrud\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        // Define the view path in the published directory
        $publishedViewPath = resource_path('views/todocrud');

        // Check if the published view exists
        if (file_exists($publishedViewPath)) {
            // Load the view from the published directory    
            return view('todocrud.todos.index', compact('todos'));
        } else {            
            return view('todocrud::todos.index', compact('todos'));
        }	
    }


    public function create()
    {
        return view('todocrud::create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect()->route('Todos.index');
    }

    public function show(Todo $Todo)
    {
        return view('todocrud::show', compact('Todo'));
    }

    public function edit(Todo $Todo)
    {
        return view('todocrud::edit', compact('Todo'));
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

