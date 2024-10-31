<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="w-full px-6 mx-auto md:px-10 max-w-screen-3xl font-plusJakarta">

    <x-navbar.navbar />

    @yield('content')
    {{ $slot }}
    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    {{-- public/js/navbar.js --}}
    <script src="{{ asset('js/navbar.js') }}"></script>
</body>
</html>
