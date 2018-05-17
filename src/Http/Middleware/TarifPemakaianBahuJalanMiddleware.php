<?php namespace Bantenprov\TarifPemakaianBahuJalan\Http\Middleware;

use Closure;

/**
 * The TarifPemakaianBahuJalanMiddleware class.
 *
 * @package Bantenprov\TarifPemakaianBahuJalan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPemakaianBahuJalanMiddleware
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
        return $next($request);
    }
}
