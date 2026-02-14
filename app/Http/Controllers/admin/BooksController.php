<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('admin.books.index',compact('books'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publication_date' => 'nullable|date', 
            'isbn' => 'nullable|string|max:20',
            'cover_image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif',
            'language' => 'nullable|string|max:50',
            'pages' => 'nullable|integer',
            'format' => 'nullable|string|max:50',
            'category' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:50',
            'softCopyPrice' => 'nullable|numeric',
            'hardCopyPrice' => 'nullable|numeric',
            'rating' => 'nullable|numeric|min:0|max:5',
            'overview' => 'nullable|string',

        ]);

        if ($request->hasFile('cover_image')) {
            $imagepath = $request->file('cover_image')->store('covers', 'public');
            
            $validated['cover_image'] =$imagepath;
        }

        Book::create($validated);

        return redirect()->route('admin.books.index')->with('success', 'Book added successfully!');
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'publication_date' => 'nullable|date', 
            'isbn' => 'nullable|string|max:20',
            'cover_image' => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif',
            'language' => 'nullable|string|max:50',
            'pages' => 'nullable|integer',
            'format' => 'nullable|string|max:50',
            'category' => 'nullable|string|max:100',
            'status' => 'nullable|string|max:50',
            'softCopyPrice' => 'nullable|numeric',
            'hardCopyPrice' => 'nullable|numeric',
            'rating' => 'nullable|numeric|min:0|max:5',
            'overview' => 'nullable|string',

        ]);

        if ($request->hasFile('cover_image')) {
            $imagepath = $request->file('cover_image')->store('covers', 'public');
            
            $validated['cover_image'] =$imagepath;
        }

        $book->update($validated);

        return redirect()->route('admin.books.index')->with('success', 'Book updated successfully!');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('admin.books.index')->with('success', 'Book deleted successfully!');
    }
}