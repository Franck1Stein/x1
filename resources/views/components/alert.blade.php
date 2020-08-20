<div>
    <!-- Be present above all else. - Naval Ravikant -->

    @if(session()->has('message'))

        {{ $slot }}

<<<<<<< HEAD
        <div class="alert alert-success">{{ session()->get('message') }}</div>
=======
        <div class="py-4 px-2 bg-green-300">{{ session()->get('message') }}</div>
>>>>>>> feature1

    @elseif(session()->has('error'))

        {{ $slot }}

<<<<<<< HEAD
        <div class="alert alert-danger">{{ session()->get('error') }}</div>

    @endif

=======
        <div class="py-4 px-2 bg-red-300">{{ session()->get('error') }}</div>

    @endif

    @if ($errors->any())
        <div class="py-4 px-2 bg-red-300">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

>>>>>>> feature1
</div>
