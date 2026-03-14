<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('pages.index', [
            'featuredBooks' => \App\Models\FeaturedBook::all()
        ]);

    }

    public function show($id)
    {
        $featuredBook = \App\Models\FeaturedBook::findOrFail($id);
        return view('display.featuredBooks', compact('featuredBook'));
    }
}
