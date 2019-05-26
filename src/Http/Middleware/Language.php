<?php

namespace Digitalsigma\Translatable\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);

        if (in_array($locale, config('app.locales'))) {
            App::setLocale($locale);
            return $next($request);
        } else {
            $segments = $request->segments();
            $segments[0] = config('app.fallback_locale');

            return redirect(implode('/', $segments));
        }
    }
}
