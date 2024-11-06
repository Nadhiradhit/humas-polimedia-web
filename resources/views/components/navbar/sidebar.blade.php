<div class="h-screen p-8 border-2 rounded-tr-lg rounded-br-lg border-r-primary w-72 bg-base-100">
    <div class="flex flex-col space-y-4">
        <h3 class="text-3xl font-bold">Humas Polimedia</h3>
        <li>
            <x-navbar.nav-link href="{{ route('landing.index') }}" :active="request()->routeIs('landing.index')">
                Beranda
            </x-navbar.nav-link>
        </li>
    </div>
        <a href="{{ route('auth.logout') }}" class="btn btn-primary">Logout</a>
    </div>
</div>
