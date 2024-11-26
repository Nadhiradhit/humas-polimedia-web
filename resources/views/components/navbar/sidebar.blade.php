<div x-data="{ openDropdown: null, sidebarOpen: false }" class="flex md:h-full">
    <div :class="{'block': sidebarOpen, 'hidden': !sidebarOpen}" class="fixed inset-y-0 left-0 z-20 w-full p-8 border-2 shadow-md lg:w-80 rounded-xl bg-slate-50 sm:block sm:relative">
        <button @click="sidebarOpen = false" class="absolute text-gray-400 top-4 right-4 sm:hidden hover:text-gray-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="flex flex-col gap-4 md:flex-row">
            <img src="../assets/images/polimedia-logo.png" width="32" alt="">
            <h3 class="text-lg font-bold lg:text-xl">Humas Polimedia</h3>
        </div>

        <div class="divider"></div>
        <ul class="space-y-8">
            <li class="px-4 py-2 hover:bg-gray-200 hover:rounded-lg hover:cursor-pointer">
                <x-navbar.nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')" class="md:w-60">
                    Dashboard
                </x-navbar.nav-link>
            </li>
            <li>
                <button @click="openDropdown = openDropdown === 1 ? null : 1" class="flex items-center justify-between w-full px-4 py-2 hover:rounded-lg hover:bg-gray-200 ">
                    <span>Data Pendaftaran</span>
                    <svg :class="{ 'transform rotate-180': openDropdown === 1 }" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul x-show="openDropdown === 1" class="mt-2 space-y-2">
                    <li class="px-4 py-2">
                        <a href="{{ route('admin.services.pengajuan-magang')}}" class="block">Layanan Pengajuan Magang</a>
                    </li>
                    <li class="px-4 py-2">
                        <a href="{{ route('admin.services.pengajuan-sekolah')}}" class="block">Layanan Pengajuan Sekolah</a>
                    </li>
                </ul>
            </li>
            <li>
                <button @click="openDropdown = openDropdown === 2 ? null : 2" class="flex items-center justify-between w-full px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
                    <span>Survey</span>
                    <svg :class="{ 'transform rotate-180': openDropdown === 2 }" class="w-4 h-4 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <ul x-show="openDropdown === 2" class="mt-2 space-y-2">
                    <li class="px-4 py-2">
                        <a href="{{ route('admin.services.survey.school.index')}}" class="block">Survey Kunjungan Sekolah</a>
                    </li>
                    <li class="px-4 py-2">
                        <a href="{{ route('admin.services.survey.guest.index')}}" class="block">Survey Tamu</a>
                    </li>
                    <li class="px-4 py-2">
                        <a href="{{ route('admin.services.survey.intern.index')}}" class="block">Survey Magang</a>
                    </li>
                </ul>
            </li>
            <li class="px-4 py-2 hover:bg-gray-200 hover:rounded-lg">
                <x-navbar.nav-link href="{{ route('create') }}" :active="request()->routeIs('create')">
                    User
                </x-navbar.nav-link>
            </li>
            <li class="px-4 py-2 rounded-lg bg-primary hover:bg-purple-300 hover:text-slate-800">
                <x-navbar.nav-link href="{{ route('auth.logout') }}" :active="request()->routeIs('auth.logout')">
                    Logout
                </x-navbar.nav-link>
            </li>
        </ul>
    </div>
    <div class="flex items-center justify-between w-full p-2 sm:hidden">
        <h1 class="text-lg font-bold">Dashboard Humas polimedia</h1>
        <button @click="sidebarOpen = true" class="text-gray-700">
            <label class="btn btn-circle">
                <svg
                class="fill-current swap-off"
                xmlns="http://www.w3.org/2000/svg"
                width="32"
                height="32"
                viewBox="0 0 512 512">
                <path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z" />
            </svg>
        </label>
    </button>
    </div>
</div>

