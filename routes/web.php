<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'components.front-end.auth.registration-form');




Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);



// Dashboard All Page Viwe Route
Route::view('/dashboardSummary', 'components.back-end.dasboardsummary');
Route::view('/dashboard-modals', 'components.back-end.modal');
Route::view('/dashboard-pos', 'components.back-end.pos');
