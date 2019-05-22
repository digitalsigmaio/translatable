<?php
/**
 * User: Manson
 * Date: 11/29/2018
 * Time: 2:59 PM
 */

namespace Digitalsigma\Translatable\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Multilang
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('locale')) {
            session()->put('locale', config('translatable.locale'));
        }

        $session = session()->get('locale');
        App::setLocale($session);

        return $next($request);
    }
}
