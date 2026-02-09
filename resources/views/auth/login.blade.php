<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite('resources/css/app.css') --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login</title>

</head>
<body>
    <div class="flex">
        <div id="leftContent" class=" w-1/2 h-screen flex flex-col items-center justify-center">
            <p class="text-black text-2xl font-extrabold font-serif mb-8">
                <i class="fa-solid fa-book-open mr-5" style="color: #955050;"></i>
                VivihBooks Store
            </p>

            <h1 class="text-3xl font-bold font-serif p-5">Welcome back</h1>
            <p class="text-gray-400 font-serif">Sign in to access your library and continue reading.</p>

            <form action="{{ route('login') }}" method="POST">
                @method('POST')
                @csrf

                <label for="email" class="block mt-8">Email</label>
                <div class="relative mt-4">
                    <i class="fa-regular fa-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>

                <div class="flex flex-row items-center justify-between">

                    <label for="password" class="block mt-8">Password</label>

                    <a href="#" class="block mt-8 text-red-900 hover:underline">Forgot your password?</a>
                </div>

                <div class="relative mt-4">
                    <i class="fa-solid fa-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>

                    <input
                        type="password"
                        id="password"
                        required
                        name="password"
                        placeholder="Enter your password"
                        class="w-full border-2 border-gray-300 rounded-md
                            pl-10 pr-3 py-2
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition"
                    >
                </div>

                <div>
                    <input type="checkbox"
                        id="remember"
                        name="remember"
                        class="mt-6 mr-2 border-red-900 leading-tight"> Remember me 
                </div>

                <button class="w-full border-2 border-gray-300 rounded-md text-white
                            pl-10 pr-3 py-2 mt-8 relative bg-red-900 hover:bg-red-700
                            focus:border-red-900 focus:ring-0 focus:outline-none
                            transition">
                    Sign in
                    <i class="fa-solid fa-right-from-bracket pl-3"></i> 
                </button>
            </form>

            <p class="mt-9">
                Don't have an account? 
                <a href="{{ route('auth.register') }}" class="text-red-900 font-bold hover:text-red-700">Create One</a>
            </p>
        </div>

        <div id="rightContent" class="w-1/2 bg-red-900 h-screen flex flex-col items-center justify-center">
            
            <p class="text-7xl"> 📚 </p>

            <h1 class="text-3xl font-bold font-serif p-5 text-white">Your Library Awaits</h1>
            <p class="text-gray-300 font-serif text-xl">Access thousands of books, track your reading progress,</p>
            <p class="text-gray-300 font-serif text-xl">and discover new favorites.</p>
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