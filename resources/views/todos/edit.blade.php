@extends('layouts.todo')

@section('content')

    <h1 class="2xl border-bottom pb-4">Update This todo list</h1>

    <hr>

    <x-alert>

    </x-alert>

    <form action="{{ route('todos.update', $todo->id) }}" method="post" class="py-5">
        @csrf
        @method('patch')

        <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 rounded-lg">

        <input type="submit" value="Update" class="p-2 border rounded-lg">

    </form>

    <a href="{{ route('todos.index') }}" class="m-5 py-1 px-1 bg-blue-300 cursor-pointer rounded text-white">Back</a>

@endsection
