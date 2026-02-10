
<!-- Sidebar -->
<aside class="flex flex-col w-64 h-screen bg-[#fbf8f4] border-r border-gray-200">

    <div class="p-6">

        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-red-900 text-white">
                <i class="fa-solid fa-book-open"></i>
            </div>
            <h1 class="text-lg font-semibold text-gray-900">VivihBooks Store</h1>
        </div>

        <!-- Navigation -->
        <nav class="flex flex-col gap-2 text-sm">
            <!-- Active -->
            <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3 px-4 py-3 rounded-lg
                    hover:bg-red-50 hover:text-red-900 text-gray-600 font-medium">
                <i class="fa-solid fa-border-all"></i>
                Dashboard
            </a>

            <a href="{{ route('admin.books.index') }}" 
                class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:text-red-900 hover:bg-red-50">
                <i class="fa-solid fa-book"></i>
                Books
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:text-red-900 hover:bg-red-50">
                <i class="fa-solid fa-users"></i>
                Users
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:text-red-900 hover:bg-red-50">
                <i class="fa-solid fa-box"></i>
                Orders
            </a>

            <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg text-gray-600 hover:text-red-900 hover:bg-red-50">
                <i class="fa-solid fa-gear"></i>
                Settings
            </a>
        </nav>
    </div>

    <!-- Bottom -->
    <div class="p-6 border-t border-gray-200 justify-end mt-auto">
        <div class="flex items-center gap-2 mb-4">
            <div class="w-10 h-10 rounded-full bg-red-900 text-white flex items-center justify-center font-semibold">
                {{ strtoupper(substr(  Auth::user()->name , 0, 1)) }}
            </div>

            <div class="text-sm">
                <p class="font-medium text-gray-900">{{ Auth::user()->name }}</p>
                <p class="text-gray-500">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <a href="{{ route('logout') }}"
        class="flex items-center justify-center gap-2 w-full h-11
                border border-gray-300 rounded-lg
                text-gray-700 hover:bg-red-50 hover:text-red-900 transition">
            <i class="fa-solid fa-right-from-bracket"></i>
            Sign Out
        </a>
    </div>
</aside>

{{-- toggle menu --}}




