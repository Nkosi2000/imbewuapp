@props(['icon' => '📈', 'title', 'description'])

<div class="group relative rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 shadow-xl transition-all duration-300 hover:border-green-500/50 hover:shadow-green-500/10 hover:-translate-y-2">
    <div class="absolute inset-0 rounded-3xl bg-gradient-to-br from-green-500/5 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
    <div class="relative">
        <div class="mb-6 inline-flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-green-600 to-emerald-600 text-3xl shadow-lg shadow-green-600/20">
            {{ $icon }}
        </div>
        <h3 class="mb-3 text-2xl font-bold text-white">{{ $title }}</h3>
        <p class="text-gray-400 leading-relaxed">{{ $description }}</p>
    </div>
</div>