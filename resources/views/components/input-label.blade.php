@props(['value'])

<label {{ $attributes->merge([
'class' => 'block font-semibold text-teal-700 mb-2 text-base'
]) }}>
    {{ $value ?? $slot }}
</label>