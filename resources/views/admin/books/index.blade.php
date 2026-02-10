<x-adminDashboard>
    <div class="flex flex-row items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold font-serif mb-4">Books Management</h1>
            <p class="text-gray-600">Here you can manage your books.</p>
        </div>

        <div>
            <a href="" 
                class="text-white bg-pink-900 hover:bg-pink-900 focus:ring-4 focus:ring-pink-900 
                        font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        + Add Book 
            </a>
        </div>
    </div>

    <div class="">
        <form action="" method="">
            @csrf

            <div class="relative">
                <i class="fa-solid fa-magnifying-glass
                            absolute left-3 top-1/2 -translate-y-1/2" style="color: #484f5b;"></i>

                <input type="text" placeholder="Search books..." 
                    class="w-full pl-10 pr-4 md:w-1/3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-900"
                >
            </div>
            
        </form>
    </div>

    <div>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow">
                <thead>
                    <tr class="hover:bg-gray-100">
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Book</th>
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Category</th>
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Price</th>
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Status</th>
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Downloads</th>
                        <th class="py-3 text-pink-900 px-6 text-left text-xs font-semibold tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="hover:bg-gray-100">
                    <!-- Example Row -->
                    <tr class="border-b">
                        <td class="py-4 px-6 whitespace-nowrap">
                            <div class="flex items-center gap-4">
                                <img src="https://via.placeholder.com/50" alt="Book Cover" class="w-12 h-16 object-cover rounded">
                                <div>
                                    <p class="text-sm font-medium text-gray-900">The Great Gatsby</p>
                                    <p class="text-xs text-gray-500">F. Scott Fitzgerald</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap">History</td>
                        <td class="py-4 px-6 whitespace-nowrap">
                            <div>
                                <p>S.Copy <span>KSH. 50</span></p>
                                <p>H.Copy <span>KSH. 700</span> </p>
                            </div>
                        </td>
                        <td class="py-4 px-6 whitespace-nowrap">Premium</td>
                        <td class="py-4 px-6 whitespace-nowrap">100</td>
                        <td class="py-4 px-6 whitespace-nowrap">
                            <button
                                type="button"
                                id="actionsButton"
                                class="w-10 h-10
                                    inline-flex items-center justify-center
                                    rounded-lg
                                    border border-transparent
                                    text-gray-500
                                    hover:text-gray-800
                                    hover:border-yellow-700
                                    hover:bg-yellow-100
                                    focus:outline-none
                                    focus:ring-2 focus:ring-yellow-600
                                    transition"
                            >
                                <span class="text-xl leading-none">⋯</span>
                            </button>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    
</x-adminDashboard>
