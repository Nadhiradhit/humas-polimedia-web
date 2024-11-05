<button {{ $attributes->merge(['class' => 'btn btn-primary text-slate-50 text-lg font-semibold my-6', 'type' => 'submit'])}}>
    {{ $slot }}
</button>
