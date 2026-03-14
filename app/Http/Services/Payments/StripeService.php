<?php

namespace App\Services\Payments;

class StripeService
{
    public function checkout($item)
    {
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],

            'line_items' => [[
                'price_data' => [
                    'currency' => 'kes',
                    'product_data' => [
                        'name' => $item->title
                    ],
                    'unit_amount' => $item->price * 100
                ],
                'quantity' => 1
            ]],

            'mode' => 'payment',
            'success_url' => route('payment.success'),
            'cancel_url' => route('payment.cancel'),
        ]);

        return redirect($session->url);
    }
}