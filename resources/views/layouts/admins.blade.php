<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admins @yield('title', 'Comics shop')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header>
        {{-- <nav class="nav justify-content-center navbar-light bg-primary shadow-lg align-items-center py-1">
            <a class="nav-link active text-black" href="#" aria-current="page">Dashboard</a>
            <a class="nav-link text-black" href="{{route('comics.index')}}">Comics</a>
            <a class="btn btn-info btn-sm ms-auto rounded-pill" href="{{route('home')}}">Home</a>
        </nav> --}}
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-4 text-center">
        <p class="p-5">
            Copyright &copy; 2023 Claudio
        </p>
    </footer>

</body>

</html>