<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="flex px-4 font-plusJakarta">

    <x-navbar.sidebar/>
    <div class="px-8 py-16">
        {{ $slot }}
    </div>
</body>
</html>
