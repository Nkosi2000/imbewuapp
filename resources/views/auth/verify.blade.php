{{-- resources/views/auth/verify.blade.php --}}
@extends('layouts.app')

@section('title', 'Verify Email')

@section('content')
<div class="min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md">
        {{-- Card --}}
        <div class="relative overflow-hidden rounded-3xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 p-8 md:p-10 shadow-2xl text-center">
            <div class="absolute -right-20 -top-20 h-40 w-40 rounded-full bg-green-500/10 blur-3xl"></div>
            <div class="absolute -bottom-20 -left-20 h-40 w-40 rounded-full bg-emerald-500/10 blur-3xl"></div>

            <div class="relative">
                {{-- Icon --}}
                <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-green-600 to-emerald-600 shadow-lg shadow-green-600/30">
                    <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>

                <h2 class="text-2xl font-bold text-white mb-4">Verify Your Email Address</h2>

                @if (session('resent'))
                    <x-alert type="success">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </x-alert>
                @endif

                <p class="text-gray-300 mb-4">
                    Before proceeding, please check your email for a verification link.
                </p>
                <p class="text-gray-400 text-sm mb-6">
                    If you did not receive the email, click the button below to request another.
                </p>

                <form method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <x-button type="submit" variant="outline" fullWidth>
                        Resend Verification Email
                    </x-button>
                </form>

                <p class="mt-6 text-sm text-gray-400">
                    Need help?
                    <a href="{{ route('support') }}" class="text-green-400 hover:text-green-300 transition-colors">Contact Support</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection