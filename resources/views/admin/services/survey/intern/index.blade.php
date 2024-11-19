@section('title', 'Dashboard Admin')

@extends('components.layouts.admin-layout')

@section('content')
<div class="w-full h-full p-8 border-2 shadow-md border-secondary rounded-xl bg-slate-50">
    <h1 class="text-4xl font-bold">Data Survey Kepuasan Magang</h1>
    {{-- <p>Total Data : {{ $data->count() }}</p> --}}
    <div class="flex py-4 lg:justify-end">
        <form action="/dashboard/survey-kepuasan-magang" method="GET">
            <div class="relative">
                <input type="search" name="search" id="search" placeholder="Search" value="{{ $search }}" class="block w-72 lg:w-96 p-4 input input-bordered input-primary ps-2.5">
                <button type="submit" class="absolute end-2.5 bottom-2 bg-accent text-white px-4 py-1 rounded-md">Search</button>
            </div>
        </form>
    </div>
    <div class="pt-8 overflow-x-auto">
        <table class="table w-full table-primary">
            <thead>
                <th>No</th>
                <th>School Name</th>
                <th>Intern Time</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($intern as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->school_name  }}</td>
                        <td>{{ $item->intern_time }}</td>
                        <td>
                            <div class="flex gap-2">
                                <x-button.button class="btn-sm btn-info">
                                    <a href="{{  url('/dashboard/survey-kepuasan-magang/show/'. $item->slug )}}">
                                        Detail
                                    </a>
                                </x-button.button>
                                <form action="{{ '/dashboard/survey-kepuasan-magang/' . $item->id }}" method="POST" onsubmit="return confirm('Apakah data ingin dihapus ?')">
                                    @csrf
                                    @method('DELETE')
                                    <x-button.button class="btn-sm btn-error" type="submit">
                                        Delete
                                    </x-button.button>
                                </form>
                            </div>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $intern->appends(['search' => $search])->links() }}
</div>
@endsection
