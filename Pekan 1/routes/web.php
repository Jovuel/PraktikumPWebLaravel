<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/student', function () {
    return view('student/index');
});

Route::get('/lingkaran', [StudentController::class, 'lingkaran']);