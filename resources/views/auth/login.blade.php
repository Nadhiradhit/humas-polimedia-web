@section( 'title', 'Humas Polimedia Login' )


<x-layouts.auth-layout>
    <div class="flex flex-col items-center justify-center p-8 mx-auto border-2 rounded-lg shadow-lg w-96 bg-base-100 border-primary">
        <img src="../assets/images/polimedia-logo.png" alt="polimedia-logo" class="w-12 pb-4">
        <h1 class="text-4xl font-bold ">Login Humas</h1>
        <div class="w-full pt-4">
            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <div class="form-control">
                    <label for="email" class="label">
                        <span class="label-text">Email</span>
                    </label>
                    <x-forms.form-input name="email" id="email" type="email" placeholder="Masukkan email" required/>
                </div>
                <div class="py-4 form-control">
                    <label for="password" class="label">
                        <span class="label-text">Password</span>
                    </label>
                    <x-forms.form-input name="password" id="password" type="password" placeholder="Masukkan password" required/>
                </div>
                {{-- <div class="form-control">
                    <span class="flex gap-2 space-x-4 text-sm">Belum punya akun?<a href="/register" class="link link-hover link-primary">Register Account</a></span>
                </div> --}}
                <div class="form-control">
                    <x-button.button type="submit">Login</x-button.button>
                </div>
            </form>
            <div class="flex justify-end">
                <a href="{{ route('landing.index')}}" class="link link-hover link-primary">
                    Kembali Ke Beranda
                </a>
            </div>
        </div>
    </div>

</x-layouts.auth-layout>
