@section('title', 'Survey Kepuasaan Sekolah')

<x-layouts.app-layout>
    <h1>Hello</h1>
    <div class="flex flex-col mb-8 border-2 bg-base-100 rounded-2xl border-primary">
        <div class="w-full rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
        </div>
        <div class="px-8 py-4 text-slate-950">
            <h3 class="text-2xl font-bold">Form Penerimaan Kunjungan Sekolah</h3>
            <p class="text-lg font-semibold text-secondary">Survei ini dilakukan untuk mengetahui kepuasan Bapak/Ibu/Siswa/i terhadap pelayanan Humas  Polimedia. Kami sangat mengharapkan kerjasama dari Bapak/Ibu/Siswa/i untuk mengisi dan menjawab setiap pertanyaan yang diajukan. Atas perhatiannya kami ucapkan terima kasih.</p>
            <div class="pt-4">
                <form action="{{ route('kunjungan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Nama Sekolah</span>
                        </label>
                        <x-forms.form-input name="school_name" id="school_name" type="text" placeholder="Tuliskan asal sekolah" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Tanggal Pelaksanaan</span>
                        </label>
                        <x-forms.form-date name="submision_date" id="submision_date"/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Saya merasa senang dengan kegiatan kunjungan ini</span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Kunjungan ini sangat bermanfaat bagi para siswa/i yang sedang mencari referensi kampus
                            </span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Saya mendapatkan informasi tentang program studi yang ada di Polimedia
                            </span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Narasumber menjelaskan materi dengan sangat jelas dan detail
                            </span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Kunjungan ke beberapa tempat di Polimedia seperti kunjungan ke Perpustakaan, Laboratorium, Laboritarium Cetak, dsb membuat saya lebih memahami konsep industri kreatif
                            </span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Panitia penerimaan sangat ramah dan melayani dengan baik
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Durasi kunjungan sangat cukup untuk mendapatkan informasi baru tentang Polimedia
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Sangat Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Tidak Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Netra/Ragu-Ragu</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Setuju</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Sangat Setuju</span>
                            </div>
                        </div>
                    </div>
                    <x-button.button>
                        Submit
                    </x-button.button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app-layout>
