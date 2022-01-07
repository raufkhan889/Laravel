@extends('layouts.main-app')

@section('title')
    About us
@endsection

@section('content')
    <div class="breadcrumb-area pt-205 pb-210" style="background-image: url(frontend/assets/img/slider/about-banner.jpg)">
        <div class="container">
            <div class="breadcrumb-content text-center">
                <h2>about us</h2>
                <ul>
                    <li><a href="{{ route('home') }}">home</a></li>
                    <li> about us </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="about-story pt-95 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="story-img">
                        <img src="frontend/assets/img/banner/about-1.jpg" alt="">
                        <div class="about-logo">
                            {{-- <h3>BuzznBite's</h3> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-details pl-50">
                        <div class="story-details-top">
                            <h2>WELCOME TO <span>BuzznBite's</span></h2>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an
                                will give you a complete account of the system, and expound the actual teachings of the eat
                                explorer. </p>
                        </div>
                        <div class="story-details-bottom">
                            <h4>WE START AT 2015</h4>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an
                                will give you a complete account of the system, and expound the actual teachings of the eat
                                explorer.</p>
                        </div>
                        <div class="story-details-bottom">
                            <h4>WIN BEST ONLINE SHOP AT 2017</h4>
                            <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born an
                                will give you a complete account of the system, and expound the actual teachings of the eat
                                explorer. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-banner-area pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="frontend/assets/img/banner/banner-offer-2.jpg" alt=""></a>
                        <div class="banner-content4-style1">
                            <h4>Best <br>Food <br>Items.</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="frontend/assets/img/banner/banner-offer-3.jpg" alt=""></a>
                        <div class="banner-content4-style2">
                            <h5 class="p-left">get</h5>
                            <h2>100% </h2>
                            <h5 class="p-right">off</h5>
                            <h3>Home Delivery</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-wrapper-4 mb-30">
                        <a href="#"><img src="frontend/assets/img/banner/banner-offer-1.jpg" alt=""></a>
                        <div class="banner-content4-style3">
                            <h1>Up to <br>10% Off</h1>
                            <h3>Hot Items</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="choose-area pb-100">
        <div class="container">
            <div class="about-section">
                <h3>YOU CAN CHOOSE US BECAUSE <br>WE ALWAYS PROVIDE IMPORTANCE...</h3>
                <p>ezone provide how all this mistaken idea of denouncing pleasure and sing pain was born will give you a
                    complete account of the system, and expound the actual </p>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="all-causes">
                        <div class="row">
                            <div class="col-md-6 causes-res">
                                <div class="choose-wrapper">
                                    <h4>FAST DELIVERY</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                                <div class="choose-wrapper">
                                    <h4>SECURE PAYMENT</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                                <div class="choose-wrapper">
                                    <h4>EASY ORDER TRACKING</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                                <div class="choose-wrapper">
                                    <h4>24/7 SUPPORT</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="choose-wrapper">
                                    <h4>QUALITY PRODUCT</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                                <div class="choose-wrapper">
                                    <h4>MONEY BACK GUARNTEE</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                                <div class="choose-wrapper">
                                    <h4>FREE RETURN</h4>
                                    <p>ezone provide how all this mistaken dea of denouncing pleasure and sing </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="choose-banner-wrapper f-right">
                        <img src="frontend/assets/img/banner/about-side-banner.jpg" alt="">
                        <div class="choose-banner-text">
                            <h4>DEALS <br>OF THE DAY</h4>
                            <h3>UP TO <br><span>50%</span> <br>OFF</h3>
                            <a href="#">SHOP NOW </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area">
        <img src="frontend/assets/img/banner/about-middle-banner.jpg" alt="">
    </div>
    <!-- testimonials area start -->
    <div class="testimonials-area pt-100 pb-95 bg-img" style="background-image: url(frontend/assets/img/bg/7.jpg)">
        <div class="container">
            <div class="testimonials-active owl-carousel">
                <div class="single-testimonial-2 text-center">
                    <img src="frontend/assets/img/team/team-1.jpg" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                        nostrud exercitation.</p>
                    <img src="frontend/assets/img/team/2.png" alt="">
                    <h4>tayeb rayed</h4>
                    <span>uiux Designer</span>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->
@endsection
