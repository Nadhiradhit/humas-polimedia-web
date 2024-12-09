@section('title', 'Dashboard Admin')

@extends('components.layouts.details-layout-admin')

@section('content')
<div class="flex flex-col w-full mb-8 border-2 bg-slate-50 rounded-2xl border-primary">
    <div class="w-full rounded-2xl">
        <img src="/assets/images/campus-polimedia.jpg" alt="kampus-polimedia-img" class="w-full rounded-t-2xl h-[20rem] lg:h-[30rem] ">
    </div>
    <div class="px-8 py-4 text-slate-950">
        <h3 class="text-2xl font-bold">Hasil Survey Kepuasan Tamu</h3>
        <div class="divider"></div>
        <div>
            <h4 class="text-xl font-bold">Informasi Tamu</h4>
            <p class="text-lg font-semibold">Nama Tamu : {{ $data->guest_name }}</p>
            <p class="text-lg font-semibold">Keperluan Informasi : {{ $data->information_purpose }}</p>
            <div class="w-full form-control">
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

                                <input type="radio" class="radio radio-marked" name="{{ $questionName }}" value="{{ $option }}"
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
                <a href="{{ route('admin.services.survey.guest.index') }}" class="text-slate-50">
                    Kembali
                </a>
            </x-button.button>
        </div>
    </div>
</div>
@endsection
