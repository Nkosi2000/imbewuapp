@props([
    'title',
    'subtitle' => null,
    'primaryButtonText' => 'Get Started',
    'primaryButtonUrl' => '#',
    'secondaryText' => null,
    'secondaryLinkText' => null,
    'secondaryLinkUrl' => '#',
])

<div class="relative overflow-hidden rounded-3xl bg-gradient-to-br from-gray-900 via-green-950/80 to-gray-900 p-10 md:p-16 shadow-2xl">
    <div class="absolute -right-20 -top-20 h-64 w-64 rounded-full bg-green-500/10 blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 h-64 w-64 rounded-full bg-emerald-500/10 blur-3xl"></div>
    <div class="relative text-center">
        <h2 class="text-3xl md:text-5xl font-bold text-white">{{ $title }}</h2>
        @if($subtitle)
            <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">{{ $subtitle }}</p>
        @endif
        <div class="mt-8">
            <a href="{{ $primaryButtonUrl }}"
               class="inline-flex items-center justify-center rounded-full bg-gradient-to-r from-green-500 to-emerald-500 px-8 py-4 text-lg font-semibold text-white shadow-xl shadow-green-600/30 transition-all hover:shadow-green-500/40 hover:scale-105">
                {{ $primaryButtonText }}
                <svg class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
            @if($secondaryText && $secondaryLinkText)
                <p class="mt-6 text-gray-400">
                    {{ $secondaryText }}
                    <a href="{{ $secondaryLinkUrl }}" class="font-medium text-green-400 underline underline-offset-4 hover:text-green-300">
                        {{ $secondaryLinkText }}
                    </a>
                </p>
            @endif
        </div>
    </div>
</div>