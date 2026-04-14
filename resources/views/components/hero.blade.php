@props([
    'title',
    'highlight' => null,
    'subtitle',
    'primaryButtonText' => 'Start Learning Today',
    'primaryButtonUrl' => '#',
    'secondaryButtonText' => null,
    'secondaryButtonUrl' => '#',
    'backgroundImage' => 'https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80',
])

<div class="relative overflow-hidden bg-gray-900 py-24 md:py-32">
    {{-- Animated gradient mesh --}}
    <div class="absolute inset-0 bg-gradient-to-br from-green-900/30 via-gray-900 to-emerald-900/20"></div>
    <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-overlay" style="background-image: url('{{ $backgroundImage }}')"></div>
    <div class="absolute -top-40 -right-40 h-80 w-80 rounded-full bg-green-500/20 blur-3xl"></div>
    <div class="absolute -bottom-40 -left-40 h-96 w-96 rounded-full bg-emerald-500/10 blur-3xl"></div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mx-auto max-w-4xl">
            <h1 class="text-4xl md:text-7xl font-extrabold leading-tight">
                <span class="bg-gradient-to-r from-white via-gray-200 to-gray-400 bg-clip-text text-transparent">
                    {!! $title !!}
                </span>
                @if($highlight)
                    <br>
                    <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
                        {{ $highlight }}
                    </span>
                @endif
            </h1>
            <p class="mt-6 text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                {{ $subtitle }}
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ $primaryButtonUrl }}"
                   class="group relative inline-flex items-center justify-center overflow-hidden rounded-full bg-gradient-to-r from-green-600 to-emerald-600 px-8 py-3 text-lg font-semibold text-white shadow-lg shadow-green-600/30 transition-all hover:shadow-green-600/50 hover:scale-105">
                    <span class="absolute inset-0 bg-white/20 translate-y-full rounded-full transition-transform duration-300 group-hover:translate-y-0"></span>
                    <span class="relative">{{ $primaryButtonText }}</span>
                </a>
                @if($secondaryButtonText)
                    <a href="{{ $secondaryButtonUrl }}"
                       class="rounded-full border border-gray-600 bg-gray-800/50 backdrop-blur-sm px-8 py-3 text-lg font-semibold text-gray-200 transition-all hover:border-green-500 hover:text-green-400 hover:bg-gray-800">
                        {{ $secondaryButtonText }}
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>