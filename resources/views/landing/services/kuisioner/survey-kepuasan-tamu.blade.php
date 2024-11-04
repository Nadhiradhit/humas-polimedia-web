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
                <form action="{{ route('guest.survey.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Nama (Boleh Inisial):</span>
                        </label>
                        <x-forms.form-input name="guest_name" id="guest_name" type="text" placeholder="Tuliskan nama" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Keperluan Informasi</span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            <div class="flex items-center">
                                <x-forms.form-radio name="information_purpose" id="pmb" value="Penerimaan Mahasiswa Baru" />
                                <span class="ml-2">Penerimaan Mahasiswa Baru</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="information_purpose" id="internship" value="Program Magang" />
                                <span class="ml-2">Program Magang</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="information_purpose" id="fee" value="Biaya UKT/SPP" />
                                <span class="ml-2">Biaya UKT/SPP</span>
                            </div>
                            <div class="flex items-center">
                                <x-forms.form-radio name="information_purpose" id="other_info" value="Other" />
                                <span class="ml-2">Lainnya:</span>
                                <x-forms.form-input name="other_information_purpose" id="other_information_purpose" type="text" placeholder="Tuliskan keperluan lain" class="ml-2" />
                            </div>
                    </div>

                    @php
                        $questions = [
                            'Saya mendapatkan informasi yang jelas dari tim Humas' => 'clarity_info',
                            'Tim Humas melayani dengan baik dan ramah' => 'service_quality',
                            'Durasi pelayanan cukup untuk penyampaian informasi yang saya butuhkan' => 'service_duration',
                        ];
                        $options = [
                            'Sangat Tidak Setuju',
                            'Tidak Setuju',
                            'Netral/Ragu-Ragu',
                            'Setuju',
                            'Sangat Setuju'
                        ];
                    @endphp

                    @foreach ($questions as $questionText => $questionName)
                        <div class="w-full form-control">
                            <label class="label">
                                <span class="text-lg font-semibold">{{ $questionText }}</span>
                            </label>
                            <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                                @foreach ($options as $option)
                                    <div class="flex items-center">
                                        <x-forms.form-radio name="{{ $questionName }}" value="{{ $option }}" />
                                        <span class="ml-2">{{ $option }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    <x-button.button>
                        Submit
                    </x-button.button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app-layout>
