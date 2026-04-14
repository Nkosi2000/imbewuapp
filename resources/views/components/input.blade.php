@props([
    'id' => null,
    'name',
    'type' => 'text',
    'value' => '',
    'label' => null,
    'error' => null
])

@php
    $id = $id ?? $name . '_' . Str::random(4);
@endphp

<div class="mb-4">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-300 mb-1">
            {{ $label }}
        </label>
    @endif

    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'w-full rounded-md bg-gray-800 border-gray-700 text-white placeholder-gray-500 shadow-sm focus:border-green-500 focus:ring-green-500']) }}
    >

    @if($error)
        <p class="mt-1 text-sm text-red-400">{{ $error }}</p>
    @endif
</div>