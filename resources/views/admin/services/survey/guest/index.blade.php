@section('title', 'Dashboard Admin')

@extends('components.layouts.admin-layout')

@section('content')
<div class="w-full h-screen p-8 border-2 shadow-md border-secondary rounded-xl bg-slate-50">
    <h1 class="text-4xl font-bold">Data Survey Kepuasan Tamu</h1>
    {{-- <p>Total Data : {{ $data->count() }}</p> --}}
    <div class="pt-8 overflow-x-auto">
        <table class="table w-full table-primary">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th>Information</th>
                <th>Question 1</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->guest_name  }}</td>
                        <td>{{ $item->information_purpose }}</td>
                        <td>{{ $item->clarity_info}}</td>
                        <td>
                            <div class="flex gap-2">
                                <x-button.button class="btn-sm btn-info">
                                    <a href="{{  url('/dashboard/survey-kepuasan-tamu/show/'. $item->slug )}}">
                                        Detail
                                    </a>
                                </x-button.button>
                                <form action="{{ '/dashboard/survey-kepuasan-tamu/' . $item->id }}" method="POST" onsubmit="return confirm('Apakah data ingin dihapus ?')">
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
</div>
@endsection
