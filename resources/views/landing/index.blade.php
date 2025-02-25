@section('title', 'Humas Polimedia')

<x-layouts.app-layout>
    <section class="w-full">
        <div class="flex flex-col lg:flex-row bg-secondary rounded-2xl border-slate-950 border-[3px]">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="image-index">
            <div class="p-4 lg:p-8">
                <div class="flex items-center pt-8 space-x-4">
                    <p class="w-24 p-2 text-center text-slate-950 font-bold bg-gray-200 border-[3px] rounded-full border-slate-950">Humas</p>
                    <p class="w-32 p-2 text-center text-slate-950 font-bold bg-red-200 border-[3px] rounded-full border-slate-950">Polimedia</p>
                </div>
                <div class="flex flex-col justify-center h-[25rem]">
                    <h2 class="text-4xl font-bold lg:text-6xl text-slate-900">Humas Polimedia</h2>
                    <p class="pt-8 font-semibold lg:text-lg ">
                        Selamat datang di Halaman
                        Humas Politeknik Negeri Media Kreatif merupakan unit yang berfokus pada kepuasan pelayanan.
                        Pelayanan yang diberikan berkaitan dengan kebutuhan informasi publik terutama tentang hal-hal yang berkaitan dengan lembaga seperti informasi mahasiswa baru, penerimaan magang, kunjungan sekolah, atau pun penyampaian berita kegiatan kampus.
                        Dengan semangat yang mengedepankan kualitas,
                        Humas Polimedia selalu memaksimalkan pelayanan yang ramah dan akuntabel.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full gap-4 py-4 lg:flex-row">
            <div class="w-full p-8 bg-accent rounded-2xl border-slate-950 border-[3px]">
                <h2 class="text-2xl font-bold w-full lg:w-96 p-2 text-center text-slate-950 bg-red-200 border-[3px] rounded-full border-slate-950 mb-4">Struktur Organisasi</h2>
                <img src="../assets/images/struktur-organisasi.png" alt="struktur-organisasi-humas" class="rounded-2xl">
            </div>
            <div class="w-full p-8 bg-primary rounded-2xl border-slate-950 border-[3px]">
                <h2 class="text-2xl font-bold w-full lg:w-96 p-2 text-center text-slate-950 bg-blue-200 border-[3px] rounded-full border-slate-950 mb-4">Tugas Humas</h2>
                @php
                    $tugasHumas = [
                        "Menyampaikan informasi penting kepada publik, baik secara langsung maupun melalui media massa",
                        "Membangun dan Walkeraga citra dan reputasi kampus",
                        "Menjalin hubungan baik dengan publik",
                        "Mengelola komunikasi dengan pihak internal dan eksternal ",
                        "Mengelola penyimpanan dan pendokumentasian informasi publik",
                        "Memfasilitasi konsolidasi antar mahasiswa",
                        "Menghubung semua unit organisasi dengan stakeholder"
                    ]
                @endphp
                <div>
                    @foreach ($tugasHumas as $item)
                        <ul class="py-5 space-y-4 text-lg font-semibold ">
                            <li class="text-sm font-bold w-full p-2 text-center text-slate-950 bg-red-200 border-[3px] rounded-full border-slate-950">{{ $item }}</li>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-2xl font-bold w-full lg:w-96 p-2 text-center text-slate-950 bg-gray-200 border-[3px] rounded-full border-slate-950 mb-4">Galeri Humas</h2>
            <div class="grid w-full grid-cols-1 gap-4 pb-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="w-full">
                    <img src="../assets/images/humas-gallery-1.jpg" alt="kampus-polimedia-img" class="w-full h-60 cursor-pointer rounded-xl border-[3px] border-slate-950 transition-transform duration-300 hover:scale-105">
                </div>
                <img src="../assets/images/humas-gallery-2.jpg" alt="kampus-polimedia-img" class="w-full h-60 cursor-pointer rounded-xl border-[3px] border-slate-950 transition-transform duration-300 hover:scale-105 object-cover">
                <img src="../assets/images/humas-gallery-3.jpg" alt="kampus-polimedia-img" class="w-full h-60 cursor-pointer rounded-xl border-[3px] border-slate-950 transition-transform duration-300 hover:scale-105">
                <img src="../assets/images/campus-polimedia-2.jpeg" alt="kampus-polimedia-img" class="w-full h-60 cursor-pointer rounded-xl border-[3px] border-slate-950 transition-transform duration-300 hover:scale-105">
            </div>
        </div>
    </section>
</x-layouts.app-layout>
