{{-- resources/views/privacy.blade.php --}}
@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="py-12 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Privacy Policy</span>
            </h1>
            <p class="mt-4 text-gray-400">Last updated: {{ date('F j, Y') }}</p>
        </div>

        {{-- Content Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative prose prose-invert prose-green max-w-none">
                <h2 class="text-2xl font-bold text-white mb-4">1. Information We Collect</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We collect information you provide directly to us, such as when you create an account, fill out a form, or communicate with us. This may include your name, email address, phone number, role, and any other information you choose to provide.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">2. How We Use Your Information</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We use the information we collect to provide, maintain, and improve our services, to communicate with you, to personalize your learning experience, and to comply with legal obligations.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">3. Sharing of Information</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We do not sell your personal information. We share information only as necessary to provide our services (e.g., with trusted service providers), comply with the law, or protect our rights and safety.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">4. Data Security</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We implement industry‑standard encryption and security measures to protect your personal information from loss, theft, misuse, and unauthorized access. All data is encrypted at rest and in transit.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">5. Your Rights</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    You have the right to access, correct, or delete your personal data. You may also request a copy of your data or restrict its processing. Contact us to exercise these rights.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">6. Contact Us</h2>
                <p class="text-gray-300 leading-relaxed">
                    If you have any questions about this Privacy Policy, please contact us at
                    <a href="mailto:privacy@imbewuapp.com" class="text-green-400 hover:text-green-300 transition-colors">privacy@imbewuapp.com</a>.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection