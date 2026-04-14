{{-- resources/views/about.blade.php --}}
@extends('layouts.app')

@section('title', 'About Imbewu')

@section('content')
<div class="py-12 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">About {{ config('app.name') }}</span>
            </h1>
            <p class="mt-4 text-xl text-gray-400 max-w-2xl mx-auto">
                We are dedicated to empowering emerging farmers through accessible, role‑based agricultural education.
            </p>
        </div>

        {{-- Mission Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl mb-8">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="relative">
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-10 w-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg shadow-green-600/30">
                        <span class="text-white text-xl">🎯</span>
                    </div>
                    <h2 class="text-3xl font-bold text-white">Our Mission</h2>
                </div>
                <p class="text-gray-300 text-lg leading-relaxed">
                    To deliver high-quality, user-friendly agricultural education that solves real-world farming challenges and drives sustainable growth for small‑scale farmers across Africa.
                </p>
            </div>
        </div>

        {{-- Vision & Values Grid --}}
        <div class="grid md:grid-cols-2 gap-8">
            {{-- Vision --}}
            <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 shadow-xl">
                <div class="absolute -bottom-10 -left-10 h-32 w-32 rounded-full bg-emerald-500/10 blur-2xl"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg shadow-green-600/30">
                            <span class="text-white text-xl">👁️</span>
                        </div>
                        <h2 class="text-3xl font-bold text-white">Our Vision</h2>
                    </div>
                    <p class="text-gray-300 text-lg leading-relaxed">
                        To become the most trusted agricultural learning platform in Africa, fostering a community of continuous learning, innovation, and food security.
                    </p>
                </div>
            </div>

            {{-- Values --}}
            <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 shadow-xl">
                <div class="absolute -top-10 -right-10 h-32 w-32 rounded-full bg-green-500/10 blur-2xl"></div>
                <div class="relative">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-10 w-10 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg shadow-green-600/30">
                            <span class="text-white text-xl">💎</span>
                        </div>
                        <h2 class="text-3xl font-bold text-white">Our Values</h2>
                    </div>
                    <ul class="space-y-3 text-gray-300 text-lg">
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-green-400">✓</span>
                            <span><strong class="text-white">Integrity</strong> – transparency in everything we do</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-green-400">✓</span>
                            <span><strong class="text-white">Farmer‑First</strong> – designed with and for farmers</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-green-400">✓</span>
                            <span><strong class="text-white">Excellence</strong> – commitment to high‑quality content</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="mt-1 text-green-400">✓</span>
                            <span><strong class="text-white">Collaboration</strong> – building together with partners</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection