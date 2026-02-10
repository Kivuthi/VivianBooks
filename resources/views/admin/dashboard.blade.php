<x-adminDashboard>

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-2">Dashboard</h1>
        <p class="text-gray-600">
            Welcome back! Here's an overview of your library.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">

        <div class="bg-white rounded-xl shadow p-6 relative">
            <span class="absolute top-4 right-4 text-sm bg-amber-100 text-amber-700 px-2 py-1 rounded-full">
                ↗ +12%
            </span>

            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-red-100 text-red-900 mb-4">
                <i class="fa-solid fa-book"></i>
            </div>

            <p class="text-sm text-gray-500">Total Books</p>
            <p class="text-3xl font-bold text-gray-900">1,234</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 relative">
            <span class="absolute top-4 right-4 text-sm bg-amber-100 text-amber-700 px-2 py-1 rounded-full">
                ↗ 8 %
            </span>

            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-red-100 text-red-900 mb-4">
                <i class="fa-solid fa-users"></i>
            </div>

            <p class="text-sm text-gray-500">Total Users</p>
            <p class="text-3xl font-bold text-gray-900">8,456</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 relative">
            <span class="absolute top-4 right-4 text-sm bg-amber-100 text-amber-700 px-2 py-1 rounded-full">
                ↗ +23%
            </span>

            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-red-100 text-red-900 mb-4">
                <i class="fa-solid fa-dollar-sign"></i>
            </div>

            <p class="text-sm text-gray-500">Revenue</p>
            <p class="text-3xl font-bold text-gray-900">$45,678</p>
        </div>

        <div class="bg-white rounded-xl shadow p-6 relative">
            <span class="absolute top-4 right-4 text-sm bg-amber-100 text-amber-700 px-2 py-1 rounded-full">
                ↗ +5%
            </span>

            <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-red-100 text-red-900 mb-4">
                <i class="fa-solid fa-box"></i>
            </div>

            <p class="text-sm text-gray-500">Orders</p>
            <p class="text-3xl font-bold text-gray-900">342</p>
        </div>

    </div>

    <!-- Recent Books Section -->
     <div class="bg-white rounded-xl shadow p-6">
        <h2 class="text-lg font-semibold mb-4">Recent Books</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            <div class="flex items-center gap-4 bg-gray-100 rounded-lg p-3">
                <img src="https://via.placeholder.com/50" class="rounded-md" />
                <div>
                    <p class="font-semibold text-sm">The Midnight Library</p>
                    <p class="text-xs text-gray-500">Matt Haig</p>
                    <p class="text-sm text-red-900 font-semibold">$14.99</p>
                </div>
            </div>

            <div class="flex items-center gap-4 bg-gray-100 rounded-lg p-3">
                <img src="https://via.placeholder.com/50" class="rounded-md" />
                <div>
                    <p class="font-semibold text-sm">The Midnight Library</p>
                    <p class="text-xs text-gray-500">Matt Haig</p>
                    <p class="text-sm text-red-900 font-semibold">$14.99</p>
                </div>
            </div>

            <div class="flex items-center gap-4 bg-gray-100 rounded-lg p-3">
                <img src="https://via.placeholder.com/50" class="rounded-md" />
                <div>
                    <p class="font-semibold text-sm">The Midnight Library</p>
                    <p class="text-xs text-gray-500">Matt Haig</p>
                    <p class="text-sm text-red-900 font-semibold">$14.99</p>
                </div>
            </div>

            <div class="flex items-center gap-4 bg-gray-100 rounded-lg p-3">
                <img src="https://via.placeholder.com/50" class="rounded-md" />
                <div>
                    <p class="font-semibold text-sm">The Midnight Library</p>
                    <p class="text-xs text-gray-500">Matt Haig</p>
                    <p class="text-sm text-red-900 font-semibold">$14.99</p>
                </div>
            </div>

        </div>
    </div>

</x-adminDashboard>
