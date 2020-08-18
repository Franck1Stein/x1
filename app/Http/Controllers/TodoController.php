<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::orderBy('completed')->get();
        return view('todos.index', compact('todos'));
    }

    public function create() {
        return view('todos.create');
    }

    public function edit(Todo $todo) {
        // $todo = Todo::find($todo); //Dynamic model binding will take care of that
        return view('todos.edit', compact('todo'));
    }

    public function store(TodoCreateRequest $request) {

        Todo::create( $request->all() );

        return redirect()->back()->with('message', 'Todo created successfully');
    }

    public function update(TodoCreateRequest $request, Todo $todo) {
        $todo->update(['title' => $request->title]);

        return redirect(route('todos.index'))->with('message', 'Updated!!');
    }

    public function complete(Todo $todo) {

        $todo->update(['completed' => true]);

        return redirect()->back()->with('message', 'Task Marked as completed');
    }

}
