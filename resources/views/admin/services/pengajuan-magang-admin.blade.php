@section('title', 'Dashboard Admin')

@extends('components.layouts.admin-layout')

@section('content')
<div class="w-full h-full p-8 border-2 shadow-md border-secondary rounded-xl bg-slate-50">
    <h1 class="text-4xl font-bold">Data Pengajuan Magang</h1>
    {{-- <p>Total Data : {{ $data->count() }}</p> --}}
    <div class="flex py-4 lg:justify-end">
        <form action="/dashboard/pengajuan-magang" method="GET">
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
                <th>School</th>
                <th>Total Students</th>
                <th>Student</th>
                <th>Major</th>
                <th>Student Class</th>
                <th>Teacher</th>
                <th>Submit Date</th>
                <th>Contact Person</th>
                <th>Letter</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($intern as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name_school  }}</td>
                        <td>{{ $item->total_student . ' Siswa' }}</td>
                        <td>
                            <ul>
                                @foreach ($item->name_student as $student_name )
                                    <li>
                                        {{ $student_name }}
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $item->majority_school }}</td>
                        <td>{{ $item->student_class }}</td>
                        <td>{{ $item->accompaying_teacher }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->submision_date)->format('l, F jS Y ') }}</td>
                        <td>{{ $item->contact_person }}</td>
                        <td>
                            <a href="{{ asset('storage/letter/intern/' . $item->letter_intership) }}" target="_blank" >
                                {{ $item->letter_intership}}
                            </a>
                        </td>
                        <td>
                            <form action="{{ '/dashboard/pengajuan-magang/' . $item->id }}" method="POST" onsubmit="return confirm('Apakah data ingin dihapus ?')">
                                @csrf
                                @method('DELETE')
                                <x-button.button class="btn-sm btn-error" type="submit">
                                    Delete
                                </x-button.button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
    {{ $intern->appends(['search' => $search])->links() }}
</div>
@endsection


