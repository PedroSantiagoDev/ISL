<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Library;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $libraries = Library::all();
        $authors = Author::all();

        return view('books.create', compact('libraries', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $bookAttributes = $request->validate([
            'title' => ['required', 'min:3'],
            'isbn' => ['required', 'nullable'],
            'year' => ['required'],
            'area' => ['required'],
            'publisher' => ['required'],
            'library_id' => ['required'],
            'authors' => ['required'],
            'authors.*' => ['exists:authors,id']
        ]);

        $book = Book::create($bookAttributes);
        $book->authors()->attach($request->authors);
        return redirect('/');
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
