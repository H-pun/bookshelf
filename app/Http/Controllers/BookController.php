<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function book_detail(Request $request, $id)
    {
        $book = book::join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('books.id', $id)->get(['books.*',  'publishers.name as publisher'])->first();

        return view('book_detail', [
            'book' => $book,
        ]);
    }

    public function category(Request $request, $name)
    {
        $books = book::join('book_categories as bc', 'bc.book_id', '=', 'books.id')
            ->join('categories', 'bc.category_id', '=', 'categories.id')
            ->where('categories.name', $name)
            ->get(['books.*',  'categories.name as category']);

        return view('category', [
            'books' => $books,
            'category'=> $name
        ]);
    }
}
