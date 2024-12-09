@section('title', 'Survey Kepuasaan Magang')

<x-layouts.app-layout>
    <div class="flex flex-col mb-8 border-2 bg-slate-50 rounded-2xl border-primary">
        <div class="w-full rounded-2xl">
            <img src="../assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
        </div>
        <div class="px-8 py-4 text-slate-950">
            <h3 class="text-2xl font-bold">Form Kepuasan Magang</h3>
            <p class="text-lg font-semibold text-secondary">Survei ini dilakukan untuk mengetahui kepuasan Bapak/Ibu/Siswa/i terhadap pelayanan Humas  Polimedia. Kami sangat mengharapkan kerjasama dari Bapak/Ibu/Siswa/i untuk mengisi dan menjawab setiap pertanyaan yang diajukan. Atas perhatiannya kami ucapkan terima kasih.</p>
            <div class="pt-4">
                <form action="{{ route('intern.survey.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Nama Sekolah</span>
                        </label>
                        <x-forms.form-input name="school_name" id="school_name" type="text" placeholder="Tuliskan asal sekolah" />
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Pelaksanaan Magang: (Bulan)</span>
                        </label>
                        <x-forms.form-input name="intern_time" id="intern_time" type="text" placeholder="Tuliskan durasi pelaksanaan magang" />
                    </div>
                    @php
                        $internPlace = [
                            'Humas' => 'Humas',
                            'BAKPK' => 'BAKPK',
                            'Kepegawaian' => 'Kepegawaian',
                            'Laboratorium' => 'Laboratorium',
                            'Jurusan' => 'Jurusan',
                            'UPT TIK' => 'UPT TIK',
                            'UPT Percetakan' => 'UPT Percetakan',
                            'Lainnya' => 'Lainnya',
                        ]
                    @endphp
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">Tempat Pelaksanaan Magang Di Polimedia</span>
                        </label>
                        <x-forms.form-select name="intern_place" id="intern_place" :options="$internPlace" placeholder="Pilih tempat pelaksanaan magang"/>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Saya merasa senang mendapat kesempatan magang di Polimedia.
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            @php
                                $i = [
                                    'Sangat Tidak Setuju',
                                    'Tidak Setuju',
                                    'Netral/Ragu-Ragu',
                                    'Setuju',
                                    'Sangat Setuju',
                                ];
                            @endphp
                            @foreach ($surveyValue as $index => $item)
                                <div class="flex items-center">
                                        <x-forms.form-radio name="question_1" id="question_1_{{ $index }}" value="{{ $i[$index] }}" />
                                        <span class="ml-2">{{ $item }}</span>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Selama pelaksanaan magang, saya dilatih untuk mengasah skill, bekerja dalam tim, serta manajemen waktu
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                        @php
                            $i = [
                                'Sangat Tidak Setuju',
                                'Tidak Setuju',
                                'Netral/Ragu-Ragu',
                                'Setuju',
                                'Sangat Setuju',
                            ];
                        @endphp
                        @foreach ($surveyValue as $index =>  $item)
                            <div class="flex items-center">
                                    <x-forms.form-radio name="question_2" id="question_2_{{ $index }}" value="{{ $i[$index] }}" />
                                    <span class="ml-2">{{ $item }}</span>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Tim Humas sangat koperatif dalam menginformasikan prosedur magang kepada guru pendamping
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            @php
                                $i = [
                                    'Sangat Tidak Setuju',
                                    'Tidak Setuju',
                                    'Netral/Ragu-Ragu',
                                    'Setuju',
                                    'Sangat Setuju',
                                ]
                            @endphp
                            @foreach ($surveyValue as $index => $item)
                                <div class="flex items-center">
                                        <x-forms.form-radio name="question_3" id="question_3_{{ $index }}" value="{{ $i[$index] }}" />
                                        <span class="ml-2">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Saya berkontribusi sesuai keahlian saya saat melaksanakan magang
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            @php
                                $i = [
                                    'Sangat Tidak Setuju',
                                    'Tidak Setuju',
                                    'Netral/Ragu-Ragu',
                                    'Setuju',
                                    'Sangat Setuju',
                                ];
                            @endphp
                            @foreach ($surveyValue as $index => $item)
                                <div class="flex items-center">
                                        <x-forms.form-radio name="question_4" id="question_4_{{ $index }}" value="{{ $i[$index] }}" />
                                        <span class="ml-2">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="w-2/3 label">
                            <span class="text-lg font-semibold">
                                Komunikasi guru pendamping dan tim Humas sangat baik
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            @php
                                $i = [
                                    'Sangat Tidak Setuju',
                                    'Tidak Setuju',
                                    'Netral/Ragu-Ragu',
                                    'Setuju',
                                    'Sangat Setuju',
                                ];
                            @endphp
                            @foreach ($surveyValue as $index => $item)
                                <div class="flex items-center">
                                        <x-forms.form-radio name="question_5" id="question_5_{{ $index }}" value="{{ $i[$index] }}" />
                                        <span class="ml-2">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Tim Humas membimbing dan mengarahkan siswa/i magang dengan sangat baik
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                        @php
                            $i = [
                                'Sangat Tidak Setuju',
                                'Tidak Setuju',
                                'Netral/Ragu-Ragu',
                                'Setuju',
                                'Sangat Setuju',
                            ];
                        @endphp
                        @foreach ($surveyValue as $index => $item)
                            <div class="flex items-center">
                                    <x-forms.form-radio name="question_6" id="question_6_{{ $index }}" value="{{ $i[$index] }}" />
                                    <span class="ml-2">{{ $item }}</span>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="w-full form-control">
                        <label class="label">
                            <span class="text-lg font-semibold">
                                Saya mendapatkan banyak pengalaman baru selama magang di Polimedia
                            </span>
                        </label>
                        <div class="flex flex-col gap-4 lg:space-x-4 md:flex-row">
                            @php
                            $i = [
                                'Sangat Tidak Setuju',
                                'Tidak Setuju',
                                'Netral/Ragu-Ragu',
                                'Setuju',
                                'Sangat Setuju',
                            ];
                        @endphp
                            @foreach ($surveyValue as $index => $item)
                                <div class="flex items-center">
                                        <x-forms.form-radio name="question_7" id="question_7_{{ $index }}" value="{{ $i[$index] }}" />
                                        <span class="ml-2">{{ $item }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <x-button.button class="w-full md:w-72">
                        Submit
                    </x-button.button>
                </form>
            </div>
        </div>
    </div>
    <script>

    </script>
</x-layouts.app-layout>
