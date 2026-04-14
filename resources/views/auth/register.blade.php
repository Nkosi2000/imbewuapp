{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('title', 'Create Your Account')

@section('content')
<div class="min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl">
        {{-- Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative">
                {{-- Header --}}
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold">
                        <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Join Imbewu</span>
                    </h2>
                    <p class="mt-2 text-gray-400">Start your agricultural learning journey today</p>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <x-input id="first_name" name="first_name" label="First Name" required autofocus />
                        <x-input id="last_name" name="last_name" label="Last Name" required />
                    </div>

                    <x-input id="email" name="email" label="Email Address" type="email" required />
                    <x-input id="mobile_number" name="mobile_number" label="Mobile Number" required />

                    @php
                        $roleOptions = [];
                        foreach($publicRoles as $role) {
                            $roleOptions[$role->value] = $role->label();
                        }
                    @endphp
                    <x-select id="role" name="role" label="I am a" :options="$roleOptions" required />

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <x-input id="password" name="password" label="Password" type="password" required />
                        <x-input id="password_confirmation" name="password_confirmation" label="Confirm Password" type="password" required />
                    </div>

                    <x-checkbox id="consent" name="consent" required>
                        I consent to the processing of my personal data in accordance with the
                        <a href="{{ route('privacy') }}" class="text-green-400 hover:text-green-300 underline">Privacy Policy</a>
                    </x-checkbox>

                    <div class="pt-4">
                        <x-button type="submit" variant="primary" fullWidth>
                            Create Account
                        </x-button>
                    </div>

                    <p class="text-center text-sm text-gray-400">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-green-400 hover:text-green-300 transition-colors">
                            Sign in
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection