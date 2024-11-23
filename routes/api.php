<?php

use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrarianController;

Route::get('/login',[LibrarianController::class,'login'])->name('librarian.login');
Route::get('/books', [App\Http\Controllers\BookController::class,'book'])->name('book');
Route::post('/register',[App\Http\Controllers\LibrarianController::class,'store'])->name('store');
Route::post('/add_book',[App\Http\Controllers\BookController::class,'store'])->name('book.store');
Route::post('/login', [LibrarianController::class,'librarianAuthentication'])->name('librarian.authentication');
//Update a book
Route::get('/getOneBook/{id}', [App\Http\Controllers\BookController::class,'getoneBook']);
Route::put('/edit-book/{id}',[App\Http\Controllers\BookController::class,'update']);
//Delete Book
Route::delete('delete-book/{id}',[App\Http\Controllers\BookController::class,'destroy']);