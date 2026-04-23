<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = Book::all();
        return view('book.index', [
            'items' => $book
        ]);
    }
    public function create()
    {
        return view('book.create');
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit', [
            'item' => $book
        ]);
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect('/books');
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $book->update([
            'Book_Name' => $request->Book_Name,
            'Book_Author' => $request->Book_Author,
            'Book_Stock' => $request->Book_Stock,
            'Book_Date' => $request->Book_Date,
        ]);

        return redirect('/books');
    }

    public function store(Request $request)
    {
        Book::create([
            'Book_Name' => $request->Book_Name,
            'Book_Author' => $request->Book_Author,
            'Book_Stock' => $request->Book_Stock,
            'Book_Date' => $request->Book_Date,
        ]);

        return redirect('/books');
    }
}


