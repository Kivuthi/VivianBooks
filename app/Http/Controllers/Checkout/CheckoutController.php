<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\FeaturedBook;

class CheckoutController extends Controller
{
    public function index($type, $id)
    {
        if ($type === 'book') {
            $item = Book::findOrFail($id);
        } elseif ($type === 'featured') {
            $item = FeaturedBook::findOrFail($id);
        } elseif ($type === 'trending') {
            $item = Book::findOrFail($id);
        } else {
            abort(404);
        }

        return view('pages.checkout.index', compact('item', 'type'));
    }
}