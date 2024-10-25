<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    public function index() {
        $books = Book::with('rents')->get();
        return view('books.index', compact('books'));
    }

    public function showUnrentedBooks() {
        $books = Book::doesntHave('rents')->get();
        return view('books.index', compact('books'));
    }

    public function filterBooksByPrice() {
        $books = Book::whereBetween('price_rent', [2000, 6000])->get();
        return view('books.index', compact('books'));
    }

    public function create() {
        return view('books.form', [
            'title' => 'Create',
            'book' => new Book(),
            'method' => 'post'
        ]);
    }

    public function store(BookRequest $request) {
        Book::create($request->all());
        Alert::success('Success', 'Book Created Successfully.');
        return redirect()->route('books.index');
    }

    public function edit(Book $book) {
        return view('books.form', [
            'title' => 'Edit',
            'book' => $book,
            'method' => 'put'
        ]);
    }

    public function update(BookRequest $request, Book $book) {
        $book->update($request->all());
        Alert::success('Success', 'Book Edited Successfully.');
        return redirect()->route('books.index');
    }

    public function delete(Book $book) {
        $book->delete();
        Alert::success('Success', 'Book Deleted Successfully.');
        return redirect()->route('books.index');
    }
}
