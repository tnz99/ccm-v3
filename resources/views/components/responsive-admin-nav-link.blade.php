@props(['active'])

@php
$classes = ($active ?? false)
            ? 'bg-green-900 w-full p-2 text-white text-sm p-2'
            : 'hover:bg-green-900 w-full p-2 text-white text-sm p-2';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
