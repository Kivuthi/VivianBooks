<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vivih Books</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 mb-4">
            {{ session('success') }}
        </div>
        
    @endif

    <header>
        <nav class="bg-white shadow-md">
            <div class="container mx-auto px-4 py-3 flex items-center justify-between">
                <a href="#" class="text-2xl font-bold text-gray-800">
                    <i class="fa-solid fa-book-open mr-2" style="color: #955050;"></i>
                    VivihBooks Store
                </a>

                <div>
                    <a href="">Home</a>
                    <a href="">Browse Books</a>
                </div>

                <div>
                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800 mx-2">Login</a>
                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800 mx-2">Get Started</a>
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        
    </footer>

</body>
</html>