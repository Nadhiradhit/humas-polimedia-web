<nav class="relative justify-between gap-10 py-8 my-6 text-base bg-purple-100 rounded-full shadow navbar">
    <div class="flex pl-4 space-x-4">
        <img src="../assets/images/polimedia-logo.png" width="32" alt="">
        <h4 class="text-lg font-bold">Humas Polimedia</h4>
    </div>

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
                            <li><a href="{{ route('landing.survey-kepuasan-sekolah') }}">Kunjungan Sekolah</a></li>
                            <li><a href="{{ route('landing.survey-kepuasan-tamu') }}">Tamu</a></li>
                            <li><a href="{{ route('landing.survey-kepuasan-magang') }}">Magang</a></li>
                        </ul>
                </details>
            </li>
            {{-- <li>
                <details onclick="toggleDetails(event)">
                    <summary>Dokumentasi & Berita</summary>
                        <ul class="w-56 p-2">
                            <li><a>Berita Kegiatan</a></li>
                            <li><a>Dokumentasi</a></li>
                        </ul>
                </details>
            </li> --}}
            <li>
                <x-navbar.nav-link href="{{ route('landing.hubungi-kami') }}" :active="request()->routeIs('landing.hubungi-kami')">
                Hubungi Kami
                </x-navbar.nav-link>
            </li>
        </ul>
    </div>


    <div class="lg:hidden">
        <button onclick="toggleMobileMenu()" class="btn btn-ghost btn-circle">
            <ion-icon name="menu-outline" class="text-3xl"></ion-icon>
        </button>

        <div id="mobileMenu" class="fixed inset-0 z-50 hidden overflow-y-hidden bg-purple-100 bg-opacity-90">
            <div class="flex justify-end p-4">
                <button onclick="toggleMobileMenu()" class="text-3xl text-black">
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>
            <ul class="relative flex flex-col items-center justify-center space-y-8 animate-slide-in menu top-16">
                <li>
                    <x-navbar.nav-link href="{{ route('landing.index') }}" :active="request()->routeIs('landing.index')" class="text-4xl font-bold">
                        Beranda
                    </x-navbar.nav-link>
                </li>
                <li>
                    <details onclick="toggleDetails(event)">
                        <summary class="text-4xl font-bold cursor-pointer">Layanan</summary>
                        <ul class="pl-4 space-y-1 text-2xl">
                            <li><a href="{{ route('landing.kunjungan-sekolah') }}">Pengajuan Kunjungan Sekolah</a></li>
                            <li><a href="{{ route('landing.pengajuan-magang') }}">Pengajuan Magang</a></li>
                        </ul>
                    </details>
                </li>
                <li>
                    <details onclick="toggleDetails(event)">
                        <summary class="text-4xl font-bold cursor-pointer">Survey Kepuasaan</summary>
                        <ul class="pl-4 space-y-1 text-2xl">
                            <li><a href="{{ route('landing.survey-kepuasan-sekolah') }}">Kunjungan Sekolah</a></li>
                            <li><a href="{{ route('landing.survey-kepuasan-tamu') }}">Tamu</a></li>
                            <li><a href="{{ route('landing.survey-kepuasan-magang') }}">Magang</a></li>
                        </ul>
                    </details>
                </li>
                {{-- <li>
                    <details onclick="toggleDetails(event)">
                        <summary class="text-4xl font-bold cursor-pointer">Dokumentasi & Berita</summary>
                        <ul class="pl-4 space-y-1 text-2xl">
                            <li><a>Berita Kegiatan</a></li>
                            <li><a>Dokumentasi</a></li>
                        </ul>
                    </details>
                </li> --}}
                <li>
                    <x-navbar.nav-link href="{{ route('landing.hubungi-kami') }}" :active="request()->routeIs('landing.hubungi-kami')" class="text-4xl font-bold">
                        Hubungi Kami
                    </x-navbar.nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');

    const body = document.body;
    body.classList.toggle('overflow-y-hidden');
}
</script>
