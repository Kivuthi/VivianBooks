<?php

namespace App\Http\Controllers\checkout;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Book $book)
    {
        return view('pages.checkout.index', compact('book'));
    }
}
