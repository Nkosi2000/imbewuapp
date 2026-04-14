@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 mb-4">Privacy Policy</h1>
            <p class="text-muted">Last updated: {{ date('F j, Y') }}</p>
            <hr class="my-4">

            <h2>1. Information We Collect</h2>
            <p>We collect information you provide directly to us, such as when you create an account, fill out a form, or communicate with us. This may include your name, email address, phone number, and any other information you choose to provide.</p>

            <h2>2. How We Use Your Information</h2>
            <p>We use the information we collect to provide, maintain, and improve our services, to communicate with you, and to comply with legal obligations.</p>

            <h2>3. Sharing of Information</h2>
            <p>We do not share your personal information with third parties except as necessary to provide our services, comply with the law, or protect our rights.</p>

            <h2>4. Security</h2>
            <p>We take reasonable measures to protect your personal information from loss, theft, misuse, and unauthorized access.</p>

            <h2>5. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:privacy@imbewuapp.com">privacy@imbewuapp.com</a>.</p>
        </div>
    </div>
</div>
@endsection