<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Insurance App</a>
            <a class="nav-link" href="{{ route('owners.index') }}">Owners</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>
</body>
</html>
