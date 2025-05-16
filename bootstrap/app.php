<?php

declare(strict_types = 1);

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->validateCsrfTokens([
            'api/*'
        ]);//disable middlwware (csrf) to all routes in api/*
        //see documentation https://laravel.com/docs/12.x/csrf#csrf-excluding-uris
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
