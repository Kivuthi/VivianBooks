<?php

namespace App\Services\Payments;

use Illuminate\Support\Facades\Http;

class MpesaService
{
    public function stkPush($item, $phone)
    {
        $timestamp = now()->format('YmdHis');

        $password = base64_encode(
            env('MPESA_SHORTCODE') .
            env('MPESA_PASSKEY') .
            $timestamp
        );

        return Http::withToken($this->token())
            ->post('https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest', [

            "BusinessShortCode" => env('MPESA_SHORTCODE'),
            "Password" => $password,
            "Timestamp" => $timestamp,
            "TransactionType" => "CustomerPayBillOnline",
            "Amount" => $item->price,
            "PartyA" => $phone,
            "PartyB" => env('MPESA_SHORTCODE'),
            "PhoneNumber" => $phone,
            "CallBackURL" => env('MPESA_CALLBACK_URL'),
            "AccountReference" => $item->title,
            "TransactionDesc" => "Book Purchase"

        ]);
    }

    private function token()
    {
        $response = Http::withBasicAuth(
            env('MPESA_CONSUMER_KEY'),
            env('MPESA_CONSUMER_SECRET')
        )->get('https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials');

        return $response['access_token'];
    }
}