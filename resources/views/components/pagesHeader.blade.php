<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="navbar"
        class="hidden md:flex items-center justify-around 
           fixed top-0 left-0 w-full
           px-8 py-3 
           bg-white backdrop-blur-md
           shadow-md z-50 transition-all duration-300">

        <a href="{{ route('pages.index') }}" class="text-black text-2xl font-extrabold font-serif">
                <i class="fa-solid fa-book-open mr-5 hover:transform-3d" style="color: #955050;"></i>
                VivihBooks Store
        </a>

        <div class="py-8 flex items-center gap-8 text-amber-700 ">
            <a href="{{ route('pages.index') }}" 
                class="hover:text-red-900"
                    {{ request()->routeIs('pages.index') ? 'text-red-900 font-semibold' : '' }}>
                    Home
            </a>
            
            <a href="" 
                class="hover:text-red-900"
                    {{ request()->routeIs('pages.index') ? 'text-red-900 font-semibold' : '' }}>
                    Browse Books
            </a>
        </div>

        <div class="flex items-center gap-4">

            <div class="flex items-center gap-10 mt-6 mr-5">
                <a href=""
                    class="hover:bg-yellow-600 rounded-md px-4 py-2 text-sm text-white">
                    <i class="fa-solid fa-magnifying-glass text-gray-400 hover:text-gray-600"></i>
                </a>

                @auth
                    <a href="" 
                        class="hover:bg-yellow-600 rounded-md px-4 py-2 text-sm text-white">
                        <i class="fa-solid fa-bag-shopping text-gray-400 hover:text-gray-600"></i>
                    </a>
                @endauth
            </div>

            @guest
 
                <a href="{{ route('auth.login') }}"
                    class="inline-flex items-center justify-center gap-2
                            h-11 px-6 mt-8
                            border-2 border-gray-300 rounded-md
                            text-black whitespace-nowrap
                            hover:bg-amber-600
                            focus:border-red-900 focus:outline-none
                            transition">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Sign in
                </a>

                <a href="{{ route('auth.register') }}"
                    class="inline-flex items-center justify-center
                            h-11 px-6 mt-8
                            border-2 border-gray-300 rounded-md
                            bg-red-900 text-white whitespace-nowrap
                            hover:bg-red-950
                            focus:border-red-900 focus:outline-none
                            transition">
                    Get Started
                </a>
            @endguest

            @auth

                <h2 class="mt-6 font-serif">Hi 👋 {{ Auth::user()->name}}</h2>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2
                                h-11 px-6 mt-8
                                border-2 border-gray-300 rounded-md
                                bg-red-900 text-white whitespace-nowrap
                                hover:bg-red-950
                                focus:border-red-900 focus:outline-none
                                transition">
                        Logout
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </button>
                </form>

            @endauth
        </div>
        

    </div>

    {{-- phone toggle --}}

    <div>
        <div class="flex items-center justify-between py-4 px-6 md:hidden">
            <a href="{{ route('pages.index') }}" class="text-black text-2xl font-extrabold font-serif">
                    <i class="fa-solid fa-book-open mr-5 hover:transform-3d" style="color: #955050;"></i>
                    VivihBooks Store
            </a>

            <button id="menu-toggle" class="text-gray-500 focus:outline-none">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <a href="{{ route('pages.index') }}" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    {{ request()->routeIs('pages.index') ? 'bg-gray-100 font-semibold' : '' }}>
                    Home
            </a>
            
            <a href="" 
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    {{ request()->routeIs('pages.index') ? 'bg-gray-100 font-semibold' : '' }}>
                    Browse Books
            </a>

            @guest
                <a href="{{ route('auth.login') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Sign in
                </a>

                <a href="{{ route('auth.register') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                    Get Started
                </a>
            @endguest

            @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                navbar.classList.add('backdrop-blur-lg', 'bg-white/40', 'shadow-lg');
            } else {
                navbar.classList.remove('backdrop-blur-lg', 'bg-white/40', 'shadow-lg');
            }
        });
</script>

</body>
</html>