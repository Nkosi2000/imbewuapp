@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 mb-4">Terms of Service</h1>
            <p class="text-muted">Last updated: {{ date('F j, Y') }}</p>
            <hr class="my-4">

            <h2>1. Acceptance of Terms</h2>
            <p>By accessing or using {{ config('app.name') }}, you agree to be bound by these Terms of Service.</p>

            <h2>2. Use of Service</h2>
            <p>You agree to use the service only for lawful purposes and in accordance with these terms. You are responsible for maintaining the confidentiality of your account credentials.</p>

            <h2>3. Intellectual Property</h2>
            <p>All content, features, and functionality of the service are owned by {{ config('app.name') }} and are protected by copyright, trademark, and other intellectual property laws.</p>

            <h2>4. Limitation of Liability</h2>
            <p>To the fullest extent permitted by law, {{ config('app.name') }} shall not be liable for any indirect, incidental, or consequential damages arising out of your use of the service.</p>

            <h2>5. Changes to Terms</h2>
            <p>We reserve the right to modify these terms at any time. Your continued use of the service constitutes acceptance of the modified terms.</p>

            <h2>6. Contact Us</h2>
            <p>If you have any questions about these Terms, please contact us at <a href="mailto:legal@imbewuapp.com">legal@imbewuapp.com</a>.</p>
        </div>
    </div>
</div>
@endsection