@props([
    'name',
    'id' => null,
    'options' => [ ],
    'selected' => null,
    'placeholder',
])
<select
        name="{{ $name }}"
        id="{{ $id ?? $name }}"
        {{ $attributes->merge(['class' => 'select select-primary w-full max-w-xs']) }}
    >

        @if($placeholder)
            <option value="" disabled {{ $selected === null ? 'selected' : '' }}>
                {{ $placeholder }}
            </option>
        @endif
        @foreach($options as $value => $label)
            <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
</select>
