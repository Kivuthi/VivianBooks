<x-adminDashboard>
    <div class="flex flex-row items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-bold font-serif mb-4">Books Management</h1>
            <p class="text-gray-600">Here you can manage your books.</p>
        </div>

        <div>
            <button 
                id="openAddBookModal"
                class="text-white bg-pink-900 hover:bg-pink-900 focus:ring-4 focus:ring-pink-900 
                        font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                        + Add Book 
            </button>
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

    <div class="">
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
                        <td class="relative inline-block py-4 px-6 whitespace-nowrap">
                            <button
                                type="button"
                                class="actions-btn w-10 h-10 inline-flex items-center justify-center
                                    rounded-lg border border-transparent
                                    text-gray-500
                                    hover:text-gray-800 hover:border-yellow-700 hover:bg-yellow-100
                                    focus:outline-none focus:ring-2 focus:ring-yellow-600
                                    transition"
                            >
                                <span class="text-xl leading-none">⋯</span>
                            </button>

                            <!-- Dropdown -->
                            <div
                                class="actions-menu hidden absolute right-0 mt-2 w-44
                                    bg-white border border-gray-200
                                    rounded-xl shadow-lg z-50"
                            >
                                <ul class="py-1 text-sm text-gray-700">

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-eye"></i>
                                            View
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                            Edit
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </a>
                                    </li>

                                    <li><hr class="my-1 border-gray-200"></li>

                                    <li>
                                        <form method="POST" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="w-full flex items-center gap-3 px-4 py-2
                                                    text-red-700 hover:bg-red-50"
                                                onclick="return confirm('Delete this item?')"
                                            >
                                                <i class="fa-regular fa-trash-can"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>

                        </td>
                    </tr>

                </tbody>

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
                        <td class="relative inline-block py-4 px-6 whitespace-nowrap">
                            <button
                                type="button"
                                class="actions-btn w-10 h-10 inline-flex items-center justify-center
                                    rounded-lg border border-transparent
                                    text-gray-500
                                    hover:text-gray-800 hover:border-yellow-700 hover:bg-yellow-100
                                    focus:outline-none focus:ring-2 focus:ring-yellow-600
                                    transition"
                            >
                                <span class="text-xl leading-none">⋯</span>
                            </button>

                            <!-- Dropdown -->
                            <div
                                class="actions-menu hidden absolute right-0 mt-2 w-44
                                    bg-white border border-gray-200
                                    rounded-xl shadow-lg z-50"
                            >
                                <ul class="py-1 text-sm text-gray-700">

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-eye"></i>
                                            View
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                            Edit
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </a>
                                    </li>

                                    <li><hr class="my-1 border-gray-200"></li>

                                    <li>
                                        <form method="POST" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="w-full flex items-center gap-3 px-4 py-2
                                                    text-red-700 hover:bg-red-50"
                                                onclick="return confirm('Delete this item?')"
                                            >
                                                <i class="fa-regular fa-trash-can"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>

                        </td>
                    </tr>

                </tbody>

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
                        <td class="relative inline-block py-4 px-6 whitespace-nowrap">
                            <button
                                type="button"
                                class="actions-btn w-10 h-10 inline-flex items-center justify-center
                                    rounded-lg border border-transparent
                                    text-gray-500
                                    hover:text-gray-800 hover:border-yellow-700 hover:bg-yellow-100
                                    focus:outline-none focus:ring-2 focus:ring-yellow-600
                                    transition"
                            >
                                <span class="text-xl leading-none">⋯</span>
                            </button>

                            <!-- Dropdown -->
                            <div
                                class="actions-menu hidden absolute right-0 mt-2 w-44
                                    bg-white border border-gray-200
                                    rounded-xl shadow-lg z-50"
                            >
                                <ul class="py-1 text-sm text-gray-700">

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-eye"></i>
                                            View
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                            Edit
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#"
                                        class="flex items-center gap-3 px-4 py-2 hover:bg-gray-100">
                                            <i class="fa-solid fa-download"></i>
                                            Download
                                        </a>
                                    </li>

                                    <li><hr class="my-1 border-gray-200"></li>

                                    <li>
                                        <form method="POST" action="#">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                type="submit"
                                                class="w-full flex items-center gap-3 px-4 py-2
                                                    text-red-700 hover:bg-red-50"
                                                onclick="return confirm('Delete this item?')"
                                            >
                                                <i class="fa-regular fa-trash-can"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </li>

                                </ul>
                            </div>

                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal Backdrop -->
<div id="addBookModal"
     class="fixed inset-0 z-50 hidden
            bg-black bg-opacity-50
            flex items-center justify-center">

    <!-- Modal Box -->
    <div class="bg-white w-full max-w-lg rounded-xl shadow-lg p-6 relative">

        <!-- Close button -->
        <button id="closeAddBookModal"
                class="absolute top-3 right-3 text-gray-400 hover:text-gray-700">
            ✕
        </button>

        <h2 class="text-xl font-semibold mb-4">Add New Book</h2>

        <!-- FORM -->
        <form action="" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Title
                </label>
                <input type="text" name="title" required
                    class="w-full mt-1 px-3 py-2 border rounded-lg
                           focus:outline-none focus:ring-2 focus:ring-pink-900">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Author
                </label>
                <input type="text" name="author" required
                    class="w-full mt-1 px-3 py-2 border rounded-lg
                           focus:outline-none focus:ring-2 focus:ring-pink-900">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Price
                </label>
                <input type="number" name="price" step="0.01" required
                    class="w-full mt-1 px-3 py-2 border rounded-lg
                           focus:outline-none focus:ring-2 focus:ring-pink-900">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">
                    Description
                </label>
                <textarea name="description" rows="3"
                    class="w-full mt-1 px-3 py-2 border rounded-lg
                           focus:outline-none focus:ring-2 focus:ring-pink-900"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4">
                <button type="button"
                        id="cancelAddBookModal"
                        class="px-4 py-2 border rounded-lg text-gray-700 hover:bg-gray-100">
                    Cancel
                </button>

                <button type="submit"
                        class="px-5 py-2 bg-pink-900 text-white rounded-lg hover:bg-pink-950">
                    Save Book
                </button>
            </div>

        </form>
    </div>
</div>


    
</x-adminDashboard>

<script>
document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.actions-btn').forEach(button => {
        const menu = button.nextElementSibling;

        button.addEventListener('click', (e) => {
            e.stopPropagation();

            // Close other open menus
            document.querySelectorAll('.actions-menu').forEach(m => {
                if (m !== menu) m.classList.add('hidden');
            });

            menu.classList.toggle('hidden');
        });
    });

    // Close when clicking outside
    document.addEventListener('click', () => {
        document.querySelectorAll('.actions-menu')
            .forEach(menu => menu.classList.add('hidden'));
    });

});

    const openBtn = document.getElementById('openAddBookModal');
    const modal = document.getElementById('addBookModal');
    const closeBtn = document.getElementById('closeAddBookModal');
    const cancelBtn = document.getElementById('cancelAddBookModal');

    openBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    cancelBtn.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    // Close when clicking outside modal
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
