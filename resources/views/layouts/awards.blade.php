<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Award Catalogue') | Honoura</title>
    <meta name="description" content="Browse Honoura's award catalogue and recognition packages.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-(--warm-ivory) text-(--ink) antialiased font-montserrat">
    <x-navigation />

    <main>
        @yield('content')
    </main>

    <x-footer />
</body>
</html>