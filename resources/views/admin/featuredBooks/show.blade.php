<x-layout>
    <div class="container mx-auto mt-15 px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">featuredBook Details</h1>
    </div>

    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col mt-15 md:flex-row gap-8">
            <div class="mt-20">
                @if($featuredBook->cover_image)
                    <img src="{{ asset('storage/' . $featuredBook->cover_image) }}" alt="{{ $featuredBook->title }} Cover" class="w-48 h-auto mb-4 rounded-lg shadow-md">
                @else
                    <div class="w-48 h-64 bg-gray-200 flex items-center justify-center mb-4 rounded-lg shadow-md">
                        <span class="text-gray-500">No Cover Image</span>
                    </div>
                @endif
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-semibold mb-4">{{ $featuredBook->title }}</h2>
                <p class="text-gray-700 mb-2"><strong>Author:</strong> {{ $featuredBook->author }}</p>
                <p class="text-gray-700 mb-2"><strong>Published Year:</strong> {{ $featuredBook->published_year }}</p>
                <p class="text-gray-700 mb-4"><strong>Genre:</strong> {{ $featuredBook->genre }}</p>
                <p class="text-gray-700"><strong>Overview:</strong></p>
                <p class="text-gray-700">{{ $featuredBook->overview }}</p>

                <a href="{{ route('admin.featuredBooks.index') }}" class="mt-4 inline-block text-blue-500 hover:underline">Back to List</a>
            </div>
        </div>
    </div>
    
</x-layout>