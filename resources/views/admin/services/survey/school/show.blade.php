@section('title', 'Dashboard Admin')

@extends('components.layouts.details-layout-admin')

@section('content')
<div class="flex flex-col w-full mb-8 border-2 bg-slate-50 rounded-2xl border-primary">
    <div class="w-full rounded-2xl">
        <img src="/assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
    </div>
    <div class="px-8 py-4 text-slate-950">
        <h3 class="text-2xl font-bold">Hasil Survey Kepuasan Sekolah</h3>
        <div class="divider"></div>
        <div>
            <h4 class="text-xl font-bold">Informasi Magang</h4>
            <p class="text-lg font-semibold">Nama Sekolah : {{ $data->school_name }}</p>
            <p class="text-lg font-semibold">Waktu Kunjungan Sekolah : {{ \Carbon\Carbon::parse($data->date_visit)->format('l, F jS Y ') }}</p>
            <div class="w-full form-control">
                @php
                    $questions = [
                        'Saya merasa senang dengan kegiatan kunjungan ini' => 'question_1',
                        'Kunjungan ini sangat bermanfaat bagi para siswa/i yang sedang mencari referensi kampus' => 'question_2',
                        'Saya mendapatkan informasi tentang program studi yang ada di Polimedia' => 'question_3',
                        'Narasumber menjelaskan materi dengan sangat jelas dan detail' => 'question_4',
                        'Kunjungan ke beberapa tempat di Polimedia seperti kunjungan ke Perpustakaan, Laboratorium, Laboritarium Cetak, dsb membuat saya lebih memahami konsep industri kreatif' => 'question_5',
                        'Panitia penerimaan sangat ramah dan melayani dengan baik' => 'question_6',
                        'Durasi kunjungan sangat cukup untuk mendapatkan informasi baru tentang Polimedia' => 'question_7',
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

                                <input type="radio" class="radio radio-accent" name="{{ $questionName }}" value="{{ $option }}"
                                    disabled {{ $data->$questionName == $option ? 'checked' : '' }} />
                                <span class="ml-2">{{ $option }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="pt-4">
            <x-button.button class="w-full md:w-72">
                <a href="{{ route('admin.services.survey.school.index') }}" class="text-slate-50">
                    Kembali
                </a>
            </x-button.button>
        </div>
    </div>
</div>
@endsection
