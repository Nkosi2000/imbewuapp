@props(['title', 'subtitle' => null])

<div class="text-center mb-14">
    <h2 class="text-3xl md:text-5xl font-bold">
        <span class="bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent">{{ $title }}</span>
    </h2>
    @if($subtitle)
        <p class="mt-4 text-lg text-gray-400 max-w-3xl mx-auto">{{ $subtitle }}</p>
    @endif
</div>