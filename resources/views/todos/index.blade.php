
@extends('layouts.todo')

@section('content')

    <div class="flex justify-center border-bottom pb-4">

        <h1 class="2xl">All Your To-Dos</h1>

        <a class="mx-5 py-1 px-1 bg-blue-300 cursor-pointer rounded text-dark" href="{{ route('todos.create') }}">Create new</a>
    </div>

        <ul class="my-5">

            <x-alert />

            @foreach($todos as $todo)
                <li class="flex justify-between p-2">

                    @if($todo->completed)

                        <p class="line-through">{{ $todo->title }}</p>

                    @else
                        <p{{ $todo->title }}</p>
                    @endif

                    <div>

                        <a class="text-orange-300 cursor-pointer text-dark" href="{{ '/todos/' . $todo->id .'/edit' }}">

                            <span class="fas fa-edit px-2" />

                        </a>

                        @if($todo->completed)

                            <span class="fas fa-check text-green-400 px-2"></span>

                        @else

                            <span onclick="event.preventDefault();document.getElementById('\'form-complete-\'.$todo->id').submit();" class="fas fa-check text-gray-300 cursor-pointer px-2"></span>

                            <form style="display: none" id="{{ 'form-complete-'.$todo->id }}" method="post" action="{{ route('todos.complete',$todo->id) }}">

                                @csrf
                                @method('put')

                            </form>

                        @endif

                    </div>

                </li>
            @endforeach

        </ul>

@endsection


