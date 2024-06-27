<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LibraryController extends Controller
{
    public function index(): View
    {
        $libraries = Library::all();

        return view('library.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('library.create');
    }

    public function store(Request $request): RedirectResponse
    {

        $libraryAttributes = $request->validate([
            'name' => ['required'],
            'address' => ['required']
        ]);

        Library::create($libraryAttributes);

        return redirect()->route('library.index');
    }
}
