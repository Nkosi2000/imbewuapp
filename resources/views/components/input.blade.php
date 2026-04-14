@props(['id', 'name', 'type' => 'text', 'value' => '', 'label' => null, 'error' => null])

<div class="mb-4">
    @if($label)
        <label for="{{ $id }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif
    
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500']) }}
    >
    
    @if($error)
        <p class="mt-1 text-sm text-red-600">{{ $error }}</p>
    @endif
</div>