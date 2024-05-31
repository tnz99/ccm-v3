@props(['active', 'darkMode'])

@php
$classes = ($active ?? false)
            ? 'font-semibold uppercase text-xs bg-yellow-300 p-2 px-5'
            : 'hover:font-semibold uppercase text-xs  hover:bg-[#fcff5c] p-2 px-5';

$darkMode = ($darkMode?? false) ? ' text-white' : ' text-black';

$classes = $classes.$darkMode;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
