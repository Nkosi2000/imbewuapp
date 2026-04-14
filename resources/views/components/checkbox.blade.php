{{-- resources/views/components/checkbox.blade.php --}}
@props(['id', 'name', 'checked' => false])

<div class="flex items-center">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        {{ $checked ? 'checked' : '' }}
        {{ $attributes->merge(['class' => 'h-4 w-4 rounded bg-gray-800 border-gray-600 text-green-600 focus:ring-green-500 focus:ring-offset-gray-900']) }}
    >
    @if($slot->isNotEmpty())
        <label for="{{ $id }}" class="ml-2 block text-sm text-gray-300">
            {{ $slot }}
        </label>
    @endif
</div>