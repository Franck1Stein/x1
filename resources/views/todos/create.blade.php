<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Todos</title>
</head>
    <body>

        <div class="text-center pt-10">

            <h1 class="2xl">What next you need To-Do</h1>

            <hr>

            <x-alert>

            </x-alert>

            <form action="/todos/create" method="post"class="py-5">
                @csrf

                <input type="text" name="title" class="py-2 px-2 rounded-lg">

                <input type="submit" value="Create" class="p-2 border rounded-lg">

            </form>

        </div>

    </body>
</html>
