{{-- resources/views/auth/register.blade.php --}}
@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Register</div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <x-input name="first_name" label="First Name" required autofocus />
                    <x-input name="last_name" label="Last Name" required />
                    <x-input name="email" label="Email Address" type="email" required />
                    <x-input name="mobile_number" label="Mobile Number" required />

                    {{-- Role dropdown using select component --}}
                    @php
                        $roleOptions = [];
                        foreach($publicRoles as $role) {
                            $roleOptions[$role->value] = $role->label();
                        }
                    @endphp
                    <x-select name="role" label="I am a" :options="$roleOptions" required />

                    <x-input name="password" label="Password" type="password" required />
                    <x-input name="password_confirmation" label="Confirm Password" type="password" required />

                    <x-checkbox name="consent" label="I consent to the processing of my data" required />

                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <x-button type="submit" variant="primary">Register</x-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection