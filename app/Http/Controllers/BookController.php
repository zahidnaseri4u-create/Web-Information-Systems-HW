<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $books = Book::where('user_id', auth()->id())
        ->latest()
        ->get();

    return view('dashboard', compact('books'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => ['required', 'string', 'max:150'],
        'author' => ['required', 'string', 'max:100'],
        'pages' => ['required', 'integer', 'min:1', 'max:10000'],
    ]);

    $validated['user_id'] = auth()->id();

    Book::create($validated);

    return redirect()
        ->route('dashboard')
        ->with('success', 'Book registered successfully.');
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
