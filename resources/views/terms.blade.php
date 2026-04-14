{{-- resources/views/terms.blade.php --}}
@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<div class="py-12 md:py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl">
        {{-- Header --}}
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold">
                <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Terms of Service</span>
            </h1>
            <p class="mt-4 text-gray-400">Last updated: {{ date('F j, Y') }}</p>
        </div>

        {{-- Content Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative prose prose-invert prose-green max-w-none">
                <h2 class="text-2xl font-bold text-white mb-4">1. Acceptance of Terms</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    By accessing or using {{ config('app.name') }} ("Imbewu"), you agree to be bound by these Terms of Service and all applicable laws and regulations. If you do not agree, you may not use the service.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">2. Use of Service</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    You agree to use Imbewu only for lawful purposes and in accordance with these terms. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">3. Intellectual Property</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    All content, features, and functionality of Imbewu—including text, graphics, logos, videos, and software—are owned by Imbewu or its licensors and are protected by copyright, trademark, and other intellectual property laws.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">4. User Content</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    You retain ownership of any content you submit to Imbewu. By submitting content, you grant us a worldwide, non‑exclusive license to use, reproduce, and display it solely for the purpose of operating and improving the service.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">5. Limitation of Liability</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    To the fullest extent permitted by law, Imbewu shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of your use of or inability to use the service.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">6. Changes to Terms</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We reserve the right to modify these terms at any time. We will notify users of material changes via email or through the service. Your continued use constitutes acceptance of the modified terms.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">7. Termination</h2>
                <p class="text-gray-300 leading-relaxed mb-6">
                    We may suspend or terminate your account at our discretion if you violate these terms or engage in conduct harmful to Imbewu or other users.
                </p>

                <h2 class="text-2xl font-bold text-white mb-4">8. Contact Us</h2>
                <p class="text-gray-300 leading-relaxed">
                    If you have any questions about these Terms, please contact us at
                    <a href="mailto:legal@imbewuapp.com" class="text-green-400 hover:text-green-300 transition-colors">legal@imbewuapp.com</a>.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection