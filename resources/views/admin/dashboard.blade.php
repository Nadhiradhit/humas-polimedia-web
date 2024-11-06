<x-layouts.admin-layout>
    <div class="flex flex-col">
        <h1>Halo {{Auth::user()->name}}</h1>
        <a href="{{ route('auth.logout')}}">Logout</a>
    </div>
</x-layouts.admin-layout>
