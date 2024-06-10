<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Фронт
Route::name('front.')
    ->group(function () {
        Route::get('/', [MainController::class, 'index'])->name('main');
        Route::post('/send', [MainController::class, 'send'])->name('send');
    });

//Сброс кэша
Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "cache is clear";
});
