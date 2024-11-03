<button {{ $attributes->merge(['class' => 'btn btn-accent text-slate-50 text-lg font-semibold  my-6 w-full md:w-80', 'type' => 'submit'])}}>
    {{ $slot }}
</button>
