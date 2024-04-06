<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
<header>
    <h1>Main layout</h1>
    <nav>
        <ul>
            <li><a href ="{{ url('/home') }}">Home</a></li>
            <li><a href ="{{ url('/about')}}">About</a></li>
            <li>Setting</li>
        </ul>
    </nav>
</header>
{{ $slot }}
</body>
</html>