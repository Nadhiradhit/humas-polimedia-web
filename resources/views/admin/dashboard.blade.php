@extends('components.layouts.admin-layout')

@section('title', 'Dashboard Admin')

@section('content')
    <div class="flex flex-col w-full">
        <div class="w-full p-4 rounded-xl bg-primary border-[3px] border-slate-950">
            <h2 class="text-3xl font-bold">Dashboard Admin</h2>
            <p class="text-lg">Welcome, {{ Auth::user()->name }}</p>
        </div>
        <div class="mt-7">
            <h3 class="text-xl font-bold">Stats Layanan</h3>
            <div class="flex flex-col gap-4 mt-4 lg:flex-row">
                <div class="w-full gap-4 py-4 shadow h-96 bg-slate-50 rounded-xl">
                    <div class="p-4">
                        @foreach ($school_visit as $item)
                        <div>
                            <p class="text-2xl font-bold">{{ $item->count() }}</p>
                        </div>
                        <h6 class="pt-6 font-semibold text-md">Data Layanan Kunjungan Sekolah</h6>
                        <div class="pt-4 overflow-x-auto">
                            <table class="table w-full table-primary">
                                <thead>
                                    <th>School Name</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $item-> school_name}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="w-full gap-4 py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-4">
                        @foreach ($school_intern as $item)
                        <div>
                            <p class="text-2xl font-bold">{{ $item->count() }}</p>
                        </div>
                        <h6 class="pt-6 font-semibold text-md">Data Layanan Magang Sekolah</h6>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-7">
            <h3 class="text-xl font-bold">Stats Survey</h3>
            <div class="flex flex-col gap-4 mt-4 lg:flex-row">
                <div class="w-full gap-4 py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-4">
                        @foreach ($survey_school as $item)
                        <div>
                            <p class="text-2xl font-semibold">{{ $item->count() }}</p>
                        </div>
                        <h6 class="pt-6 font-semibold text-md">Data Survey Kunjungan Sekolah</h6>
                        @endforeach
                    </div>
                </div>
                <div class="w-full gap-4 py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-4">
                        @foreach ($survey_guest as $item)
                        <div>
                            <p class="text-2xl font-semibold">{{ $item->count() }}</p>
                        </div>
                        <h6 class="pt-6 font-semibold text-md">Data Survey Kunjungan Tamu</h6>
                        @endforeach
                    </div>
                </div>
                <div class="w-full gap-4 py-4 shadow bg-slate-50 rounded-xl">
                    <div class="p-4">
                        @foreach ($survey_intern as $item)
                        <div>
                            <p class="text-2xl font-semibold">{{ $item->count() }}</p>
                        </div>
                        <h6 class="pt-6 font-semibold text-md">Data Survey Kunjungan Magang</h6>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
