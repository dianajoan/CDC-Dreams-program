@extends('frontend.layouts.master2')
@section('title') {{ __('header.contact_title') }} @endsection
@section('main-content')
{{-- @include('frontend.layouts.notification') --}}

<!-- Body main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <section class="bd-breadcrumb-area p-relative fix">
        <!-- breadcrumb background image -->
        <div class="bd-breadcrumb-bg" data-background="{{ asset('frontend/assets/images/bg/breadcrumb-bg.png') }}"></div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                            <div class="bd-breadcrumb-content text-center">
                                <h1 class="bd-breadcrumb-title">Contact Us</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                    <span>Contact Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- contact-address area start -->
    <section class="bd-about-us-area section-space">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon mb-30"><i class="icon-call-ring"></i></div>
                        <h5 class="contact-title mb-15">Call Us On</h5>
                        <div class="contact-content">
                            <a href="tel:+255756709619">+255756709619</a>
                            <a href="tel:+255774862939">+255774862939</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon mb-30"><i class="icon-envelope-b"></i></div>
                        <h5 class="contact-title mb-15">Email Us</h5>
                        <div class="contact-content">
                            <a href="mailto:info@zanzibarpointtours.com">info@zanzibarpointtours.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                    <div class="contact-box">
                        <div class="contact-icon mb-30"><i class="icon-location-fill"></i></div>
                        <h5 class="contact-title mb-15">Our Location</h5>
                        <div class="contact-content">
                            <a href="#">Stone town-Zanzibar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-address area end -->

    <!-- contact form area start -->
    <section class="bd-contact-form section-space-bottom">
        <div class="container">
            <div class="row gy-24 justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-6">
                    <div class="section-title-wrapper">
                        <span class="section-subtitle mb-10">Contact us</span>
                        <h3 class="section-title mb-15">Get 100% Free Course Contact With Us!</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit massa mi. Aliquam hendrerit urna
                            pellentesque</p>
                        <div class="section-divider mb-25"></div>
                        <div class="contact-social">
                            <span class="contact-social-title d-block mb-30">Follow Us here:</span>
                            <div class="social-menu">
                                <ul>
                                    <li><a class="facebook" href="https://www.facebook.com/profile.php?id=100066756278990" target="blank"><i
                                             class="icon-facebook"></i></a></li>
                                    <li><a class="instagram" href="https://instagram.com/zanzibarpointtoursandsafaris?r=nametag" target="blank"><i
                                             class="icon-instagram"></i></a></li>
                                    <li><a class="linkedin" href="https://www.tripadvisor.com/Attraction_Review-g488129-d25245165-Reviews-Zanzibar_Point_Tours_Safaris-Stone_Town_Zanzibar_City_Zanzibar_Island_Zanzibar_A.html" target="blank"><i
                                             class="icon-trip"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="contact-form">
                        <h5 class="mb-24">Drop Us a Line... </h5>
                        <form action="{{route('contact.store')}}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
                            <div class="row gy-24">
                                <div class="col-md-12">
                                    <div class="floating-form-input">
                                        <input type="text" class="inputText @error('name') is-invalid @enderror" id="name" name="name" required="">
                                        <span class="floating-label">Full Name</span>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="floating-form-input">
                                        <input type="email" class="inputText @error('email') is-invalid @enderror" id="email" name="email" required="">
                                        <span class="floating-label">Your Email</span>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="floating-form-input">
                                        <input type="text" class="inputText @error('subject') is-invalid @enderror" id="subject" name="subject" required="">
                                        <span class="floating-label">Subject</span>
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-input-box">
                                        <div class="floating-form-input">
                                            <textarea class="textareaText @error('message') is-invalid @enderror" id="message" name="message" required=""></textarea>
                                            <span class="floating-label-two">Your Message</span>
                                            @error('message')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
                                            <span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
                                            <span class="bd-primary-btn-text">Send Now</span>
                                            <span class="bd-primary-btn-circle"></span>
                                            <span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </section>

    <!-- contact form area end -->

    <!-- google map area start -->
    <div class="bd-map-area section-space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.746165358545!2d39.18646358524719!3d-6.164738477894338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cd05e9bcb90f7%3A0xd706ae782862be1!2sZanzibar%20Tours%20%26%20Travel!5e0!3m2!1sen!2sug!4v1716882904730!5m2!1sen!2sug" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- google map area end-->

</main>
<!-- Body main wrapper end -->

@endsection

@push('styles')

<style>
    /* Mobile responsiveness */
@media only screen and (max-width: 767px) {
    #map-wrapper iframe {
        height: 300px; /* Adjust the height as needed for smaller screens */
    }
}
</style>

@push('scripts')

$(document).ready(function() {
    (function($) {
        "use strict";

        // Validate contact form
        $('#contactForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                subject: {
                    required: true,
                    minlength: 4
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Please enter your name.",
                    minlength: "Your name must have at least 2 characters."
                },
                subject: {
                    required: "Please enter a subject.",
                    minlength: "Your subject must have at least 4 characters."
                },
                email: {
                    required: "Please enter your email.",
                    email: "Please enter a valid email."
                },
                message: {
                    required: "Please enter a message.",
                    minlength: "Your message must have at least 20 characters."
                }
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(form).ajaxSubmit({
                    type: "POST",
                    data: $(form).serialize(),
                    url: $(form).attr('action'),
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo("slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor', 'default');
                            $('#success').fadeIn();
                            $('.modal').modal('hide');
                            $('#success').modal('show');
                        });
                    },
                    error: function() {
                        $('#contactForm').fadeTo("slow", 1, function() {
                            $('#error').fadeIn();
                            $('.modal').modal('hide');
                            $('#error').modal('show');
                        });
                    }
                });
            }
        });
    })(jQuery);
});


@endpush