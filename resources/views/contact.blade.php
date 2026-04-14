@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 mb-4">Contact Us</h1>
            <p class="lead">
                Have questions or feedback? We'd love to hear from you.
            </p>
            <hr class="my-4">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.submit') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>

            <hr class="my-5">

            <div class="row">
                <div class="col-md-6">
                    <h5>Email</h5>
                    <p>support@imbewuapp.com</p>
                </div>
                <div class="col-md-6">
                    <h5>Phone</h5>
                    <p>+27 (0) 11 123 4567</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection