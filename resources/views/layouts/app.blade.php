<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('Insurance App') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #ffffff;
            color: #1f2937;
        }

        .navbar-soft {
            background: #ffffff;
            border-bottom: 1px solid #dbe4ef;
        }

        .navbar-soft .navbar-brand,
        .navbar-soft .nav-link {
            color: #1f2937 !important;
        }

        .lang-dropdown {
            min-width: 120px;
            border-color: #b9c7d8;
            color: #334155;
        }

        .lang-dropdown .dropdown-item.active {
            background: #dce8f7;
            color: #0f172a;
            font-weight: 600;
        }

        .btn-success {
            background-color: #2f9e7e;
            border-color: #2f9e7e;
        }

        .btn-success:hover {
            background-color: #278a6d;
            border-color: #278a6d;
        }

        .btn-primary {
            background-color: #4f7dc9;
            border-color: #4f7dc9;
        }

        .btn-primary:hover {
            background-color: #406fb9;
            border-color: #406fb9;
        }

        .btn-warning {
            background-color: #e8ba54;
            border-color: #e8ba54;
            color: #1f2937;
        }

        .btn-warning:hover {
            background-color: #d8a741;
            border-color: #d8a741;
            color: #111827;
        }

        .btn-danger {
            background-color: #d66a6a;
            border-color: #d66a6a;
        }

        .btn-danger:hover {
            background-color: #c95959;
            border-color: #c95959;
        }

        .btn-info {
            background-color: #5baec7;
            border-color: #5baec7;
            color: #0f172a;
        }

        .btn-info:hover {
            background-color: #489cb5;
            border-color: #489cb5;
            color: #0f172a;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand navbar-soft mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">{{ __('Insurance App') }}</a>

        <ul class="navbar-nav flex-row align-items-center">
            <li class="nav-item me-3">
                <a class="nav-link" href="{{ route('owners.index') }}">{{ __('Owners') }}</a>
            </li>

            <li class="nav-item me-3">
                <a class="nav-link" href="{{ route('cars.index') }}">{{ __('Cars') }}</a>
            </li>

            <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ strtoupper(app()->getLocale()) }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end lang-dropdown">
                    <li><a class="dropdown-item {{ app()->getLocale() === 'en' ? 'active' : '' }}" href="{{ route('language.switch', 'en') }}">EN</a></li>
                    <li><a class="dropdown-item {{ app()->getLocale() === 'tr' ? 'active' : '' }}" href="{{ route('language.switch', 'tr') }}">TR</a></li>
                    <li><a class="dropdown-item {{ app()->getLocale() === 'lt' ? 'active' : '' }}" href="{{ route('language.switch', 'lt') }}">LT</a></li>
                </ul>
            </li>

            @guest
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item me-3">
                    {{ auth()->user()->name }}
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-link p-0">{{ __('Logout') }}</button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

