<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/books', [BookController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
