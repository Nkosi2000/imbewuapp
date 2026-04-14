{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Role‑Based Agricultural Learning')

@section('meta_description', 'Imbewu is the first role‑based agricultural learning platform for emerging farmers. Learn offline, in your language.')

@section('content')
    {{-- Hero --}}
    <x-hero
        title="Grow your farming knowledge,"
        highlight="your way."
        subtitle="Imbewu is the first role‑based agricultural learning platform for emerging farmers. Whether you learn independently or as part of a coordinated group – get practical, offline‑capable courses in your local language."
        primaryButtonText="Start Learning Today"
        primaryButtonUrl="{{ route('register') }}"
        secondaryButtonText="Learn More"
        secondaryButtonUrl="#features"
    />

    {{-- Why Imbewu? --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20" id="features">
        <x-section-heading
            title="Why Imbewu?"
            subtitle="Structured agricultural education is the missing link for small‑scale farmers."
        />

        <div class="grid md:grid-cols-3 gap-8">
            <x-feature-card
                icon="📉"
                title="Up to 40% crop loss"
                description="Due to preventable planting errors and pest mismanagement – easily avoidable with proper training."
            />
            <x-feature-card
                icon="🌱"
                title="2.3x higher yields"
                description="Farmers receiving structured, ongoing training outperform those relying on informal knowledge alone."
            />
            <x-feature-card
                icon="📱"
                title="Offline & localised"
                description="Access farming materials without internet, in languages that make sense to you."
            />
        </div>
    </div>

    {{-- Role‑Based Learning --}}
    <div class="py-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <x-section-heading
                title="Built for your role"
                subtitle="One platform, three learning journeys."
            />

            <div class="grid md:grid-cols-3 gap-8">
                <x-role-card
                    title="Student"
                    description="Follow a structured curriculum under a coordinator's guidance. Track your progress, take quizzes, earn certificates."
                />
                <x-role-card
                    title="Independent Grower"
                    description="Self‑paced learning with task scheduling, crop reports, and offline caching – all at your own rhythm."
                />
                <x-role-card
                    title="Program Coordinator"
                    description="Manage students, assign courses, track group progress, and create learning materials – all from one dashboard."
                />
            </div>
        </div>
    </div>

    {{-- Offline & Security --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <x-media-text
            imageUrl="https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
            imageAlt="Farmer using mobile"
            title="Learn anywhere, even offline"
            description="Imbewu caches lessons locally, so you can read farming guides, watch video tutorials, and track your tasks even with no internet connection."
            :checklist="[
                'End‑to‑end encryption & HTTPS',
                'Multi‑factor authentication for coordinators',
                'Your data stays yours – secure database encryption',
            ]"
        />
    </div>

    {{-- Call to Action --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <x-cta
            title="Ready to grow?"
            subtitle="Join the Imbewu community and start transforming your farming practice today."
            primaryButtonText="Create Free Account"
            primaryButtonUrl="{{ route('register') }}"
            secondaryText="Already have an account?"
            secondaryLinkText="Log in"
            secondaryLinkUrl="{{ route('login') }}"
        />
    </div>
@endsection