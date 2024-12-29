<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::view('contact', 'contact');
Route::view('publisher', 'publisher');
Route::view('book_detail', 'book_detail');
Route::get('/category/{id}', [BookController::class, 'category']);
Route::get('/book_detail/{id}', [BookController::class, 'book_detail']);

// Route::get('/', function () {
//     $books = DB::table('books')->get();
//     return view('home', [
//         'books' => $books
//     ]);
// });

