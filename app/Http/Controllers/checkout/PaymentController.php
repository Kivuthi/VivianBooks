<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    public function index(Book $book)
    {
        return view('pages.checkout.index', compact('book'));
    }

    public function pay(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'payment_method' => 'required'
        ]);

        $book = Book::findOrFail($request->book_id);

        switch ($request->payment_method) {

            case 'card':
                return $this->payWithCard($book, $request);

            case 'paypal':
                return $this->payWithPaypal($book);

            case 'mpesa':
                return $this->payWithMpesa($book, $request);

            default:
                return back()->with('error', 'Invalid payment method');
        }
    }

    private function payWithCard($book, $request)
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],

            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd','ksh',
                    'product_data' => [
                        'name' => $book->title,
                    ],
                    'unit_amount' => $book->softCopyPrice * 100,
                ],
                'quantity' => 1,
            ]],

            'mode' => 'payment',

            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }


    private function payWithPaypal($book)
    {
        // Normally you use the PayPal SDK here

        return redirect()->away("https://www.paypal.com/checkout?amount={$book->price}");
    }


    public function payWithMpesa($book, $request)
    {
        $timestamp = now()->format('YmdHis');

        $password = base64_encode(
            env('MPESA_SHORTCODE') .
            env('MPESA_PASSKEY') .
            $timestamp
        );

        $response = Http::withToken($this->mpesaToken())
            ->post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest', [

            "BusinessShortCode" => env('MPESA_SHORTCODE'),
            "Password" => $password,
            "Timestamp" => $timestamp,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $book->price,
            "PartyA" => $request->phone,
            "PartyB" => env('MPESA_SHORTCODE'),
            "PhoneNumber" => $request->phone,
            "CallBackURL" => env('MPESA_CALLBACK_URL'),
            "AccountReference" => $book->title,
            "TransactionDesc" => "Book Purchase"

        ]);

        return $response->json();
    }

    private function mpesaToken()
    {
        $response = Http::withBasicAuth(env('MPESA_CONSUMER_KEY'), env('MPESA_CONSUMER_SECRET'))
            ->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');

        return $response->json()['access_token'];
    }

    public function callback(Request $request)
    {
        Log::info('M-pesa callback received', $request->all());
        // Handle M-pesa callback here
    }

}