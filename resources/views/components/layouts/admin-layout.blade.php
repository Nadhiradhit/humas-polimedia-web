<!DOCTYPE html>
<html lang="en" data-theme="mytheme">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ url('assets/images/polimedia-logo.png')}}">
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}" defer></script>
    <title>@yield('title')</title>
</head>
<body class="flex flex-col w-full gap-4 px-16 py-8 md:flex-row font-plusJakarta">


    <x-navbar.sidebar/>
    @include('components.actions.alert')
    @yield('content')


    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                const notifToast = document.getElementById('notificationToast');
                notifToast.classList.add('hidden');
            }, 3000);
        })

        function togglePassword(){
            const passwordField = document.getElementById('password');
            const icon = document.querySelector('ion-icon');

            if(passwordField.type === 'password'){
                passwordField.type = 'text';
                icon.name = 'eye-outline';
            }else {
                passwordField.type = 'password';
                icon.name = 'eye-off-outline';
            }
        }

        function appendEmail(){
            const emailInput = document.getElementById('email');
            const domain = "@polimedia.ac.id";

            if(!emailInput.value.includes(domain)){
                emailInput.value = emailInput.value.split('@')[0] + domain;
            }
        }

    </script>
</body>
</html>
