@extends('layouts.app')

@section('title', 'Support')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="display-4 mb-4">Support Center</h1>
            <p class="lead">How can we help you today?</p>
            <hr class="my-4">

            <div class="row mt-5">
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">📧 Email Support</h5>
                            <p class="card-text">For general inquiries or technical issues, email us at:</p>
                            <a href="mailto:support@imbewuapp.com" class="btn btn-outline-primary">support@imbewuapp.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">📞 Phone Support</h5>
                            <p class="card-text">Call us during business hours (Mon-Fri, 9am-5pm SAST):</p>
                            <p class="h5">+27 (0) 11 123 4567</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h3>Frequently Asked Questions</h3>
                <div class="accordion mt-3" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                How do I reset my password?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Click on "Forgot Password" on the login page and follow the instructions sent to your email.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                How do I update my profile information?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Log in to your account and navigate to Profile Settings from the dashboard.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                Is my data secure?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes, we use industry-standard encryption and security practices. Please read our Privacy Policy for more details.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection