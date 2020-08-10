<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use Illuminate\Support\Facades\Validator;
use App\Todo;

class TodoController extends Controller
{
    public function index() {
        return view('todos.index');
    }

    public function create() {
        return view('todos.create');
    }

    public function edit() {
        return view('todos.edit');
    }

    public function store(TodoCreateRequest $request) {

//        $request->validate([
//            'title' => 'required|max:255',
//        ]);

        // $input = $request->all(),
        // $rules come from Validator request form
//        $messages = [
//            'title.max' => 'the todo title should not be greater than 255 chars',
//        ];
//        $validator = Validator::make($request->all(), $rules, $messages);
//
//        if ($validator->fails()) {
//            return redirect()->back()
//                             ->withErrors($validator)
//                             ->withInput();
//        }

        Todo::create($request->all());

        return redirect()->back()->with('message', 'Todo created successfully');
    }

}
