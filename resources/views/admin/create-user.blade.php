@section('title', 'Dashboard Admin')

@extends('components.layouts.admin-layout')

@section('content')
    <div class="w-full h-full space-y-8">
        <div class="p-4 shadow bg-slate-50 rounded-2xl h-[30rem] flex flex-col justify-center">
            <h1 class="text-4xl font-bold">Create User Admin</h1>
            <form action="/dashboard" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="w-full form-control">
                    <label class="label">
                        <span class="text-lg font-semibold">Nama</span>
                    </label>
                    <x-forms.form-input name="name" id="name" type="text" placeholder="Tuliskan nama" />
                </div>
                <div class="w-full form-control">
                    <label class="label">
                        <span class="text-lg font-semibold">Email</span>
                    </label>
                    <x-forms.form-input name="email" id="email" type="email" placeholder="Tuliskan email" />
                </div>
                <div class="w-full form-control">
                    <label class="label">
                        <span class="text-lg font-semibold">Password</span>
                    </label>
                    <x-forms.form-input name="password" id="password" type="password" placeholder="Tuliskan password" />
                </div>
                <x-button.button class="w-full mt-4 md:w-72">Submit</x-button.button>
            </form>
        </div>
        <div class="p-4 pt-8 overflow-x-auto shadow bg-slate-50 rounded-2xl">
            <table class="table w-full table-primary">
                <thead>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($data as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <form action="/dashboard/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-button.button type="submit" class="btn btn-error">Delete</x-button.button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
