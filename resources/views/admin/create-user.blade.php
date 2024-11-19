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
                    <x-forms.form-input name="email" id="email" type="email" placeholder="Tuliskan email" oninput="appendEmail()"/>
                </div>
                <div class="w-full form-control">
                    <label class="label">
                        <span class="text-lg font-semibold">Password</span>
                    </label>
                    <div class="relative">
                        <input type="password" name="password" id="password" class="block w-full p-4 input input-bordered input-primary ps-2.5" placeholder="Tuliskan password" required>
                        <button onclick="togglePassword()" type="button" class="absolute inset-y-0 right-0 flex items-center pr-3">
                            <ion-icon name="eye-off-outline"></ion-icon>
                        </button>
                    </div>

                    {{-- <x-forms.form-input name="password" id="password" type="password" placeholder="Tuliskan password" /> --}}
                </div>
                <x-button.button class="w-full mt-4 md:w-72">Submit</x-button.button>
            </form>
        </div>
        <div class="p-4 pt-8 overflow-x-auto shadow bg-slate-50 rounded-2xl">
            <h1 class="text-4xl font-bold">Data User Admin</h1>
            <table class="table w-full mt-4 table-primary">
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
                                <form action="{{ route('dashboard.destroy', $user->id) }}" method="POST">
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
        {{ $data->links() }}
    </div>
@endsection
