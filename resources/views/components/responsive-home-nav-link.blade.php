@props(['active', 'darkMode'])

@php
$classes = ($active ?? false)
            ? 'font-semibold uppercase text-xs bg-yellow-300 p-2 px-5 xl:flex xl:items-center xl:justify-center'
            : 'hover:font-semibold uppercase text-xs  hover:bg-yellow-300 p-2 px-5 xl:flex xl:items-center xl:justify-center';

$darkMode = ($darkMode?? false) ? ' text-white' : ' text-black';

$classes = $classes.$darkMode;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
