<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/customertable', function () {
//     return view('customertable');
// });

Route::get('/register',[RegistrationController::class, 'create'])->name('customer.create');
Route::post('/register',[RegistrationController::class, 'store']);
Route::get('/customertable', [RegistrationController::class, 'view']);
Route::get('/customer/delete/{id}', [RegistrationController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}', [RegistrationController::class, 'edit'])->name('customer.edit');
Route::post('/customer/update/{id}', [RegistrationController::class, 'update'])->name('customer.update');
