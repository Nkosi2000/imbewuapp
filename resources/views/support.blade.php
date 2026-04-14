{{-- resources/views/support.blade.php --}}
@extends('layouts.app')

@section('title', 'Support Center')

@push('styles')
<style>
    .faq-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-out;
    }
    .faq-content.active {
        max-height: 200px;
    }
</style>
@endpush

@section('content')
<div class="py-12 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Support Center</span>
            </h1>
            <p class="mt-4 text-xl text-gray-400 max-w-2xl mx-auto">
                How can we help you today? Find answers or reach out to our team.
            </p>
        </div>

        {{-- Support Options Cards --}}
        <div class="grid md:grid-cols-2 gap-6 mb-12">
            <div class="relative overflow-hidden rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg">
                        <span class="text-white text-2xl">📧</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Email Support</h3>
                        <p class="text-sm text-gray-400 mb-2">We reply within 24 hours</p>
                        <a href="mailto:support@imbewuapp.com" class="text-green-400 hover:text-green-300 transition-colors">support@imbewuapp.com</a>
                    </div>
                </div>
            </div>

            <div class="relative overflow-hidden rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-6">
                <div class="flex items-center gap-4">
                    <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center shadow-lg">
                        <span class="text-white text-2xl">📞</span>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-white">Phone Support</h3>
                        <p class="text-sm text-gray-400">Mon‑Fri, 9am‑5pm SAST</p>
                        <p class="text-white text-lg font-medium">+27 (0) 11 123 4567</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- FAQ Section --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="relative">
                <h2 class="text-2xl font-bold text-white mb-6">Frequently Asked Questions</h2>

                <div class="space-y-3" x-data="{ active: 0 }">
                    @php
                        $faqs = [
                            ['q' => 'How do I reset my password?', 'a' => 'Click "Forgot Password" on the login page and follow the instructions sent to your email.'],
                            ['q' => 'How do I update my profile information?', 'a' => 'Log in to your account and navigate to Profile Settings from the dashboard dropdown menu.'],
                            ['q' => 'Is my data secure?', 'a' => 'Yes, we use industry‑standard encryption and security practices. Please read our Privacy Policy for more details.'],
                            ['q' => 'Can I access courses offline?', 'a' => 'Yes! Imbewu caches lessons locally. You can read guides and watch videos without an internet connection.'],
                            ['q' => 'How do I contact my program coordinator?', 'a' => 'Your coordinator\'s contact details are available on your dashboard. You can also use the in‑app messaging feature.'],
                        ];
                    @endphp

                    @foreach($faqs as $index => $faq)
                        <div class="border border-gray-700 rounded-xl overflow-hidden">
                            <button @click="active = active === {{ $index }} ? null : {{ $index }}"
                                    class="w-full px-6 py-4 text-left flex justify-between items-center bg-gray-800/50 hover:bg-gray-700/50 transition-colors">
                                <span class="font-medium text-white">{{ $faq['q'] }}</span>
                                <svg class="h-5 w-5 text-gray-400 transition-transform" :class="{ 'rotate-180': active === {{ $index }} }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="active === {{ $index }}"
                                 x-collapse
                                 class="px-6 py-4 bg-gray-900/30 border-t border-gray-700">
                                <p class="text-gray-300">{{ $faq['a'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-8 pt-6 border-t border-gray-700 text-center">
                    <p class="text-gray-400">Still need help?</p>
                    <a href="{{ route('contact') }}" class="inline-block mt-3 text-green-400 hover:text-green-300 font-medium">
                        Contact our support team →
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection