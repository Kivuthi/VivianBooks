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

    <div class="sm:flex ml-5 md:flex flex-row items-center justify-around mb-9">
        <div>
            <a href="{{ route('pages.index') }}" class="text-black text-2xl font-extrabold font-serif">
                <i class="fa-solid fa-book-open mr-5 hover:transform-3d" style="color: #955050;"></i>
                VivihBooks Store
            </a>
            <p class="mt-8 text-gray-600">
                Your gateway to a world of knowledge.
            </p>
            <p class="text-gray-600">
                Discover, read, and collect premium books from
            </p>
            <p class="text-gray-600 mb-5">
                the comfort of your home.
            </p>

            <p class="mt-5 text-xl font-semibold font-serif">Open 24 Hours</p>
        </div>

        <div class="flex flex-col">
            <h1 class="text-2xl mb-8 font-serif font-semibold">Quick Links</h1>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">Browse Books</a>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">My Library</a>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">My Orders</a>
        </div>

        <div class="flex flex-col">
            <h1 class="text-2xl mb-8 font-serif font-semibold">Social Media</h1>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">WhatsApp</a>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">Facebook</a>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">Instagram</a>
            <a href="" class="text-gray-600 mb-2 hover:text-red-900">TikTok</a>
        </div>

        <div class="flex flex-col">
            <h1 class="text-2xl mb-8 font-serif font-semibold">Contact Us</h1>
            
            <p class="text-gray-600 mb-2"> <i class="fa-regular fa-envelope mr-3" style="color: #8e4848;"></i> viviveronica690@gmail.com</p>
            
            <p class="text-gray-600 mb-2"> <i class="fa-solid fa-phone mr-3" style="color: #8e4848;"></i> Phone: +254 768 454 160</p>
            
            <p class="text-gray-600 mb-2"> <i class="fa-solid fa-location-dot mr-3" style="color: #8e4848;"></i>Tom Mboya St, Nairobi, Kenya</p>
        </div>
    </div>

    <hr style="color:#8e4848">

    <div class="bg-cream-50 py-8 mt-5">
        <div class="container mx-auto text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} VivihBooks Store. All rights reserved.</p>
        </div>
    </div>
</body>