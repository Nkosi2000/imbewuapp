@props(['type' => 'button', 'variant' => 'primary', 'fullWidth' => false])

@php
    $baseClasses = 'inline-flex items-center justify-center px-4 py-2 rounded-md font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900';

    $variants = [
        'primary' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-500 shadow-md shadow-green-600/20',
        'secondary' => 'bg-gray-700 text-gray-200 hover:bg-gray-600 focus:ring-gray-500',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500 shadow-md shadow-red-600/20',
        'outline' => 'border border-green-600 text-green-400 hover:bg-green-600/10 focus:ring-green-500',
    ];

    $widthClass = $fullWidth ? 'w-full' : '';
@endphp

<button
    type="{{ $type }}"
    {{ $attributes->merge(['class' => "{$baseClasses} {$variants[$variant]} {$widthClass}"]) }}
>
    {{ $slot }}
</button>
