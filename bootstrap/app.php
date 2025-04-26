<?php

use App\Models\User;
use Illuminate\Foundation\Application;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DoctorMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([

            //middleware buraya ekledik yeni güncelleme ile
            'admin'=>AdminMiddleware::class,
            'doctor'=>DoctorMiddleware::class,
            'user'=>UserMiddleware::class,
            ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
