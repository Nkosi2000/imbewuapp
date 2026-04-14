@props([
    'imageUrl',
    'imageAlt' => '',
    'title',
    'description',
    'checklist' => [],
    'reverse' => false,
])

<div class="flex flex-col {{ $reverse ? 'lg:flex-row-reverse' : 'lg:flex-row' }} items-center gap-12 lg:gap-20">
    <div class="lg:w-1/2">
        <div class="relative">
            <div class="absolute -inset-4 rounded-3xl bg-gradient-to-br from-green-600/20 to-emerald-600/10 blur-2xl"></div>
            <img src="{{ $imageUrl }}" alt="{{ $imageAlt }}" class="relative w-full rounded-3xl object-cover shadow-2xl ring-1 ring-gray-700/50">
        </div>
    </div>
    <div class="lg:w-1/2">
        <h2 class="text-3xl md:text-4xl font-bold text-white">{{ $title }}</h2>
        <p class="mt-6 text-lg text-gray-300 leading-relaxed">{{ $description }}</p>
        @if(!empty($checklist))
            <ul class="mt-8 space-y-4">
                @foreach($checklist as $item)
                    <li class="flex items-start gap-3">
                        <span class="mt-1 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-green-600/20 text-green-400">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                            </svg>
                        </span>
                        <span class="text-gray-300">{{ $item }}</span>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>