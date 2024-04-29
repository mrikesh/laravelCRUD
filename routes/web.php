<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/customertable', function () {
//     return view('customertable');
// });

Route::get('/register',[RegistrationController::class, 'create']);
Route::post('/register',[RegistrationController::class, 'store']);
Route::get('/customertable', [RegistrationController::class, 'view']);
