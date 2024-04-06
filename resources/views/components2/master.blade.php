<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
        <ul>
            <li> <a href="{{ url('home2') }}">home</a></li>
            <li> <a href="{{ url('about2') }}">about</a></li>
            <li>Setting</li>
        </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>