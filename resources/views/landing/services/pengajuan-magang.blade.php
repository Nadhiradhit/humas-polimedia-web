@section('title', 'Pengajuan Magang')

<x-layouts.app-layout>
    <div class="flex flex-col mb-8 border-2 bg-base-100 rounded-2xl border-primary">
        <div class="w-full rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[30rem] ">
        </div>
        <div class="px-8 py-4 text-slate-950">
            <h3 class="text-2xl font-bold">Form Pengajuan Magang</h3>
            <p class="text-lg font-semibold text-secondary">Harap di isi dengan lengkap dan sesuai pada form ini!</p>
            <div class="pt-4">
                <form action="{{ route('intern.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Asal Sekolah</span>
                        </label>
                        <x-forms.form-input name="name_school" id="name_school" type="text" placeholder="Tuliskan asal sekolah" required />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Jumlah Siswa</span>
                        </label>
                        <x-forms.form-input name="total_student" id="total_student" type="text" placeholder="Tuliskan jumlah siswa" required/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Nama Lengkap Siswa</span>
                        </label>
                        <x-forms.form-input name="name_student" id="name_student" type="text" placeholder="Tuliskan nama lengkap siswa" required/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Jurusan Sekolah</span>
                        </label>
                        <x-forms.form-input name="majority_school" id="majority_school" type="text" placeholder="Tuliskan jurusan sekolah" required/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Kelas Siswa</span>
                        </label>
                        <div class="flex space-x-4">
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class" value="X" required/>
                                <span class="ml-2">Kelas X</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class"  value="XI" required/>
                                <span class="ml-2">Kelas XI</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="student_class"  value="XII"required/>
                                <span class="ml-2">Kelas XII</span>
                            </div>
                        </div>
                        <div class="w-full form-control">
                            <label class="label">
                                <span class="text-lg font-semibold">Guru Pendamping</span>
                            </label>
                            <x-forms.form-input name="accompaying_teacher" id="accompaying_teacher" type="text" placeholder="Tuliskan guru pendamping sekolah" required/>
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Pengajuan Tanggal Magang</span>
                        </label>
                        <x-forms.form-date name="submision_date" id="submision_date" required/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Narahubung</span>
                        </label>
                        <x-forms.form-input name="contact_person" id="contact_person" type="text" placeholder="Tuliskan guru pendamping sekolah" required/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Surat Permohonan Magang</span>
                        </label>
                        <x-forms.form-file name="letter_intership" id="letter_intership" placeholder="Tuliskan guru pendamping sekolah" required/>
                    </div>
                    <x-button.button>
                        Submit
                    </x-button.button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app-layout>
