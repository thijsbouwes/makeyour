<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        // Local not in route, redirect to user lang or fallback locale
        if (!in_array($locale, config('app.locales'))) {
            $segments = $request->segments();
            $locale = $request->getPreferredLanguage(config('app.locales')) ?? config('app.fallback_locale');
            array_unshift($segments, $locale);

            return redirect()->to(implode('/', $segments));
        }

        App::setLocale($locale);
        URL::defaults(['locale' => $locale]);

        return $next($request);
    }
}
