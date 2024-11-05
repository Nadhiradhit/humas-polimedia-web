@section( 'title', 'Humas Polimedia Login' )


<x-layouts.auth-layout>
    <div class="flex flex-col items-center justify-center p-8 mx-auto border-2 rounded-lg shadow-lg w-96 bg-base-100 border-accent">
        <img src="../assets/images/polimedia-logo.png" alt="polimedia-logo" class="w-12 pb-4">
        <h1 class="text-4xl font-bold ">Login Humas</h1>
        <div class="w-full pt-4">
            <form action="">
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
                <div class="form-control">
                    <x-button.button type="submit">Login</x-button.button>
                </div>
            </form>
        </div>
    </div>

</x-layouts.auth-layout>
