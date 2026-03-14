<?php

// use App\Services\Payments\StripeService;
// use App\Services\Payments\MpesaService;
namespace App\Http\Controllers\Checkout;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\FeaturedBook;
use Illuminate\Http\Request;
class PaymentController extends Controller
{
    public function pay(Request $request, StripeService $stripe, MpesaService $mpesa)
    {
        $request->validate([
            'item_id' => 'required',
            'type' => 'required',
            'payment_method' => 'required'
        ]);

        $item = $request->type === 'book'
            ? Book::findOrFail($request->item_id)
            : FeaturedBook::findOrFail($request->item_id);

        if ($request->payment_method == 'card') {
            return $stripe->checkout($item);
        }

        if ($request->payment_method == 'mpesa') {
            return $mpesa->stkPush($item, $request->phone);
        }

        if ($request->payment_method == 'paypal') {
            return redirect()->away("https://paypal.com");
        }
    }
}