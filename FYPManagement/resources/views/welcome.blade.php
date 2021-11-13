@extends('layouts.app')

@section('content')
    <div style="height: 500px; overflow:hidden">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/cover.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="text-center my-5">
            <img src="{{ asset('images/logo-usa.png') }}" width="150px" alt="">
        </div>
        <h1 class="text-center">welcome to usa </h1>
        <p class="text-center py-4 lead">Please login to go to dashhoard</p>

        <div class="row">
            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="rounded">
                    <img src="{{ asset('images/1.jpg') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="p-5">
                    <h3>About Us</h3>
                    <p>
                        University of South Asia is driven by a shared resolve: to make this world in general and Pakistan
                        in particular a better place through education, research, and innovation. We are exciting and
                        eccentric, superlative but not discriminative, creative and imaginative, contemporary and
                        competitive, memorable but not unnoticeable, obsessed with impact, concerned about outreach, and
                        convivial to talented people regardless of their background, origin, color, race, beliefs, and
                        nationality.
                    </p>
                </div>
            </div>

            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="p-5">
                    <h3>Message</h3>
                    <p>
                        USA offers a platform to young generation where they are educated, trained and empowered with
                        knowledge”

                        It gives me immense pleasure to know that the University of South Asia is publishing its prospectus.
                        On this auspicious occasion, I am happy to note that the University has carved out its place not
                        only as a pioneer in higher education but also as a well-reputed and esteemed institution of higher
                        learning within a span of sixteen years.
                    </p>
                </div>
            </div>
            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="rounded">
                    <img src="{{ asset('images/2.jpg') }}" width="100%" alt="">
                </div>
            </div>


            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="rounded">
                    <img src="{{ asset('images/3.jpg') }}" width="100%" alt="">
                </div>
            </div>
            <div class="col-md-6 my-5">
                <div style="overflow: hidden; height: 300px;" class="p-5">
                    <h3>Historical Evolution of University of South Asia</h3>
                    <p>
                        University of South Asia is a leading private sector University in Pakistan that is recognized by
                        Higher Education Commission (HEC) of Pakistan, Islamabad as well as Punjab Higher Education
                        Commission (PHEC), Lahore. University of South Asia is also a recognized seat of higher learning by
                        all accreditation councils in Pakistan related to Higher Education.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
