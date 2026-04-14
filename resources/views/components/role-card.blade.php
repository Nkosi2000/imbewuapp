@props(['title', 'description', 'color' => 'green'])

@php
    $gradient = match($color) {
        'green' => 'from-green-600 to-emerald-600',
        default => 'from-green-600 to-emerald-600',
    };
@endphp

<div class="group relative overflow-hidden rounded-3xl bg-gray-800/40 backdrop-blur-sm border border-gray-700 p-8 shadow-xl transition-all duration-300 hover:border-green-500/30 hover:shadow-2xl">
    <div class="absolute -right-10 -top-10 h-20 w-20 rounded-full bg-gradient-to-br {{ $gradient }} opacity-0 blur-xl transition-opacity duration-500 group-hover:opacity-30"></div>
    <div class="relative">
        <h3 class="mb-4 text-3xl font-bold bg-gradient-to-r {{ $gradient }} bg-clip-text text-transparent">{{ $title }}</h3>
        <p class="text-gray-300 leading-relaxed">{{ $description }}</p>
        <div class="mt-6 flex">
            <span class="inline-flex items-center text-sm font-medium text-green-400 group-hover:text-green-300 transition-colors">
                Learn more
                <svg class="ml-1 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </span>
        </div>
    </div>
</div>