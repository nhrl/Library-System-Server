<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function book() {
        $book = book::all();
        return response()->json($book);
    }

    public function store(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->publisher = $request->publish;
        $book->author = $request->author;
        $book->year_publish = $request->year_pub;
        $book->volume = $request->volume;
        $book->save();
        return response()->json();
    }

    public function index() {
        $book = Book::all();
        return view('dashboard', ['books' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('update', compact('book'));
    }
    
    public function return() {
        $book = Book::all();
        return view('dashboard', ['books' => $book]);
    }

    public function update(Request $request,$id) {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->publisher = $request->input('publisher');
        $book->author = $request->input('author');
        $book->year_publish = $request->input('year_pub');
        $book->volume = $request->input('volume');
        $book->update();
        return response()->json();
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete();
        return response()->json();
    }

    public function getoneBook(Request $request) {
        $book = Book::find($request->id);
        return response()->json($book);
    }
}
