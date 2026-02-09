<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Register</title>

</head>
<body>
    <div class="flex">
        <div id="leftContent" class="bg-red-900 w-1/2 h-screen flex flex-col items-center justify-center">
            <h1 class="text-5xl"> ✨ </h1>

            <h1 class="text-white text-4xl font-bold font-serif p-5">Start Your Journey</h1>

            <h1 class="text-gray-100 text-xl font-serif">Join thousands of readers who have discovered their next </h1>
            <h1 class="text-gray-100 pb-8 text-xl font-serif">favorite book on VivihBooks Store.</h1>
            
            <div class="w-1/2 p-5">
                <p class="text-gray-100 m-2">
                    <i class="fa-regular fa-circle-check mr-2"></i>
                    Access to 10,000+ premium books
                </p>
                <p class="text-gray-100 m-2">
                    <i class="fa-regular fa-circle-check mr-2"></i>
                    Read on device, anywhere
                </p>
                <p class="text-gray-100 m-2">
                    <i class="fa-regular fa-circle-check mr-2"></i>
                    Order physical copies delivered to you
                </p>
                <p class="text-gray-100 m-2">
                    <i class="fa-regular fa-circle-check mr-2"></i>
                    Track your reading progress
                </p>
                <p class="text-gray-100 m-2">
                    <i class="fa-regular fa-circle-check mr-2"></i>
                    Exclusive discounts and offers
                </p>
               
            </div>
        </div>

        <div id="rightContent" class="w-1/2 h-screen flex flex-col items-center justify-center">
            <p class="text-black text-2xl font-extrabold font-serif mb-8">
                <i class="fa-solid fa-book-open mr-5" style="color: #955050;"></i>
                VivihBooks Store
            </p>

            <h1 class="text-3xl font-bold font-serif p-5">Create Your Account</h1>
            <p class="text-gray-400 font-serif">Join our community of book lovers today</p>

            <form action="{{ route('register') }}" method="POST">
                @method('POST')
                @csrf

                <label for="name" class="block mt-8">Full Name</label>
                <div class="relative mt-4">
                    <i class="fa-regular fa-user absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        required
                        placeholder="John Doe"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>



                <label for="email" class="block mt-8">Email</label>
                <div class="relative mt-4">
                    <i class="fa-regular fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        placeholder="you@example.com"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>

                <label for="password" class="block mt-8">Password</label>
                <div class="relative mt-4">
                    <i class="fa-solid fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                        placeholder="Create a strong password"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>

                <label for="password_confirmation" class="block mt-8">Confirm Password</label>
                <div class="relative mt-4">
                    <i class="fa-solid fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        value="{{ old('password_confirmation') }}"
                        required
                        placeholder="Confirm your password"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>

                <button type="submit" class="w-full border-2 border-gray-300 rounded-md text-white
                            pl-10 pr-3 py-2 mt-8 relative bg-red-900 hover:bg-red-700
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition">
                    Create Account 
                    <i class="fa-solid fa-right-from-bracket pl-3"></i> 
                </button>
            </form>

            <p class="mt-9">
                Already have an account? 
                <a href="{{ route('auth.login') }}" class="text-red-900 font-bold hover:text-red-700">Login here</a>
            </p>

        </div>
    </div>

    @if($errors->any())
        <div class="bg-red-500 text-white p-4 mb-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
</body>
</html>