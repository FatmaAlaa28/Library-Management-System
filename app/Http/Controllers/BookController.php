<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'author' => 'required',
            'price' => 'required',
        ]);
        $book = new Book();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->save();
        $books = Book::all();
        return view('books.show',compact('books'));
    }
}
