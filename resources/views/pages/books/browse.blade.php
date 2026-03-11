<x-layout title="Browse Books">
    <style>
        .book-card {
            transition: all 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .book-card:hover .book-image {
            transform: scale(1.08);
        }

        .book-image {
            transition: transform 0.4s ease;
        }

        .badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
            z-index: 10;
        }

        .badge-featured {
            background-color: #fbbf24;
            color: #000;
        }

        .badge-premium {
            background-color: #8b5cf6;
            color: #fff;
        }
    </style>

    <div class="min-h-screen bg-[#f5f1ec] py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="mb-12 mt-17 text-center">
                <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-4">
                    Browse Our Library
                </h1>
                <p class="text-lg text-gray-600">
                    Discover thousands of books across every genre. Find your next great read.
                </p>
            </div>

            <!-- Search and Filter Section -->
            <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <div class="flex flex-row justify-between gap-4">
                    <!-- Search Bar -->
                    <form method="GET" action="{{ route('pages.books.browse') }}" class="flex gap-2">
                        <input type="text" 
                            name="search" 
                            placeholder="Search books or authors..."
                            value="{{ request('search') }}"
                            class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-700">
                        <button type="submit" class="px-6 py-3 bg-red-700 text-white rounded-lg hover:bg-red-800 transition font-medium">
                            Search
                        </button>
                    </form>

                    <!-- Filters -->
                    <div class="flex flex-col md:flex-row gap-4 items-stretch md:items-center">
                        <div>
                            <select name="category" 
                                onchange="window.location.href='{{ route('pages.books.browse') }}?category=' + this.value"
                                class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-700 cursor-pointer">
                                <option value="">All Categories</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>
                                        {{ ucfirst($cat) }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div>
                            <select class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-700 cursor-pointer">
                                <option>All Prices</option>
                                <option>Free</option>
                                <option>Under $10</option>
                                <option>$10 - $20</option>
                                <option>Over $20</option>
                            </select>
                        </div>

                        <div class="ml-auto flex gap-2">
                            <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                                <i class="fas fa-th text-gray-600"></i>
                            </button>
                            <button class="p-2 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                                <i class="fas fa-list text-gray-600"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex gap-8">
                <!-- Sidebar Categories -->
                <div class="hidden lg:block w-64 flex-shrink-0">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-6 font-serif">Categories</h3>
                        <div class="space-y-3">
                            <a href="{{ route('pages.books.browse') }}" 
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition {{ !request('category') ? 'bg-red-50 text-red-700' : 'text-gray-700' }}">
                                <i class="fas fa-book text-red-700"></i>
                                <span>Fiction</span>
                                <span class="ml-auto text-sm text-gray-500">234</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Non-Fiction']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-book text-gray-400"></i>
                                <span>Non-Fiction</span>
                                <span class="ml-auto text-sm text-gray-500">189</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Self-Help']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-lightbulb text-yellow-500"></i>
                                <span>Self-Help</span>
                                <span class="ml-auto text-sm text-gray-500">156</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Science']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-flask text-blue-500"></i>
                                <span>Science</span>
                                <span class="ml-auto text-sm text-gray-500">98</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'History']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-landmark text-purple-500"></i>
                                <span>History</span>
                                <span class="ml-auto text-sm text-gray-500">142</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Biography']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-user text-blue-700"></i>
                                <span>Biography</span>
                                <span class="ml-auto text-sm text-gray-500">87</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Philosophy']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-brain text-pink-500"></i>
                                <span>Philosophy</span>
                                <span class="ml-auto text-sm text-gray-500">65</span>
                            </a>
                            <a href="{{ route('pages.books.browse', ['category' => 'Business']) }}"
                                class="flex items-center gap-2 p-2 rounded hover:bg-red-50 transition text-gray-700">
                                <i class="fas fa-briefcase text-amber-700"></i>
                                <span>Business</span>
                                <span class="ml-auto text-sm text-gray-500">123</span>
                            </a>
                        </div>
                    </div>

                    <!-- Availability Filter -->
                    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                        <h3 class="text-lg font-bold text-gray-900 mb-4 font-serif">Availability</h3>
                        <div class="space-y-3">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" class="w-4 h-4 rounded">
                                <span class="text-gray-700">Free books only</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Books Grid -->
                <div class="flex-1">
                    <div class="mb-4 text-gray-600">
                        Showing {{ $books->count() }} books
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @forelse($books as $book)
                            <div class="book-card bg-white rounded-xl shadow-md overflow-hidden group cursor-pointer">
                                <!-- Book Image Container -->
                                <div class="relative h-80 overflow-hidden bg-gray-100">
                                    @if($book->cover_image)
                                        <img src="{{ asset('storage/' . $book->cover_image) }}" 
                                            alt="{{ $book->title }}"
                                            class="book-image w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-300 to-gray-400">
                                            <i class="fas fa-book text-gray-500 text-4xl"></i>
                                        </div>
                                    @endif

                                    <!-- Badges -->
                                    <div class="absolute top-3 left-3 space-y-2">
                                        <span class="badge badge-featured">
                                            <i class="fas fa-star mr-1"></i>Featured
                                        </span>
                                    </div>
                                    @if($book->softCopyPrice)
                                        <div class="absolute top-3 right-3">
                                            <span class="badge badge-premium">
                                                <i class="fas fa-lock mr-1"></i>Premium
                                            </span>
                                        </div>
                                    @endif

                                    <!-- Overlay Buttons (Visible on Hover) -->
                                    <div class="absolute inset-0 bg-black bg-opacity-60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                                        <a href="{{ route('pages.books.show', $book->id) }}"
                                            class="bg-white text-gray-900 px-6 py-2 rounded-lg font-medium hover:bg-gray-100 transition flex items-center gap-2">
                                            <i class="fas fa-eye"></i> View
                                        </a>
                                    </div>
                                </div>

                                <!-- Book Details -->
                                <div class="p-4">
                                    <h3 class="font-bold text-gray-900 text-lg line-clamp-2 mb-2">
                                        {{ $book->title }}
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-3">{{ $book->author }}</p>

                                    @if($book->rating)
                                        <div class="flex items-center gap-1 mb-3">
                                            <div class="flex text-yellow-400">
                                                @for($i = 0; $i < 5; $i++)
                                                    @if($i < floor($book->rating))
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </div>
                                            <span class="text-sm text-gray-600 ml-1">({{ number_format($book->rating, 1) }})</span>
                                        </div>
                                    @endif

                                    @if($book->softCopyPrice)
                                        <div class="text-red-700 font-bold text-lg">
                                            ${{ number_format($book->softCopyPrice, 2) }}
                                        </div>
                                    @else
                                        <div class="text-green-600 font-bold">
                                            Free
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full text-center py-12">
                                <i class="fas fa-search text-gray-400 text-4xl mb-4"></i>
                                <p class="text-gray-600 text-lg">No books found matching your criteria.</p>
                            </div>
                        @endforelse
                    </div>

                    <!-- Pagination -->
                    @if($books->hasPages())
                        <div class="mt-12 flex justify-center">
                            {{ $books->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
