<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="/logo-bem.png" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ Vite::asset('resources/css/style.css') }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} @isset($title)
         - BEM KEMA FPMIPA UPI
        @endisset
    </title>

    <!-- CSS & JS Assets -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    @isset($head)
        {{ $head }}
    @endisset

</head>

<body>
    <div class="content-wrapper">
    <x-app-partials.header></x-app-partials.header>
        {{ $slot }}
    <x-app-partials.footer></x-app-partials.footer>

    @isset($script)
        {{ $script }}
    @endisset
    </div>
    <script src="{{ Vite::asset('resources/js/plugins.js') }}"></script>
    <script src="{{ Vite::asset('resources/js/theme.js') }}"></script>
</body>

</html>
