@props(['active', 'darkMode'])

@php
$classes = ($active ?? false)
            ? 'font-semibold uppercase text-xs bg-[#FCFF5C] text-black p-2 px-5 xl:flex xl:items-center xl:justify-center'
            : 'hover:font-semibold uppercase text-xs  hover:bg-[#FCFF5C] hover:text-black  p-2 px-5 xl:flex xl:items-center xl:justify-center';

$darkMode = ($darkMode?? false) ? ' text-white' : ' text-black';

$classes = $classes.$darkMode;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
