{{-- resources/views/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="py-12 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-5xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Get in Touch</span>
            </h1>
            <p class="mt-4 text-xl text-gray-400 max-w-2xl mx-auto">
                Have questions or feedback? We'd love to hear from you. Our team typically responds within 24 hours.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            {{-- Contact Info Cards --}}
            <div class="space-y-6">
                <div class="relative overflow-hidden rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6">
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Email</p>
                            <a href="mailto:support@imbewuapp.com" class="text-lg text-white hover:text-green-400 transition-colors">support@imbewuapp.com</a>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6">
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Phone</p>
                            <p class="text-lg text-white">+27 (0) 11 123 4567</p>
                            <p class="text-sm text-gray-400">Mon‑Fri, 9am‑5pm SAST</p>
                        </div>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6">
                    <div class="flex items-center gap-4">
                        <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg">
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-400">Office</p>
                            <p class="text-white">123 Innovation Drive<br>Sandton, Johannesburg<br>South Africa</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="lg:col-span-2">
                <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
                    <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
                    <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

                    <div class="relative">
                        <h2 class="text-2xl font-bold text-white mb-6">Send us a message</h2>

                        @if(session('success'))
                            <x-alert type="success">{{ session('success') }}</x-alert>
                        @endif

                        <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
                            @csrf

                            <div class="grid sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Name *</label>
                                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                                           class="w-full rounded-lg bg-gray-900/50 border-gray-700 text-white placeholder-gray-500 focus:border-green-500 focus:ring-green-500 @error('name') border-red-500 @enderror" required>
                                    @error('name')<p class="mt-1 text-sm text-red-400">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Email *</label>
                                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                                           class="w-full rounded-lg bg-gray-900/50 border-gray-700 text-white placeholder-gray-500 focus:border-green-500 focus:ring-green-500 @error('email') border-red-500 @enderror" required>
                                    @error('email')<p class="mt-1 text-sm text-red-400">{{ $message }}</p>@enderror
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Message *</label>
                                <textarea id="message" name="message" rows="5"
                                          class="w-full rounded-lg bg-gray-900/50 border-gray-700 text-white placeholder-gray-500 focus:border-green-500 focus:ring-green-500 @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
                                @error('message')<p class="mt-1 text-sm text-red-400">{{ $message }}</p>@enderror
                            </div>

                            <div class="pt-2">
                                <x-button type="submit" variant="primary" fullWidth>
                                    Send Message
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection