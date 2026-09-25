<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin') | Honoura</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-(--warm-ivory) text-(--ink) antialiased font-montserrat">
    <x-navigation />
    <main class="min-h-[calc(100vh-73px)]">
        @yield('content')
    </main>
</body>
</html>