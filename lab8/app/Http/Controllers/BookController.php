<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::where('user_id', $request->user()->id)
            ->latest()
            ->get();

        return view('dashboard', ['books' => $books]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:150'],
            'author' => ['required', 'string', 'max:100'],
            'pages' => ['required', 'integer', 'between:1,10000'],
        ]);

        $validated['user_id'] = $request->user()->id;
        Book::create($validated);

        return redirect()->route('dashboard')->with('success', 'Book added to your reading list.');
    }
}
