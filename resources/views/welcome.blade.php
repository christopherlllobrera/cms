<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIESCOR - A  legacy of Engineering Excellence.</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/miescor 50.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.1/dist/flowbite.min.js"></script>

    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="dark:bg-zinc-950">
    @include('layouts.navigation')
    @include('layouts.heropage')

    @include('layouts.departments')
    @include('layouts.newspage')
    @include('layouts.events')
    @include('layouts.footer')
</body>
</html>
