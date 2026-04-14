{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')

@section('title', 'Sign In')

@section('content')
<div class="min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        {{-- Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative">
                {{-- Header --}}
                <div class="text-center mb-8">
                    <h2 class="text-3xl md:text-4xl font-bold">
                        <span class="bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">Welcome Back</span>
                    </h2>
                    <p class="mt-2 text-gray-400">Sign in to continue your journey</p>
                </div>

                {{-- Form --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <x-input name="email" label="Email Address" type="email" required autofocus />
                    <x-input name="password" label="Password" type="password" required />

                    <div class="flex items-center justify-between">
                        <x-checkbox name="remember" id="remember">
                            Remember me
                        </x-checkbox>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-green-400 hover:text-green-300 transition-colors">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <div class="pt-4">
                        <x-button type="submit" variant="primary" fullWidth>
                            Sign In
                        </x-button>
                    </div>

                    <p class="text-center text-sm text-gray-400">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="font-medium text-green-400 hover:text-green-300 transition-colors">
                            Create one
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection