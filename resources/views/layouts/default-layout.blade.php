<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{ $title ?? 'Honoura — Awards, Corporate Gifting & Event Production' }}</title>
    <meta name="description"
          content="{{ $description ?? 'Honoura designs custom awards and trophies, supplies corporate gifts and produces award ceremonies and corporate events, from concept to curtain call.' }}"/>
    <meta name="theme-color" content="#0B0F19"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon_io/favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,400&family=Montserrat:wght@400;500;600;700;800&family=Quicksand:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-navy-900 text-ivory antialiased font-montserrat">
{{ $slot }}
<x-footer/>
</body>
</html>
