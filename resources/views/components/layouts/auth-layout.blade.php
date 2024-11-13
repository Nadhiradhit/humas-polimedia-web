<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/polimedia-logo.png')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="flex items-center min-h-screen px-5 font-plusJakarta">
    @include('components.actions.alert')

    {{ $slot }}

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
