<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $allowedLocales = ['en', 'tr', 'lt'];
        $locale = session('locale') ?? $request->cookie('locale') ?? config('app.locale');

        if (!in_array($locale, $allowedLocales, true)) {
            $locale = config('app.locale');
        }

        session()->put('locale', $locale);
        App::setLocale($locale);

        return $next($request);
    }
}
