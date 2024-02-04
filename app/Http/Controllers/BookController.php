<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //get all books for specific writer
    public function getAllBooks($writer_id)
    {
        $writer = Writer::find($writer_id);
        $books = $writer->books;
        return response()->json($books);
    }

    public function show(Book $book)
    {
        return view('books.show', ['book' => $book]);
    }
}
