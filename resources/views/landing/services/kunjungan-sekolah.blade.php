@section('title', 'Kunjungan Sekolah')

<x-layouts.app-layout>
    <div class="flex flex-col mb-8 border-2 bg-base-100 rounded-2xl border-primary">
        <div class="w-full rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
        </div>
        <div class="px-8 py-4 text-slate-950">
            <h3 class="text-2xl font-bold">Form Penerimaan Kunjungan Sekolah</h3>
            <p class="text-lg font-semibold text-secondary">Silahkan lengkapi kolom di bawah ini sebagai pendataan awal kunjungan siswa ke Polimedia.</p>
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
                            <span class="text-lg font-semibold">Jumlah Siswa</span>
                        </label>
                        <x-forms.form-input name="total_student" id="total_student" type="text" placeholder="Tuliskan jumlah siswa" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Jurusan Sekolah</span>
                        </label>
                        <x-forms.form-input name="school_majority" id="school_majority" type="text" placeholder="Tuliskan jurusan sekolah" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Kelas Siswa</span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class" id="student_class" value="X"/>
                                <span class="ml-2">Kelas X</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class" id="student_class" value="X"/>
                                <span class="ml-2">Kelas XI</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class" id="student_class" value="X"/>
                                <span class="ml-2">Kelas XII</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Jumlah Guru Pendamping</span>
                        </label>
                        <x-forms.form-input name="total_teacher" id="total_teacher" type="text" placeholder="Tuliskan jumlah guru pendamping sekolah" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Tanggal Pelaksanaan</span>
                        </label>
                        <x-forms.form-date name="submision_date" id="submision_date"/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Waktu Pelaksanaan</span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit"  value="09.00-10.00" />
                                <span class="ml-2">Pukul 09.00-10.00 WIB</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="10.00-11.00" />
                                <span class="ml-2">Pukul 10.00-11.00 WIB</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="time_visit" id="time_visit" value="13.00-14.00" />
                                <span class="ml-2">Pukul 13.00-14.00 WIB</span>
                            </div>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Permintaan Informasi Program Studi</span>
                        </label>
                        <div class="mt-2 space-y-4">

                            @php
                                $programs = [
                                    'D4 Teknologi Rekayasa Pengemasan',
                                    'D4 Teknologi Rekayasa Multimedia',
                                    'D4 Teknologi Permainan',
                                    'D4 Animasi',
                                    'D4 Desain Mode',
                                    'D4 Produksi Film dan TV',
                                    'D4 Pengelolaan Perhotelan',
                                    'D3 Teknik Pemeliharaan Mesin',
                                    'D3 Teknik Grafika',
                                    'D3 Desain Grafis',
                                    'D3 Penerbitan',
                                    'D3 Fotografi',
                                    'D3 Periklanan',
                                    'D3 Penyiaran',
                                    'D3 Seni Kuliner',
                                ]
                            @endphp

                            @foreach($programs as $program)
                            <div class="flex items-center">
                                <x-forms.form-checkbox name="request_program" value="{{ $program }}" id="program_{{ $loop->index }}" />
                                <label for="program_{{ $loop->index }}" class="ml-2 text-gray-700">{{ $program }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Narahubung</span>
                        </label>
                        <x-forms.form-input name="contact_person" id="contact_person" type="text" placeholder="Tuliskan Narahubung" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Surat Permohonan Kunjungan</span>
                        </label>
                        <x-forms.form-file name="letter_visit" id="letter_visit" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Informasi Lainnya</span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="more_information" id="more_information" value="Informasi Penerimaan Mahasiswa Baru (PMB)" />
                                <span class="ml-2">Informasi Penerimaan Mahasiswa Baru (PMB)</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="more_information" id="more_information" value="TeFa" />
                                <span class="ml-2">TeFa</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="more_information" id="more_information" value="Sarpras" />
                                <span class="ml-2">Sarpras</span>
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
