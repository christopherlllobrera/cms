{{-- <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <img src="{{ URL('images/task.jpg') }}" alt="Miescor Inc."
            class="absolute w-full h-full object-cover">
    </div>
    <div class="absolute top-0 left-0 w-full h-full bg-gray-800 opacity-50 z-5"></div>
    <div class="video-content space-y-2 z-10">
        <h1
            class="mx-auto max-w-4xl font-display text-5xl font-bold tracking-normal text-white dark:text-gray-100 sm:text-7xl">
            POWERING THE NATION</h1>
        <p class="text-3xl mb-6">A legacy of performance, a future of excellence</p>
        <button
            class="text-white bg-orange-600 hover:bg-orange-700 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-base px-6 py-2.5 focus:outline-none transition">
            Learn More
        </button>
    </div>
</section> --}}

<div id="default-carousel" class="relative w-full h-screen" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden bg-gray-900 opacity-80 z-5 ">
        <!-- Item 1 -->
        <div class="hidden duration-500 ease-in-out min-h-screen" data-carousel-item>
            <img src="{{ URL('images/task.jpg') }}"
                class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10 px-4 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-bold mb-2 sm:mb-4">POWERING THE FUTURE</h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-medium mb-4 sm:mb-6">Leading the way in sustainable energy</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-4 sm:px-6 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base">Learn More</button>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-500 ease-in-out min-h-screen" data-carousel-item>
            <img src="{{ URL('images/tower.jpg') }}" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10 px-4 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-bold mb-2 sm:mb-4">POWERING THE FUTURE</h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-medium mb-4 sm:mb-6">Leading the way in sustainable energy</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-4 sm:px-6 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base">Learn More</button>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-500 ease-in-out min-h-screen" data-carousel-item>
            <img src="{{ URL('images/work.jpg') }}" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10 px-4 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-bold mb-2 sm:mb-4">POWERING THE FUTURE</h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-medium mb-4 sm:mb-6">Leading the way in sustainable energy</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-4 sm:px-6 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base">Learn More</button>
            </div>
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out min-h-screen" data-carousel-item>
            <img src="{{ URL('images/task.jpg') }}" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10 px-4 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-bold mb-2 sm:mb-4">POWERING THE FUTURE</h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-medium mb-4 sm:mb-6">Leading the way in sustainable energy</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-4 sm:px-6 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base">Learn More</button>
            </div>
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out min-h-screen" data-carousel-item>
            <img src="{{ URL('images/tower.jpg') }}" class="absolute block w-full h-full object-cover" alt="...">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10 px-4 text-center">
                <h1 class="text-3xl sm:text-5xl md:text-6xl lg:text-8xl font-bold mb-2 sm:mb-4">POWERING THE FUTURE</h1>
                <p class="text-xl sm:text-2xl md:text-3xl lg:text-5xl font-medium mb-4 sm:mb-6">Leading the way in sustainable energy</p>
                <button class="bg-orange-600 hover:bg-orange-700 px-4 sm:px-6 py-2 sm:py-2.5 rounded-lg text-sm sm:text-base">Learn More</button>
            </div>
        </div>
    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
