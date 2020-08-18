
@extends('layouts.todo')

@section('content')

            <h1 class="2xl border-bottom pb-4">What next you need To-Do</h1>

            <hr>

            <x-alert />

            <form action="{{ route('todos.create') }}" method="post"class="py-5">
                @csrf

                <input type="text" name="title" class="py-2 px-2 rounded-lg">

                <input type="submit" value="Create" class="p-2 border rounded-lg">

            </form>

            <a href="{{ route('todos.index') }}" class="m-5 py-1 px-1 bg-blue-300 cursor-pointer rounded text-white">Back</a>

@endsection


