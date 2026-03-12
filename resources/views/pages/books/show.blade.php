<x-layout title="{{ $book->title }}">
    <style>
        .premium-lock {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.4) 100%);
        }

        .lock-icon {
            font-size: 64px;
            color: white;
            opacity: 0.9;
        }

        .tab-button {
            padding: 12px 20px;
            border-bottom: 3px solid transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .tab-button.active {
            border-bottom-color: #955050;
            color: #955050;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }
    </style>

    <div class="min-h-screen bg-[#f5f1ec] py-8 md:py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Back Button -->
            <a href="{{ route('pages.books.browse') }}" 
                class="inline-flex items-center gap-2 text-red-700 hover:text-red-800 mb-8 transition md:mt-25">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Library</span>
            </a>

            <!-- Main Content -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-8">
                    
                    <!-- Book Image -->
                    <div class="flex items-start justify-center">
                        <div class="w-full max-w-sm">
                            <div class="relative rounded-lg overflow-hidden shadow-xl h-96 bg-gray-100 flex items-center justify-center">
                                @if($book->cover_image)
                                    <img src="{{ asset('storage/' . $book->cover_image) }}" 
                                        alt="{{ $book->title }}"
                                        class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-300 to-gray-400">
                                        <i class="fas fa-book text-gray-500 text-6xl"></i>
                                    </div>
                                @endif

                                <!-- Premium Lock Overlay -->
                                @if($book->softCopyPrice)
                                    <div class="absolute inset-0 premium-lock">
                                        <div class="text-center">
                                            <div class="lock-icon">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <p class="text-white font-medium mt-4">Premium Content</p>
                                            <p class="text-white text-sm">Purchase to unlock</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Book Details -->
                    <div class="flex flex-col justify-between">
                        <div>
                            <div class="flex items-start gap-3 mb-4">
                                <span class="inline-block bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ ucfirst($book->category ?? 'Uncategorized') }}
                                </span>
                            </div>

                            <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-900 mb-2">
                                {{ $book->title }}
                            </h1>
                            <p class="text-xl text-gray-600 mb-6">
                                by {{ $book->author }}
                            </p>

                            @if($book->rating)
                                <div class="flex items-center gap-3 mb-6 pb-6 border-b border-gray-200">
                                    <div class="flex text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            @if($i < floor($book->rating))
                                                <i class="fas fa-star text-lg"></i>
                                            @elseif($i < ceil($book->rating))
                                                <i class="fas fa-star-half-alt text-lg"></i>
                                            @else
                                                <i class="far fa-star text-lg"></i>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="text-gray-700 font-semibold">
                                        {{ number_format($book->rating, 1) }} (2.4k reviews)
                                    </span>
                                </div>
                            @endif

                            @if($book->softCopyPrice)
                                <div class="text-red-700 text-4xl font-bold mb-2">
                                    KSH {{ number_format($book->softCopyPrice, 2) }}
                                </div>
                                <div class="inline-block bg-red-50 text-red-700 px-3 py-1 rounded text-sm font-semibold mb-6">
                                    <i class="fas fa-crown mr-1"></i> Premium
                                </div>
                            @else
                                <div class="text-green-600 text-3xl font-bold mb-6">
                                    Free
                                </div>
                            @endif
                        </div>

                        <div class="mb-8 pb-8 border-b border-gray-200">
                            <p class="text-gray-700 leading-relaxed">
                                {{ $book->overview ?? 'No description available for this book.' }}
                            </p>
                        </div>

                        <!-- Buttons -->
                        <div class="flex flex-col sm:flex-row gap-4 mb-8">
                            <a href="{{ $book->softCopyPrice ? route('pages.checkout.index', $book->id) : '#' }}"
                                class="flex-1 bg-red-700 hover:bg-red-800 text-white px-6 py-3 rounded-lg font-semibold transition flex items-center justify-start gap-2">
                                <i class="fas fa-download"></i> 
                                Buy Digital Copy
                            </a>

                            <button class="flex-1 border-2 border-gray-300 hover:border-gray-400 text-gray-700 px-6 py-3 rounded-lg font-semibold transition flex items-center justify-center gap-2">
                                <i class="fas fa-shopping-bag"></i>
                                Order Physical Copy
                            </button>
                            <button class="p-3 border-2 border-gray-300 hover:border-gray-400 rounded-lg transition text-gray-700">
                                <i class="fas fa-heart text-xl"></i>
                            </button>
                            <button class="p-3 border-2 border-gray-300 hover:border-gray-400 rounded-lg transition text-gray-700">
                                <i class="fas fa-share-alt text-xl"></i>
                            </button>
                        </div>

                        <div class="bg-gray-50 rounded-lg p-6 grid grid-cols-2 md:grid-cols-4 gap-6">
                            @if($book->pages)
                                <div>
                                    <p class="text-gray-600 text-sm mb-1">Pages</p>
                                    <p class="text-gray-900 font-semibold text-lg">{{ $book->pages }}</p>
                                </div>
                            @endif
                            
                            @if($book->language)
                                <div>
                                    <p class="text-gray-600 text-sm mb-1">Language</p>
                                    <p class="text-gray-900 font-semibold text-lg">{{ ucfirst($book->language) }}</p>
                                </div>
                            @endif
                            
                            @if($book->format)
                                <div>
                                    <p class="text-gray-600 text-sm mb-1">Format</p>
                                    <p class="text-gray-900 font-semibold text-lg uppercase">{{ $book->format }}</p>
                                </div>
                            @endif
                            
                            @if($book->publication_date)
                                <div>
                                    <p class="text-gray-600 text-sm mb-1">Published</p>
                                    <p class="text-gray-900 font-semibold text-lg">
                                        {{ \Carbon\Carbon::parse($book->publication_date)->format('Y') }}
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabs Section -->
            <div class="bg-white rounded-xl shadow-lg mt-8 overflow-hidden">
                <!-- Tab Navigation -->
                <div class="flex border-b border-gray-200 bg-gray-50">
                    <button class="tab-button active" data-tab="overview">Overview</button>
                    <button class="tab-button" data-tab="contents">Contents</button>
                    <button class="tab-button" data-tab="reviews">Reviews</button>
                </div>

                <!-- Tab Content -->
                <div class="p-8">
                    <!-- Overview Tab -->
                    <div class="tab-content active" id="overview">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 font-serif">About This Book</h3>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            {{ $book->overview ?? 'No detailed description available for this book.' }}
                        </p>
                        <p class="text-gray-600">
                            ISBN: {{ $book->isbn ?? 'N/A' }}
                        </p>
                    </div>

                    <!-- Contents Tab -->
                    <div class="tab-content" id="contents">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4 font-serif">Table of Contents</h3>
                        <p class="text-gray-700">
                            Table of contents information will be displayed here once the book details are fully processed.
                        </p>
                    </div>

                    <!-- Reviews Tab -->
                    <div class="tab-content" id="reviews">
                        <h3 class="text-2xl font-bold text-gray-900 mb-6 font-serif">Reviews</h3>
                        <p class="text-gray-700 mb-6">
                            This book has a rating of 
                            <span class="font-bold text-red-700">{{ $book->rating ?? 'N/A' }}/5</span>
                            from readers.
                        </p>
                        <div class="space-y-6">
                            <div class="border-t border-gray-200 pt-6">
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">
                                        <i class="fas fa-user text-gray-600"></i>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-gray-900">Reader Review</p>
                                        <p class="text-sm text-gray-600">Verified Purchase</p>
                                    </div>
                                </div>
                                <div class="flex text-yellow-400 mb-2">
                                    @for($i = 0; $i < 5; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                                <p class="text-gray-700">
                                    This is an excellent book that offers valuable insights and compelling storytelling.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Books Section -->
            <div class="mt-12">
                <h3 class="text-3xl font-serif font-bold text-gray-900 mb-8">
                    Similar Books You Might Like
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Placeholder cards for related books -->
                    @for($i = 0; $i < 4; $i++)
                        <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-xl transition">
                            <div class="relative h-64 bg-gray-300 flex items-center justify-center overflow-hidden">
                                <i class="fas fa-book text-gray-400 text-4xl"></i>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-gray-900 line-clamp-2 mb-2">Related Book Title</h4>
                                <p class="text-gray-600 text-sm mb-3">Author Name</p>
                                <div class="flex text-yellow-400 mb-2">
                                    @for($j = 0; $j < 5; $j++)
                                        <i class="fas fa-star text-sm"></i>
                                    @endfor
                                </div>
                                <p class="text-red-700 font-bold">$9.99</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                document.querySelectorAll('.tab-button').forEach(b => b.classList.remove('active'));
                document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
                
                // Add active class to clicked button and corresponding content
                button.classList.add('active');
                const tabId = button.getAttribute('data-tab');
                document.getElementById(tabId).classList.add('active');
            });
        });
    </script>
</x-layout>
