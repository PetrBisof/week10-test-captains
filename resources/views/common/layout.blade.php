<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Starfleet</title>

    <link href="https://fonts.googleapis.com/css?family=Architects+Daughter|Bangers&amp;subset=latin-ext" rel="stylesheet">
    <link href="C:\www\bootcamp\test_laravel\public\css\index.css" rel="stylesheet">
    
    
    {{-- load the stylesheet --}}
</head>
<body>

    <nav class="menu">
        <a href="http://www.laravelautumn.test/">Home</a>
        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @else
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>
    
    @yield('content')

</body>
</html>
