<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

<<<<<<< HEAD
Route::get('/home', [PageController::class, 'home']);
=======
Route::get('/', [PageController::class, 'home']);
>>>>>>> b38206ac7376d41bf8af11b27f7f9943d4ab0cac
Route::get('/about', [PageController::class, 'about']);
