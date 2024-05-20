
@extends('todocrud::layouts.app')
@section('content')        

<div class="container mt-5">
    <h1 class="mb-4">Todo List from package</h1>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Buy groceries</td>
                <td>Buy milk, bread, and eggs</td>
                <td>Not Completed</td>
                <td>2024-05-20 08:00:00</td>
                <td>2024-05-20 08:00:00</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Complete project report</td>
                <td>Finish the quarterly project report</td>
                <td>Not Completed</td>
                <td>2024-05-20 09:00:00</td>
                <td>2024-05-20 09:00:00</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Book flight tickets</td>
                <td>Book tickets for the vacation</td>
                <td>Completed</td>
                <td>2024-05-19 10:00:00</td>
                <td>2024-05-19 10:00:00</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Call plumber</td>
                <td>Fix the leak in the kitchen</td>
                <td>Not Completed</td>
                <td>2024-05-18 11:00:00</td>
                <td>2024-05-18 11:00:00</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Plan birthday party</td>
                <td>Organize a party for Sarah's birthday</td>
                <td>Completed</td>
                <td>2024-05-17 12:00:00</td>
                <td>2024-05-17 12:00:00</td>
            </tr>
        </tbody>
    </table>
</div>
            
{{-- <a href="{{ route('todos.create') }}">Create todos</a>     --}}
    <ul>
        @foreach ($todos as $todo)
            <li>
                {{ $todo->name }} 
                {{-- <a href="{{ route('todos.edit', $todo->id) }}">Edit</a> --}}
            </li>
        @endforeach
    </ul>
@endsection


