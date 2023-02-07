<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Models\Books;

Route::get('/', function () {
    return view('index',[
        "books"=>Books::all()
    ]);
});
Route::get('/create', [BooksController::class, 'create']);
Route::post('/book', [BooksController::class, 'store']);
Route::get('/show/{book:id}', [BooksController::class, 'show']);
Route::get('/edit/{book:id}', [BooksController::class, 'edit']);
Route::post('/edit/{book:id}', [BooksController::class, 'update']);
Route::post('/delete/{book:id}', [BooksController::class, 'destroy']);