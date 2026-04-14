@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 mb-4">About {{ config('app.name') }}</h1>
            <p class="lead">
                We are dedicated to providing innovative solutions that empower individuals and businesses.
            </p>
            <hr class="my-4">
            <h2>Our Mission</h2>
            <p>
                To deliver high-quality, user-friendly applications that solve real-world problems and drive growth.
            </p>
            <h2>Our Vision</h2>
            <p>
                To become a trusted partner in digital transformation, fostering a community of continuous learning and innovation.
            </p>
            <h2>Our Values</h2>
            <ul>
                <li>Integrity and transparency</li>
                <li>Customer-centric approach</li>
                <li>Commitment to excellence</li>
                <li>Collaboration and respect</li>
            </ul>
        </div>
    </div>
</div>
@endsection