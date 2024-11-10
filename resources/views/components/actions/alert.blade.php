@if($errors->any())
    <div id="notificationToast" class="z-20 toast toast-end toast-top">
        @foreach ($errors->all() as  $error)
            <div class="text-white alert alert-error">
                <span>
                    {{ $error }}
                </span>
            </div>
        @endforeach
    </div>
@endif

@if (Session::get('success'))
    <div id="notificationToast" class="z-20 toast toast-end toast-top">
        <div class="text-white bg-green-500 alert">
            <span>
                {{ Session::get('success') }}
            </span>
        </div>
    </div>
@endif
