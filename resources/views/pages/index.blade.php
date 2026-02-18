<x-layout title="Home">

    <style>
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
    </style>


<section class="relative min-h-screen bg-cover bg-center flex items-center"
    style="background-image: url('{{ asset('images/library2.png') }}');">

    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/70 to-black/40"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 md:px-10 pt-24">

        <div class="max-w-2xl reveal">
            <div class="bg-yellow-500/20 text-yellow-400 px-4 py-2 rounded-full inline-block mb-6">
                ⭐ Discover 10,000+ Premium Books
            </div>

            <h1 class="text-white text-4xl md:text-6xl font-serif font-bold mb-6 leading-tight">
                Your Gateway to <br>
                <span class="text-yellow-500">Infinite Knowledge</span>
            </h1>

            <p class="text-gray-300 mb-8">
                Explore curated books. Read online or order physical copies delivered to you.
            </p>

            <div class="flex flex-col md:flex-row gap-4">
                <a href="#" class="bg-red-700 hover:bg-red-800 px-6 py-3 rounded-lg text-white transition">
                    Browse Library →
                </a>

                <div class="flex bg-white rounded-lg overflow-hidden w-full md:w-auto">
                    <input type="text" placeholder="Search books..."
                        class="px-4 py-3 w-full md:w-64 outline-none text-black">
                    <button class="px-4 text-gray-600">🔍</button>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6 md:px-10 grid md:grid-cols-3 gap-8">

        <div class="reveal p-6 rounded-xl shadow-md hover:-translate-y-2 transition">
            <i class="fa-solid fa-book-open text-3xl text-red-700 mb-4"></i>
            <h3 class="font-serif font-bold text-xl mb-2">Instant Access</h3>
            <p class="text-gray-600">Read your books instantly with our beautiful reader.</p>
        </div>

        <div class="reveal p-6 rounded-xl shadow-md hover:-translate-y-2 transition">
            <i class="fa-solid fa-crown text-3xl text-red-700 mb-4"></i>
            <h3 class="font-serif font-bold text-xl mb-2">Premium Quality</h3>
            <p class="text-gray-600">Carefully curated books from top authors.</p>
        </div>

        <div class="reveal p-6 rounded-xl shadow-md hover:-translate-y-2 transition">
            <i class="fa-solid fa-shield text-3xl text-red-700 mb-4"></i>
            <h3 class="font-serif font-bold text-xl mb-2">Secure Payments</h3>
            <p class="text-gray-600">Industry-standard encrypted checkout.</p>
        </div>

    </div>
</section>


<section class="py-20 bg-[#f5f1ec]">
    <div class="max-w-7xl mx-auto px-6 md:px-10">

        <div class="flex justify-between items-center mb-10">
            <div>
                <p class="text-yellow-600 uppercase text-sm font-semibold">⭐ Featured</p>
                <h2 class="text-3xl md:text-4xl font-serif font-bold">
                    Handpicked for You
                </h2>
            </div>
        </div>

        <div class="relative overflow-hidden">

            <div id="slider" class="flex gap-6 transition-transform duration-500">

                @for ($i = 0; $i < 4; $i++)
                <div class="min-w-[250px] bg-white rounded-xl shadow-lg overflow-hidden group reveal">

                    <div class="relative">
                        <img src="{{ asset('images/Atomic.jpeg') }}"
                             class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center gap-4">
                            <button class="bg-white px-4 py-2 rounded-lg">View</button>
                            <button class="bg-red-700 text-white px-4 py-2 rounded-lg">Cart</button>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="font-serif font-bold">The Midnight Library</h3>
                        <p class="text-gray-600 text-sm">Matt Haig</p>
                    </div>

                </div>
                @endfor

            </div>

            <div class="flex justify-end gap-4 mt-6 md:hidden">
                <button onclick="slide1(-1)" class="bg-white px-4 py-2 shadow rounded">←</button>
                <button onclick="slide1(1)" class="bg-white px-4 py-2 shadow rounded">→</button>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-[#f5f1ec]">
    <div class="max-w-7xl mx-auto px-6 md:px-10">
        <div class="flex flex-row items-center justify-between mb-8">
            <div>
                <p class="text-red-900 uppercase text-sm font-semibold">
                    <i class="fa-solid fa-arrow-trend-up" style="color: rgba(80, 30, 30, 1.00);"></i>
                        Trending
                </p>

                <h1 class="text-3xl md:text-4xl font-serif font-bold">Popular Right Now</h1>
            </div>
            
            <div>
                <a href=""
                    class="py-4 px-6 text-black rounded-lg hover:bg-red-900 transition">
                    View All ->
                </a>
            </div>
        </div>

        <div class="relative overflow-hidden">

            <div id="slider2" class="flex gap-6 transition-transform duration-500">

                @for ($i = 0; $i < 4; $i++)
                <div class="min-w-[250px] bg-white rounded-xl shadow-lg overflow-hidden group reveal">

                    <div class="relative">
                        <img src="{{ asset('images/Atomic.jpeg') }}"
                                class="w-full h-72 object-cover group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center gap-4">
                            <button class="bg-white px-4 py-2 rounded-lg">View</button>
                            <button class="bg-red-700 text-white px-4 py-2 rounded-lg">Cart</button>
                        </div>
                    </div>

                    <div class="p-4">
                        <h3 class="font-serif font-bold">The Midnight Library</h3>
                        <p class="text-gray-600 text-sm">Matt Haig</p>
                    </div>

                </div>
                @endfor

            </div>
            <div class="flex justify-end gap-4 mt-6 md:hidden">
                <button onclick="slide2(-1)" class="bg-white px-4 py-2 shadow rounded">←</button>
                <button onclick="slide2(1)" class="bg-white px-4 py-2 shadow rounded">→</button>
            </div>
        </div>
    </div>
</section>

<section class="py-40 bg-red-800 mb-10">
    <div class="max-w-7xl mx-auto px-6 md:px-10 flex flex-col md:flex-row items-center justify-between gap-8">
        <div>
            <h1 class="text-white font-bold font-serif text-4xl text-center mb-5">Start Your Reading Journey Today</h1>
            <p class="text-white ">Join thousands of book lovers who have discovered their next favorite read on <br class="text-center">
                VivihBooks.
            </p>
        </div>
        <div>
            <a href="{{ route('register') }}" class="bg-yellow-700 hover:bg-yellow-500 px-6 py-3 rounded-lg text-white transition">
                Create Free Account →
            </a>
        </div>
    </div>
</section>


<script>

let index1 = 0;

function slide1(direction) {
    const slider = document.getElementById('slider');
    const cardWidth = slider.children[0].offsetWidth + 24;
    const totalCards = slider.children.length;

    index1 += direction;

    if (index1 < 0) index1 = 0;
    if (index1 > totalCards - 1) index1 = totalCards - 1;

    slider.style.transform = `translateX(-${index1 * cardWidth}px)`;
}


let index2 = 0;

function slide2(direction) {
    const slider = document.getElementById('slider2');
    const cardWidth = slider.children[0].offsetWidth + 24;
    const totalCards = slider.children.length;

    index2 += direction;

    if (index2 < 0) index2 = 0;
    if (index2 > totalCards - 1) index2 = totalCards - 1;

    slider.style.transform = `translateX(-${index2 * cardWidth}px)`;
}


const reveals = document.querySelectorAll('.reveal');

function revealOnScroll() {
    reveals.forEach(el => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

</script>



</x-layout>
