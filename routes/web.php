<?php

use App\Http\Controllers\CommentmodelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::post('/comments', [CommentmodelController::class, 'store'])->name('comments.store');