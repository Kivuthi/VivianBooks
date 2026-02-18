<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FeaturedBook;
use Illuminate\Http\Request;

class FeaturedBooksController extends Controller
{
    public function index()
    {
        $featuredBooks = FeaturedBook::latest()->get();
        return view('admin.featuredBooks.index', compact('featuredBooks'));
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
            'softCopyFile' => 'required|file|mimes:pdf,epub,mobi|max:10240',

        ]);

        if ($request->hasFile('cover_image')) {
            $imagepath = $request->file('cover_image')->store('featuredBook', 'public');
            
            $validated['cover_image'] =$imagepath;
        }

        if ($request->hasFile('softCopyFile')) {
            $filePath = $request->file('softCopyFile')->store('softcopies', 'public');

            $validated['softCopyFile'] = $filePath;
        }

        FeaturedBook::create($validated);

        return redirect()->route('admin.featuredBooks.index')->with('success', 'Featured book added successfully!');
    }

    public function show($id)
    {
        $featuredBook = FeaturedBook::findOrFail($id);
        return view('admin.featuredBooks.show', compact('featuredBook'));
    }

    public function update(Request $request, $id)
    {
        $featuredBook = FeaturedBook::findOrFail($id);

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
            'softCopyFile' => 'required|file|mimes:pdf,epub,mobi|max:10240',

        ]);

        if ($request->hasFile('cover_image')) {
            $imagepath = $request->file('cover_image')->store('featuredBook', 'public');
            
            $validated['cover_image'] =$imagepath;
        }

        if ($request->hasFile('softCopyFile')) {
            $filePath = $request->file('softCopyFile')->store('softcopies', 'public');

            $validated['softCopyFile'] = $filePath;
        }

        $featuredBook->update($validated);

        return redirect()->route('admin.featuredBooks.index')->with('success', 'Featured book updated successfully!');
    }

    public function destroy($id)
    {
        $featuredBook = FeaturedBook::findOrFail($id);
        $featuredBook->delete();

        return redirect()->route('admin.featuredBooks.index')->with('success', 'Featured book deleted successfully!');
    }
}
