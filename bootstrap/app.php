<?php

use Illuminate\Foundation\Application;
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
            'customer.auth' => \App\Http\Middleware\RedirectIfNotCustomer::class,
        ]);
		
		$middleware->validateCsrfTokens(except: [
			'pay-return',
            'webhook/delivery-status'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
