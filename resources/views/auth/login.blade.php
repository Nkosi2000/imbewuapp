{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <x-input name="email" label="Email Address" type="email" required autofocus />
                    <x-input name="password" label="Password" type="password" required />

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                <label class="form-check-label" for="remember">Remember Me</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <x-button type="submit" variant="primary">Login</x-button>
                            <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection