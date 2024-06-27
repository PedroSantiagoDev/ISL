<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
//        $books = Book::all();

        return view('books.index', [
            'books' => '$books[0]',
            'featuredBooks' => '$books[1]',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bookAttributes = $request->validate([
            'title' => ['required', 'min:3'],
            'isbn' => ['required', 'nullable'],
            'year' => ['required'],
            'area' => ['required'],
            'publisher' => ['required']
        ]);

        $authorAttributes = $request->validate([
            'name' => ['required', 'nullable'],
            'surname' => ['required'],
            'biography' => ['required']
        ]);

        $libraryAttributes = $request->validate([
            'name' => ['required', 'nullable'],
            'surname' => ['address']
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
