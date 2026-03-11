<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('admin.books.index', compact('books'));
    }
    public function browse(Request $request)
    {
        $query = Book::query();

        // Filter by search
        if ($request->has('search') && $request->search) {
            $search = $request->search;
            $query->where('title', 'like', "%$search%")
                  ->orWhere('author', 'like', "%$search%");
        }

        // Filter by category
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }

        // Filter by price range
        if ($request->has('price') && $request->price) {
            $priceRange = $request->price;
            // You can implement price filtering logic here
        }

        // Get all distinct categories for the sidebar
        $categories = Book::distinct()->pluck('category')->filter()->values();

        // Paginate results
        $books = $query->latest()->paginate(8);

        return view('pages.books.browse', compact('books', 'categories'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        return view('pages.books.show', compact('book'));
    }
}
