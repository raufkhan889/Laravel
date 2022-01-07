@extends('layouts.main-app')

@section('title')
    Contact
@endsection

@section('content')
    <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(frontend/assets/img/slider/contact-banner.jpg)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>contact us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li> contact us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area start -->
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-map-wrapper">
                        <div class="contact-map mb-40">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d54395.92699537393!2d74.35320449189157!3d31.558600127236787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d31.583331599999998!2d74.4173874!4m5!1s0x3919050d90b4fac3%3A0xa46dbb2def95e45a!2sgoogle%20map%20university%20of%20south%20asia!3m2!1d31.533199!2d74.3792398!5e0!3m2!1sen!2s!4v1641230712401!5m2!1sen!2s"
                                width="736" height="457" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        {{-- <div class="contact-message">
                            <div class="contact-title">
                                <h4>Contact Information</h4>
                            </div>
                            <form id="contact-form" class="contact-form" action="assets/mail.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Name*</label>
                                            <input name="name" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Email*</label>
                                            <input name="email" required="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>Telephone</label>
                                            <input name="telephone" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="contact-input-style mb-30">
                                            <label>subject</label>
                                            <input name="subject" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contact-textarea-style mb-30">
                                            <label>Comment*</label>
                                            <textarea class="form-control2" name="message" required=""></textarea>
                                        </div>
                                        <button class="submit contact-btn btn-hover" type="submit">
                                            Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <p class="form-messege"></p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info-wrapper">
                        <div class="contact-title">
                            <h4>Location & Details</h4>
                        </div>
                        <div class="contact-info">
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Address:</span> 1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="pe-7s-mail"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Email: </span> Support@plazathemes.com</p>
                                </div>
                            </div>
                            <div class="single-contact-info">
                                <div class="contact-info-icon">
                                    <i class="pe-7s-call"></i>
                                </div>
                                <div class="contact-info-text">
                                    <p><span>Phone: </span> (800) 0123 456 789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->
@endsection
