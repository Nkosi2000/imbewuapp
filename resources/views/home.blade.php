{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Role‑Based Agricultural Learning')

@section('meta_description', 'Imbewu is the first role‑based agricultural learning platform for emerging farmers. Learn offline, in your language.')

@section('content')
    {{-- Hero Section --}}
    <div class="relative overflow-hidden bg-gradient-to-br from-green-50 via-white to-emerald-50 py-20 md:py-28">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1625246333195-78d9c38ad449?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80')] bg-cover bg-center opacity-10"></div>
        <div class="relative container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight">
                Grow your farming knowledge,<br>
                <span class="text-green-700">your way.</span>
            </h1>
            <p class="mt-6 text-xl text-gray-600 max-w-3xl mx-auto">
                Imbewu is the first role‑based agricultural learning platform for emerging farmers.<br>
                Whether you learn independently or as part of a coordinated group – get practical, offline‑capable courses in your local language.
            </p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('register') }}" class="bg-green-700 hover:bg-green-800 text-white px-8 py-3 rounded-lg text-lg font-semibold transition shadow-lg">Start Learning Today</a>
                <a href="#features" class="border border-green-700 text-green-700 hover:bg-green-50 px-8 py-3 rounded-lg text-lg font-semibold transition">Learn More</a>
            </div>
        </div>
    </div>

    {{-- Why Imbewu? --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16" id="features">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Why Imbewu?</h2>
            <p class="mt-4 text-xl text-gray-500 max-w-3xl mx-auto">Structured agricultural education is the missing link for small‑scale farmers.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-green-50 rounded-2xl p-6 shadow-sm">
                <div class="text-green-700 text-4xl mb-4">📉</div>
                <h3 class="text-xl font-bold mb-2">Up to 40% crop loss</h3>
                <p class="text-gray-600">Due to preventable planting errors and pest mismanagement – easily avoidable with proper training.</p>
            </div>
            <div class="bg-green-50 rounded-2xl p-6 shadow-sm">
                <div class="text-green-700 text-4xl mb-4">🌱</div>
                <h3 class="text-xl font-bold mb-2">2.3x higher yields</h3>
                <p class="text-gray-600">Farmers receiving structured, ongoing training outperform those relying on informal knowledge alone.</p>
            </div>
            <div class="bg-green-50 rounded-2xl p-6 shadow-sm">
                <div class="text-green-700 text-4xl mb-4">📱</div>
                <h3 class="text-xl font-bold mb-2">Offline & localised</h3>
                <p class="text-gray-600">Access farming materials without internet, in languages that make sense to you.</p>
            </div>
        </div>
    </div>

    {{-- Role‑Based Learning --}}
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Built for your role</h2>
                <p class="mt-4 text-xl text-gray-500">One platform, three learning journeys.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-6 shadow-md border-t-4 border-green-600">
                    <h3 class="text-2xl font-bold text-green-800">Student</h3>
                    <p class="mt-2 text-gray-600">Follow a structured curriculum under a coordinator’s guidance. Track your progress, take quizzes, earn certificates.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-md border-t-4 border-green-600">
                    <h3 class="text-2xl font-bold text-green-800">Independent Grower</h3>
                    <p class="mt-2 text-gray-600">Self‑paced learning with task scheduling, crop reports, and offline caching – all at your own rhythm.</p>
                </div>
                <div class="bg-white rounded-2xl p-6 shadow-md border-t-4 border-green-600">
                    <h3 class="text-2xl font-bold text-green-800">Program Coordinator</h3>
                    <p class="mt-2 text-gray-600">Manage students, assign courses, track group progress, and create learning materials – all from one dashboard.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Offline & Security --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Farmer using mobile" class="rounded-2xl shadow-xl">
            </div>
            <div class="md:w-1/2">
                <h2 class="text-3xl font-bold text-gray-900">Learn anywhere, even offline</h2>
                <p class="mt-4 text-lg text-gray-600">Imbewu caches lessons locally, so you can read farming guides, watch video tutorials, and track your tasks even with no internet connection.</p>
                <ul class="mt-6 space-y-3">
                    <li class="flex items-center"><span class="text-green-600 text-xl mr-3">✓</span> End‑to‑end encryption & HTTPS</li>
                    <li class="flex items-center"><span class="text-green-600 text-xl mr-3">✓</span> Multi‑factor authentication for coordinators</li>
                    <li class="flex items-center"><span class="text-green-600 text-xl mr-3">✓</span> Your data stays yours – secure database encryption</li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Call to Action --}}
    <div class="bg-green-800 py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white">Ready to grow?</h2>
            <p class="mt-4 text-xl text-green-100">Join the Imbewu community and start transforming your farming practice today.</p>
            <div class="mt-8">
                <a href="{{ route('register') }}" class="bg-white text-green-800 px-8 py-3 rounded-lg text-lg font-semibold hover:bg-gray-100 transition shadow-lg">Create Free Account</a>
                <p class="mt-4 text-green-200 text-sm">Already have an account? <a href="{{ route('login') }}" class="underline font-medium">Log in</a></p>
            </div>
        </div>
    </div>
@endsection