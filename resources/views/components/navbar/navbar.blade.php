<nav class="relative justify-between gap-10 py-8 my-6 text-base bg-purple-100 rounded-full shadow navbar">
    <div class="flex pl-4 space-x-4">
        <img src="../assets/images/polimedia-logo.png" width="32" alt="">
        <h4 class="text-lg font-bold">Humas Polimedia</h4>
    </div>
    {{-- Navbar Desktop --}}
    <div class="hidden pr-4 space-x-4 lg:flex">
        <ul class="px-1 text-base menu menu-horizontal">
            <li>
                <x-navbar.nav-link href="{{ route('landing.index') }}" :active="request()->routeIs('landing.index')">
                    Beranda
                </x-navbar.nav-link>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary>Layanan</summary>
                        <ul class="w-56 p-2">
                            <li><a href="{{ route('landing.kunjungan-sekolah')}}">Pengajuan Kunjungan Sekolah</a></li>
                            <li><a href="{{ route('landing.pengajuan-magang')}}">Pengajuan Magang</a></li>
                        </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary>Survey Kepuasaan</summary>
                        <ul class="w-56 p-2">
                            <li><a >Kunjungan Sekolah</a></li>
                            <li><a>Orangtua Mahasiswa</a></li>
                            <li><a>Magang</a></li>
                        </ul>
                </details>
            </li>
            <li>
                <details onclick="toggleDetails(event)">
                    <summary>Dokumentasi & Berita</summary>
                        <ul class="w-56 p-2">
                            <li><a>Berita Kegiatan</a></li>
                            <li><a>Dokumentasi</a></li>
                        </ul>
                </details>
            </li>
            <li>
                <x-navbar.nav-link href="{{ route('landing.hubungi-kami') }}" :active="request()->routeIs('landing.hubungi-kami')">
                Hubungi Kami
                </x-navbar.nav-link>
            </li>
        </ul>
    </div>

    {{-- Navbar Mobile --}}
    <div class="flex lg:hidden">
        <button class="btn btn-ghost btn-circle">
            <ion-icon name="menu-outline" class="text-3xl"></ion-icon>
        </button>
    </div>
</nav>

<x-navbar.navbar-mobile />
