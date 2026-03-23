<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insurance App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Insurance App</a>

        <ul class="navbar-nav flex-row">

            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('owners.index') }}">Owners</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link text-white" href="{{ route('cars.index') }}">Cars</a>
            </li>

            @guest
                <li class="nav-item me-3">
                    <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li class="nav-item me-3 text-white">
                    {{ auth()->user()->name }}
                </li>

                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-link text-white p-0">Logout</button>
                    </form>
                </li>
            @endguest

        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>
