<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \App\Http\Middleware\TrimStrings::class,
        \App\Http\Middleware\TrustProxies::class,
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    ];

    protected $middlewareGroups = [
        'api' => [
            'throttle:60,1',
            'bindings',
            \App\Http\Middleware\AuthGates::class,
        ],
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
            \App\Http\Middleware\AuthGates::class,
            \App\Http\Middleware\SetLocale::class,

            \App\Http\Middleware\HttpsProtocol::class,
        ],
    ];

    protected $routeMiddleware = [
        'can'           => \Illuminate\Auth\Middleware\Authorize::class,
        'auth'          => \Illuminate\Auth\Middleware\Authenticate::class,
        'guest'         => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'signed'        => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle'      => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'bindings'      => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'auth.basic'    => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,

        'admin'         => \App\Http\Middleware\IsAdminMiddleware::class,
        'artist'        => \App\Http\Middleware\IsArtistMiddleware::class,
        'client'        => \App\Http\Middleware\IsClientMiddleware::class,
        'expert'        => \App\Http\Middleware\IsExpertMiddleware::class,
        'prevent-back'  => \App\Http\Middleware\PreventBackHistory::class,
        'roleChecker'   => \App\Http\Middleware\RoleChecker::class,
    ];
}
