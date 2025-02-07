<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Web</title>
</head>

<body>

    <!-- Menu header -->
    <header>
        <p>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('blog') }}">Blog</a>

            @auth
            <a href="{{ route ('dashboard')}}">Dashboard</a>
            @else
            <a href="{{ route ('login')}}">Login</a>
            @endauth
        </p>

        <hr>

        @yield('menu')
    </header>
</body>


<!-- Footer -->
<footer>
    <hr>
    <p>
        <a href="{{ route('home') }}">sexar</a>
        <a href="{{ route('blog') }}">derretir</a>
    </p>


    @yield('footer')
</footer>
