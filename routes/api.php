<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/new_message', [\App\Http\Controllers\WhatsAppController::class, 'newMessage'])
    ->middleware(\App\Http\Middleware\TwilioRequestMiddleware::class)
    ->name('new_message');
