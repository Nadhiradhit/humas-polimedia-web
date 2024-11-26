@section('title', 'Hubungi Kami')


<x-layouts.app-layout>
    <section class="w-full">
        <div class="w-full p-8 bg-primary rounded-2xl border-slate-950 border-[3px]">
            <div class="flex space-x-4">
                <p class="w-24 p-2 text-center text-slate-950 bg-gray-200 font-bold border-[3px] rounded-full border-slate-950">Humas</p>
                <p class="w-32 p-2 text-center text-slate-950 font-bold bg-red-200 border-[3px] rounded-full border-slate-950">Polimedia</p>
                <p class="w-44 p-2 text-center text-slate-950 font-bold bg-slate-50 border-[3px] rounded-full border-slate-950">Hubungi Kami</p>
            </div>
            <div class="flex flex-col pt-12">
                <h2 class="text-6xl font-bold text-slate-900">Hubungi Kami</h2>
            </div>
        </div>
        <div class="grid gap-8 py-8 md:grid-cols-2">
            <div class="h-56 px-4 py-5 space-y-2 border-[3px] bg-base-100 rounded-2xl border-slate-950">
                <div class="border-2 border-green-500 collapse collapse-arrow">
                    <input type="radio" name="my-accordion-1" checked="checked"/>
                        <div class="flex items-center gap-4 collapse-title">
                            <ion-icon name="logo-whatsapp" size="large" class="text-green-500"></ion-icon>
                            <h2 class="text-xl font-semibold ">Whatsapp Center</h2>
                        </div>
                        <div class="collapse-content">
                            <p class="text-lg font-medium">0811-1669-695</p>
                        </div>
                </div>
                <div class="border-2 border-red-500 collapse collapse-arrow">
                    <input type="radio" name="my-accordion-1" />
                        <div class="flex items-center gap-4 collapse-title">
                            <ion-icon name="mail-outline" size="large" class="text-red-500"></ion-icon>
                            <h2 class="text-xl font-semibold">Email</h2>
                        </div>
                        <div class="collapse-content">
                            <p class="text-lg font-medium">humas@polimedia.ac.id</p>
                        </div>
                </div>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-56 rounded-2xl bg-accent border-slate-950 border-[3px] p-4">
                <h1 class="text-6xl font-bold">Jadwal Kami</h1>
                <p class="pt-4 text-2xl font-bold">Senin - Jumat</p>
                <p class="text-2xl font-semibold">08.00 - 16.00 WIB</p>
            </div>
        </div>
        <div class="grid gap-8 pb-8 md:grid-cols-5">
            <div class="w-full col-span-3 h-96 rounded-2xl">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19517.00835084198!2d106.827131!3d-6.3473537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec2e63dcf7b7%3A0x39a93c506b0174b8!2sPolimedia%20Kreatif!5e1!3m2!1sen!2sid!4v1730295913445!5m2!1sen!2sid"
                width="100%"
                height="100%"
                class="rounded-2xl"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="flex flex-col items-center justify-center w-full col-span-3 md:col-span-2 h-96 rounded-2xl bg-blue-200 border-slate-950 border-[3px]">
                <div class="flex items-center gap-2">
                    <ion-icon name="location-outline" size="large"></ion-icon>
                    <h1 class="text-6xl font-bold">Lokasi Kami</h1>
                </div>
                <p class="pt-4 font-semibold text-center text-md">Jl. Srengseng Sawah Raya No.17, RT.8/RW.3, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12630</p>
            </div>
        </div>
    </section>
</x-layouts.app-layout>
