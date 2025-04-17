<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\AdminMiddleware; // IMPORT de ton middleware

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     */
    protected $middleware = [
        // …
    ];

    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            // …
        ],

        'api' => [
            // …
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     */
    protected $routeMiddleware = [
        'auth'  => \App\Http\Middleware\Authenticate::class,
        'admin' => AdminMiddleware::class,    // <-- Ici
        // ajoute tes autres middlewares si besoin
    ];
}
