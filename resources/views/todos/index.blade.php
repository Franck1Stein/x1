
@extends('layouts.todo')

@section('content')

    <div class="flex justify-center border-bottom pb-4">

        <h1 class="2xl">All Your To-Dos</h1>

        <a class="mx-5 py-1 px-1 bg-blue-300 cursor-pointer rounded text-dark" href="/todos/create">Create new</a>
    </div>

        <ul class="my-5">

            <x-alert />

            @foreach($todos as $todo)
                <li class="flex justify-between p-2">

                    <p>{{ $todo->title }}</p>

                    <a class="mx-5 py-1 px-1 bg-orange-300 cursor-pointer rounded text-dark" href="{{ '/todos/' . $todo->id .'/edit' }}">Edit</a>

                </li>
            @endforeach

        </ul>

@endsection


