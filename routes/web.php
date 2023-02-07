<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Models\Books;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',[
        "books"=>Books::all()
    ]);
});
Route::get('/create', [BooksController::class, 'create']);
Route::get('/show/{book:id}', [BooksController::class, 'show']);
Route::post('/book', [BooksController::class, 'store']);