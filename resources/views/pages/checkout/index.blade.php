<x-layout>
    <x-slot name="title">
        Checkout
    </x-slot>

    <div class="container mx-auto px-4 py-10 md:mt-20">

        <!-- Back Button -->
        <div class="mb-6">
            <a href="{{ url()->previous() }}" class="text-gray-500 hover:text-gray-700 transition">
                ← Back to Book Details
            </a>
        </div>

        <!-- Page Title -->
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold font-serif mb-2">
                Complete Your Purchase
            </h1>

            <p class="text-gray-500">
                Secure checkout powered by industry-standard encryption
            </p>
        </div>

        <div class="grid grid-cols-1 lg:flex flex-row gap-8 justify-center">

            <div class="lg:col-span-3">

                <form action="{{ route('checkout.pay') }}" method="POST"
                    class="bg-white shadow-lg rounded-xl p-6 space-y-6">

                    @csrf

                    <h2 class="text-xl font-semibold font-serif mb-4">
                        Payment Method
                    </h2>

                    <div class="space-y-3">

                        <label class="flex items-center gap-3 border rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="card" checked class="text-red-800">
                            <span>Credit / Debit Card</span>
                        </label>

                        <label class="flex items-center gap-3 border rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="paypal" checked class="text-red-800">
                            <span>PayPal</span>
                        </label>

                        <label class="flex items-center gap-3 border rounded-lg p-4 cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="m-pesa" checked class="text-red-800">
                            <span>M-pesa</span>
                        </label>

                    </div>

                    <div class="space-y-4 hidden" id="card-details">

                        <div>
                            <label class="block text-sm font-medium">
                                Name on Card
                            </label>

                            <input type="text"
                                name="card_name"
                                placeholder="John Doe"
                                class="mt-1 w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-redtext-red-800">
                        </div>

                        <div>
                            <label class="block text-sm font-medium">
                                Card Number
                            </label>

                            <input type="text"
                                name="card_number"
                                placeholder="1234 5678 9012 3456"
                                class="mt-1 w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-redtext-red-800">
                        </div>

                        <div class="grid grid-cols-2 gap-4">

                            <div>
                                <label class="block text-sm font-medium">
                                    Expiry
                                </label>

                                <input type="text"
                                    name="expiry"
                                    placeholder="MM/YY"
                                    class="mt-1 w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-redtext-red-800">
                            </div>

                            <div>
                                <label class="block text-sm font-medium">
                                    CVV
                                </label>

                                <input type="text"
                                    name="cvv"
                                    placeholder="123"
                                    class="mt-1 w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-redtext-red-800">
                            </div>

                        </div>

                    </div>


                    <div class="flex items-center gap-2 bg-gray-100 text-sm text-gray-600 p-3 rounded-lg">
                        🔒 Your payment information is encrypted and secure
                    </div>

                    <!-- Pay Button -->
                    <button type="submit"
                        class="w-full bg-red-800 hover:bg-red-600 text-white font-semibold py-3 rounded-lg transition">

                        Pay ${{ number_format($book->softCopyPrice, 2) }}

                    </button>

                </form>

            </div>


            <div class="lg:col-span-2">

                <div class="bg-white shadow-lg rounded-xl p-6">

                    <h2 class="text-xl font-semibold font-serif mb-4">
                        Order Summary
                    </h2>

                    <div class="flex gap-4 mb-6">

                        <img
                            src="{{ $book->cover_image ? asset('storage/' . $book->cover_image) : asset('images/default-book-cover.jpg') }}"
                            alt="{{ $book->title }}"
                            class="w-16 h-24 object-cover rounded">

                        <div>
                            <h3 class="font-semibold">
                                {{ $book->title }}
                            </h3>

                            <p class="text-sm text-gray-500">
                                {{ $book->author }}
                            </p>

                            <p class="text-sm text-gray-500 mt-1">
                                Digital Copy ({{ $book->format }})
                            </p>
                        </div>

                    </div>


                    <div class="border-t pt-4 space-y-3">

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Subtotal</span>
                            <span>${{ number_format($book->softCopyPrice, 2) }}</span>
                        </div>

                        <div class="flex justify-between text-sm">
                            <span class="text-gray-500">Tax</span>
                            <span>$0.00</span>
                        </div>

                        <div class="flex justify-between border-t pt-3 font-semibold text-lg">
                            <span>Total</span>
                            <span class="text-red-800">
                                ${{ number_format($book->softCopyPrice, 2) }}
                            </span>
                        </div>

                    </div>

                    <div class="mt-6 text-sm text-gray-600 space-y-2">

                        <div>✔ Instant access after payment</div>

                        <div>✔ Read on any device</div>

                        <div>✔ Lifetime access</div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script>
        const paymentMethodRadios = document.querySelectorAll('input[name="payment_method"]');
        const cardDetails = document.getElementById('card-details');

        paymentMethodRadios.forEach(radio => {
            radio.addEventListener('change', () => {
                if (radio.value === 'card') {
                    cardDetails.classList.remove('hidden');
                } else {
                    cardDetails.classList.add('hidden');
                }
            });
        });
    </script>
</x-layout>