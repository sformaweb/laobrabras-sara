@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-red-800 text-sm font-medium leading-5 uppercase text-yellow-400 focus:outline-none focus:border-orange-300 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 uppercase text-yellow-100 hover:text-yellow-400 hover:border-red-600 focus:outline-none focus:text-cyan-100 focus:border-orange-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
