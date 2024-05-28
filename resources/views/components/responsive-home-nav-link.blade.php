@props(['active', 'darkMode'])

@php
$classes = ($active ?? false)
            ? 'font-extrabold uppercase text-sm  bg-yellow-300 p-2 px-5'
            : 'font-extrabold uppercase text-sm  hover:bg-yellow-300 p-2 px-5';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
