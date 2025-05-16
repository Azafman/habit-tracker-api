<?php

declare(strict_types = 1);

use App\Http\Controllers\HabitController;
use Illuminate\Support\Facades\Route;

//Route::get('/', fn (): array => [config('app.name')]);

Route::prefix('/api')
->name('api.')->group(function() {
    Route::apiResource('habits', HabitController::class);
});
//follow the RESTful pattern
//see the pattern laravel: https://laravel.com/docs/12.x/controllers#resource-controllers