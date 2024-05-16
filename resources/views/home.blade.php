

<x-layout>

    <div id="default-carousel" class="relative overflow-hidden shadow-lg" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-80 md:h-96 w-full">
            <img src="{{ asset('images/slider.jpg') }}" class="object-cover w-full h-full" alt="meek">
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-prev>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button type="button" class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition" data-carousel-next>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    <div class="bg-blue1 py-4">
        <p class="text-white uppercase w-10/12 mx-auto">The South Zviko Learning Platform equips students with the best tools for studying.
            Our System are filled with the latest equipment. When a student completes their studies with us,
            they transition seamlessly into the exams. </p>
    </div>
    <div class="">
        <div class="w-full h-24 bg-orange1">
        </div>
    </div>
    <div class="bg-blue1 py-12">
        <div class="w-10/12 mx-auto flex space-x-16 justify-center">
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
        </div>
        <div class="w-10/12 mx-auto flex space-x-16 justify-center mt-8">
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
            <div class="w-64 h-52 bg-white">
            </div>
        </div>
    </div>
</x-layout>
