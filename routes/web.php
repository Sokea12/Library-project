<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookIssueController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('authors', AuthorController::class);

Route::resource('publishers', PublisherController::class);

Route::resource('categories', CategoryController::class);

Route::resource('books', BookController::class);

Route::resource('students', StudentController::class);

Route::resource('book_issues', BookIssueController::class);
