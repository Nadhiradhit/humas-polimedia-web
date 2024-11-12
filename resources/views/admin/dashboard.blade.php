@extends('components.layouts.admin-layout')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="flex flex-col w-full">
        <div class="lg:w-[40rem] p-4 rounded-xl bg-primary">
            <h1 class="text-4xl font-bold">
                Halo, <span class="font-light"> {{Auth::user()->name}} </span>
            </h1>
        </div>
        <div class="py-4">
            <h2 class="py-4 text-4xl font-semibold">Total Data Survey Kepuasan</h2>
            <div class="flex items-center gap-4">
                <div class="w-full py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-2">
                        @foreach ($survey_guest as $item)
                            <h3 class="text-2xl font-bold">Total Data Survey Kepuasan Tamu</h3>
                            <p class="text-4xl font-bold">{{ $item->count() }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="w-full py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-2">
                        @foreach ($survey_intern as $item)
                            <h3 class="text-2xl font-bold">Total Data Survey Kepuasan Intern</h3>
                            <p class="text-4xl font-bold">{{ $item->count() }}</p>
                        @endforeach
                    </div>
                </div>
                <div class="w-full py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-2">
                        @foreach ($survey_intern as $item)
                            <h3 class="text-2xl font-bold">Total Data Survey Kepuasan Sekolah</h3>
                            <p class="text-4xl font-bold">{{ $item->count() }}<span class="text-lg font-light">Data</span></p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
