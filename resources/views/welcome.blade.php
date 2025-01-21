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
                <button id="mobile-open-button"
                    class="text-3xl- sm:hidden focus:outline-none">
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
            <article class="sm:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center sm:text-5xl sm:text-left text-slate-900 dark:text-white">POWERING THE NATION</h2>
                <p class="max-w-md text-2xl mt-4 text-center  sm:text-left text-slate-700 dark:text-slate-400 ">A legacy of competence, a future of excellence</p>
                <button class="max-w-md text-center bg-orange-500 text-white px-4 py-2 mt-4 rounded-md">Sign Up</button>

            </article>

        </section>
    </main>

</body>

</html>
