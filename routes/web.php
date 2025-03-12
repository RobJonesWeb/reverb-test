<?php

use Illuminate\Support\Facades\Route;
use App\Events\ReverbNotification;

Route::get('/', function () {
    $message = 'reverb test - ' . date('Y-m-d H:i:s');  ;
    broadcast(new ReverbNotification($message));
    return 'triggered';
});

Route::get('/receiver', function () {
    return view('receiver');
});
