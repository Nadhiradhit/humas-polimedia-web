@section('title', 'Humas Polimedia')

<x-layouts.app-layout>
    <section class="w-full">
        <div class="flex flex-col lg:flex-row bg-secondary rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="image-index">
            <div class="p-4 lg:p-8">
                <div class="flex items-center pt-4 space-x-4">
                    <p class="w-24 p-2 text-center text-slate-950 font-bold bg-gray-200 border-[3px] rounded-full border-slate-950">Humas</p>
                    <p class="w-32 p-2 text-center text-slate-950 font-bold bg-red-200 border-[3px] rounded-full border-slate-950">Polimedia</p>
                </div>
                <div class="flex flex-col pt-8 h-[30rem]">
                    <h2 class="text-4xl font-bold lg:text-6xl text-slate-900">Humas Polimedia</h2>
                    <p class="pt-8 font-semibold text-justify lg:text-lg ">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quibusdam, optio facere sunt ex ratione voluptatum minima debitis iste totam
                        molestias veniam nam, voluptatibus illum, quas sint? Harum eius id
                        dolorem fugiat necessitatibus architecto molestias consequatur asperiores
                        possimus, voluptatibus mollitia voluptates reprehenderit corporis
                        esse molestiae, quis, est iste reiciendis iure magnam quod error
                        accusantium beatae. Optio quasi doloribus, vel accusantium voluptatibus eos
                        ipsam ea, sit deserunt, natus soluta? Neque ipsum qui obcaecati recusandae
                        accusamus facere quibusdam. Labore cupiditate recusandae architecto quas dicta,
                        magnam reiciendis ratione ipsam natus aliquam aliquid et voluptatibus?
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col w-full gap-4 py-4 lg:flex-row">
            <div class="w-full p-8 bg-accent rounded-2xl">
                <h2 class="text-2xl font-bold w-96 p-2 text-center text-slate-950 bg-red-200 border-[3px] rounded-full border-slate-950 mb-4">Struktur Organisasi</h2>
                <img src="../assets/images/struktur-organisasi.png" alt="struktur-organisasi-humas" class="rounded-2xl">
            </div>
            <div class="w-full p-8 bg-primary rounded-2xl">
                <h2>Struktur Organisasi</h2>
            </div>
        </div>
    </section>
</x-layouts.app-layout>
