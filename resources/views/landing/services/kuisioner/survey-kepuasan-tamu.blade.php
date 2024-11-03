@section('title', 'Survey Kepuasan Tamu')

<x-layouts.app-layout>
    <div class="flex flex-col mb-8 border-2 bg-base-100 rounded-2xl border-primary">
        <div class="w-full rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
        </div>
        <div class="px-8 py-4 text-slate-950">
            <h3 class="text-2xl font-bold">Form Kepuasan Tamu</h3>
            <p class="text-lg font-semibold text-secondary">Survei ini dilakukan untuk mengetahui kepuasan Bapak/Ibu/Siswa/i terhadap pelayanan Humas  Polimedia. Kami sangat mengharapkan kerjasama dari Bapak/Ibu/Siswa/i untuk mengisi dan menjawab setiap pertanyaan yang diajukan. Atas perhatiannya kami ucapkan terima kasih.</p>
            <div class="pt-4">
                <form action="{{ route('kunjungan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Nama (Boleh Inisial):</span>
                        </label>
                        <x-forms.form-input name="school_name" id="school_name" type="text" placeholder="Tuliskan asal sekolah" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Keperluan Informasi</span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Penerimaan Mahasiswa Baru</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Program Magang</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Biaya UKT/SPP</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-input name="time_visit" id="time_visit" type="text" placeholder="Lainnya" />
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Saya mendapatkan informasi yang jelas dari tim Humas
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
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
                            <span class="text-lg font-semibold">Tim Humas melayani dengan baik dan ramah
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
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
                            <span class="text-lg font-semibold">Durasi pelayanan cukup untuk penyampaian informasi yang saya butuhkan
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
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
