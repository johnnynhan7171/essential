<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('test') }}">Test</a>
            </li>
            <li>
                <a href="{{ route('blog') }}">Blog</a>
            </li>
            <li>
                <a href="{{ route('admin.users.index') }}">All Users</a>
            </li>
            <li>
                <a href="{{ route('admin.users.show', ['id' => 1]) }}">Single User</a>
            </li>
        </ul>
        @yield('content')
    </body>
</html>
