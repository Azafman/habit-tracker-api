<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (): array {
    return [config('app.name')];
});
