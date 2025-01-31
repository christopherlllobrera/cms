<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-zinc-50 dark:bg-zinc-900 dark:text-white">
    <header class="bg-orange-500 text-white sticky top-0 z-10">
        <section class="max-w-5xl mx-auto p-4 flex justify-between items-center">
            <h1 class="text-xl font-medium">
                MIESCOR
            </h1>
            <div>
                <button id="mobile-open-button" class="text-3xl- sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-8 text-xl" aria-label="main">
                    <a href="#" class="hover:opacity-90">Home</a>
                    <a href="#" class="hover:opacity-90">About</a>
                    <a href="#" class="hover:opacity-90">Services</a>
                    <a href="#" class="hover:opacity-90">Contact</a>
            </div>
        </section>
    </header>
    <main class="max-4xl mx-auto">
        <section id="hero" class="flex flex-col-reverse justify-center sm:flex-row p-6 items-center gap-8 mb-12">
            <article class="text center sm:w-1/2">
                <h2 class="max-w-md text-4xl font-bold sm:text-5xl sm:text-left text-slate-900 dark:text-white">POWERING
                    THE NATION</h2>
                <p class="max-w-md text-2xl mt-4 text-center  sm:text-left text-slate-700 dark:text-slate-400 ">A legacy
                    of <span class="text-blue-700 dark:text-blue-300">competence</span></p>
                <p class="max-w-md text-2xl text-center  sm:text-left text-slate-700 dark:text-slate-400 ">A tradition
                    of <span class="text-blue-700 dark:text-blue-300">excellence</span></p>
            </article>
            <img class="w-1/2" src="{{ URL('images/task.jpg') }}" alt="Flash">
        </section>

        <hr class="mx-auto bg-black dark:bg-white w-1/2">
        <section id="Department " class="p-6 my-12">
            <h2 class="text-4xl font-bold text-center text-slate-900 dark:text-white">Departments</h2>
            <ul class="list-none mx-auto my-12 flex flex-col sm:flex-row items-center gap-8">
                <li
                    class="w-2/3 sm:w-5/6 flex flex-col items-center border border-solid border-slate-900 dark:border-gray-100 bg-white py-6 px-2 rounded-3xl shadow-xl">
                    <img class="w-1/2 mb-6" src="{{ URL('images/miescor.png') }}" alt="Miescor">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">MIESCOR</h3>
                    <p class="sm:hidden text-slate-500 dark:text-slate-400">Excellent in Engineering</p>
                </li>
                <li
                    class="w-2/3 sm:w-5/6 flex flex-col items-center border border-solid border-slate-900 dark:border-gray-100 bg-white py-6 px-2 rounded-3xl shadow-xl">
                    <img class="w-1/2 mb-6" src="{{ URL('images/miescor.png') }}" alt="Miescor">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">MIESCOR</h3>
                    <p class="sm:hidden text-slate-500 dark:text-slate-400">Excellent in Engineering</p>
                </li>
                <li
                    class="w-2/3 sm:w-5/6 flex flex-col items-center border border-solid border-slate-900 dark:border-gray-100 bg-white py-6 px-2 rounded-3xl shadow-xl">
                    <img class="w-1/2 mb-6" src="{{ URL('images/miescor.png') }}" alt="Miescor">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">MIESCOR</h3>
                    <p class="sm:hidden text-slate-500 dark:text-slate-400">Excellent in Engineering</p>
                </li>
            </ul>
        </section>
        <hr class="mx-auto bg-black dark:bg-white w-1/2">
        <section id="News" class="p-6 my-12">
            <h2 class="text-4xl font-bold text-center text-slate-900 dark:text-white">News</h2>
        </section>
        <hr class="mx-auto bg-black dark:bg-white w-1/2">
        <section id="Even" class="p-6 my-12">
            <h2 class="text-4xl font-bold text-center text-slate-900 dark:text-white">Events</h2>
        </section>

    </main>

</body>

</html>



<section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
    <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
        <video class="min-w-full min-h-full absolute object-cover"
            src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4"
            type="video/mp4" autoplay muted loop></video>
    </div>
    <div class="video-content space-y-2 z-10">
        <h1 class="font-light text-6xl">full Hero Video</h1>
        <h3 class="font-light text-3xl">with TailwindCSS</h3>
    </div>
</section>

<div class="px-4 mx-auto max-w-7xl sm:px-6">
    <div class="relative pt-6 pb-16 sm:pb-24">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
            <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#"><span class="sr-only">Company Name</span>
                        <img class="w-auto h-8 sm:h-10" src="https://www.svgrepo.com/show/448244/pack.svg"
                            loading="lazy" width="202" height="40">
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-gray-50 rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-50"
                            type="button" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" aria-hidden="true" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex md:space-x-10 list-none">
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="">Pricing</a>
                </li>
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="">Gallary
                    </a>
                </li>
                <li>
                    <a href="#" class="text-base font-normal text-gray-500 list-none hover:text-gray-900"
                        target="_blank">Blog
                    </a>
                </li>
            </div>
            <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                <div class="inline-flex rounded-full shadow">
                    <div href="#"
                        class="inline-flex items-center px-4 py-2 text-base text-gray-900 bg-white border border-transparent rounded-full cursor-pointer font-base hover:bg-gray-50 ">
                        Sign in
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<section class="relative h-screen flex flex-col items-center justify-center text-center text-white ">
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
        <img src="{{ URL('images/task.jpg') }}" alt="Power lines at sunset"
            class="absolute w-full h-full object-cover">
    </div>
    <div class="video-content space-y-2 z-10">
        <h1
            class="mx-auto max-w-4xl font-display text-5xl font-bold tracking-normal text-zinc-600 dark:text-gray-300 sm:text-7xl">
            POWERING THE NATION</h1>
        <p class="text-xl mb-6">A legacy of performance, a future of excellence</p>
        <button
            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3.5 focus:outline-none">
            Learn More →
        </button>
    </div>
</section>

<a class="bg-orange-600 dark:bg-gray-800 rounded-xl text-white dark:text-gray-300 font-medium px-4 py-3 sm:mt-10 mt-8 hover:bg-orange-500 dark:hover:bg-gray-600 transition"
    href="">Get started</a>

<div
    class="flex flex-1 w-full flex-col items-center justify-center text-center px-4 py-20 bg-gradient-to-r from-green-50/50 via-teal-50 to-green-50/50 dark:from-gray-800 dark:via-gray-700 dark:to-gray-800">
    <a href=""
        class="border border-white-700 dark:border-gray-300 rounded-lg py-2 px-4 text-white-400 dark:text-gray-300 text-sm mb-5 transition duration-300 ease-in-out hover:text-gray-500 dark:hover:text-gray-400">
        Forget about spending hundreds $
    </a>
    <h1
        class="mx-auto max-w-4xl font-display text-5xl font-bold tracking-normal text-white-300 dark:text-gray-300 sm:text-7xl">
        Revolutionize Your Insurance
        <span class="relative whitespace-nowrap text-white-600 dark:text-gray-300">Operations</span>
        <span class="relative whitespace-nowrap text-orange-500 dark:text-orange-300">
            <svg aria-hidden="true" viewBox="0 0 418 42"
                class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-500 dark:fill-orange-300/60"
                preserveAspectRatio="none">
                <path
                    d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.780 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.540-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.810 23.239-7.825 27.934-10.149 28.304-14.005 .417-4.348-3.529-6-16.878-7.066Z">
                </path>
            </svg>
            <span class="relative">with AI</span>
        </span>
    </h1>
    <h2 class="mx-auto mt-12 max-w-xl text-lg sm:text-white-400 text-white-500 dark:text-gray-300 leading-7">
        Experience the future of insurance with our cutting-edge AI tool. From underwriting to claims processing, our
        intelligent system streamlines and enhances every aspect of your insurance operations.
    </h2>
    <a class="bg-orange-600 dark:bg-gray-800 rounded-xl text-white dark:text-gray-300 font-medium px-4 py-3 sm:mt-10 mt-8 hover:bg-orange-500 dark:hover:bg-gray-600 transition"
        href="">Get started</a>
</div>

<img src=alt="Power lines at sunset" class="absolute w-full h-full object-cover">


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PowerCo</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-blue-900 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold text-white">PowerCo</span>
            </a>
            <div class="hidden w-full md:block md:w-auto">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:text-blue-200">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white rounded hover:text-blue-200">Department</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:text-blue-200">News</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded hover:text-blue-200">Events</a>
                    </li>
                    <li>
                        <button
                            class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative h-96">
        <img src="/api/placeholder/1920/600" alt="Power lines at sunset" class="absolute w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50">
            <div class="max-w-screen-xl mx-auto px-4 h-full flex items-center">
                <div class="text-white">
                    <h1 class="text-5xl font-bold mb-4">POWERING THE NATION</h1>
                    <p class="text-xl mb-6">A legacy of performance, a future of excellence</p>
                    <button
                        class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-6 py-3.5 focus:outline-none">
                        Learn More →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Departments Grid -->
    <section class="max-w-screen-xl mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-8">Departments and Projects</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-6">
            <!-- Technical Support -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Technical Support</span>
            </div>
            <!-- HR -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Human Resources</span>
            </div>
            <!-- Data Center -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Data Center</span>
            </div>
            <!-- Infrastructure -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Infrastructure</span>
            </div>
            <!-- Security -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Security</span>
            </div>
            <!-- Innovation -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Innovation</span>
            </div>
            <!-- Cloud Services -->
            <div class="flex flex-col items-center text-center">
                <div
                    class="relative w-32 h-32 overflow-hidden bg-orange-600 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 15a4.5 4.5 0 004.5 4.5H18a3.75 3.75 0 001.332-7.257 3 3 0 00-3.758-3.848 5.25 5.25 0 00-10.233 2.33A4.502 4.502 0 002.25 15z" />
                    </svg>
                </div>
                <span class="text-sm mt-2">Cloud Services</span>
            </div>
            <!-- Maintenance -->
            <div class="flex flex-
