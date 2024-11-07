<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="flex flex-col w-full gap-4 px-16 py-8 md:flex-row font-plusJakarta">


    <x-navbar.sidebar/>
    @include('components.actions.alert')
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
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
