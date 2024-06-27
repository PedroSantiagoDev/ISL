<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $authors = Author::all();

        return view('author.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $authorAttributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'biography' => ['required']
        ]);

        Author::create($authorAttributes);

        return redirect()->route('author.index');
    }
}
