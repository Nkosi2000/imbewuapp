@props(['id', 'name', 'checked' => false, 'label' => null])

<div class="flex items-center mb-4">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500']) }}
    >
    
    @if($label)
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-700">
            {{ $label }}
        </label>
    @endif
</div>