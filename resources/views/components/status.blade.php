@props(['type'])

@php
    $classes = match ((int)$type) {
        1 => 'text-blue-600',
        2 => 'text-green-600',
        3 => 'text-red-600',
        default => 'text-gray-600',
    };
@endphp

<span {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</span>