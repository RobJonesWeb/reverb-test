<?php

use Illuminate\Support\Facades\Route;
use App\Events\ReverbNotification;

Route::get('/', function () {
    $message = 'reverb test 11/03';
    broadcast(new ReverbNotification($message));
    return 'triggered';
});

Route::get('/receiver', function () {
    return view('receiver');
});
