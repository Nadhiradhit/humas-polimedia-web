<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/polimedia-logo.png')}}">
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="w-full px-6 mx-auto md:px-10 max-w-screen-3xl font-plusJakarta">

    <x-navbar.navbar />
    @include('components.actions.alert')
    @yield('content')

    {{ $slot }}

    <x-navbar.footer />

    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    {{-- public/js/navbar.js --}}
    <script src="{{ asset('js/navbar.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                const notifToast = document.getElementById('notificationToast');
                notifToast.classList.add('hidden');
            }, 3000);
        })
    </script>
</body>
</html>
