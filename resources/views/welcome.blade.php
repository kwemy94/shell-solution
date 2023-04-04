{{-- Page home avec slider dans la section _slider --}}
@extends('layouts/layout')

@section('content')

<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
                <h2 class="mb-0">You Always Get the Best Guidance</h2>
            </div>
        </div>	
    </div>
</section>


<section class="ftco-section ftco-about ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">
    <div class="container consult-wrap">
        <div class="row d-flex align-items-stretch">
            <div class="col-md-6 wrap-about align-items-stretch d-flex">
                <div class="img" style="background-image: url(images/about.jpg);"></div>
            </div>
            <div class="col-md-6 wrap-about ftco-animate py-md-5 pl-md-5">
                <div class="heading-section mb-4">
                    <span class="subheading">Welcome to Shell Solution</span>
                    <h2>Optener un dévis pour votre site web à moindre coût</h2>
                </div>
                <p>Un personnel qualifié à l'écoute pour vous satisfaire en temps reel.</p>
                <div class="tabulation-2 mt-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                        <li class="nav-item">
                        <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
                        </li>
                        <li class="nav-item px-lg-2">
                        <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-light rounded mt-2">
                        <div class="tab-pane container p-0 active" id="home1">
                        <p>En cours de production</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="home2">
                        <p>En cours de production ....</p>
                        </div>
                        <div class="tab-pane container p-0 fade" id="home3">
                        <p>En cours de production ....</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="86">0</strong>
                                <span>Happy Clients</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="icon"><span class="flaticon-doctor"></span></div>
                            <div class="text">
                                <strong class="number" data-number="18">0</strong>
                                <span>Experienced</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

{{-- Section slider page home --}}
@section('slider')

<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image:url(images/bg_22.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate mb-md-5">
                    <span class="subheading">Shell Solution developper</span>
                    <h1 class="mb-4">Développement d'applications web adaptées a tout type de mobile</h1>
                    <p><a href="/services" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_44.png);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate mb-md-5">
                    <span class="subheading">Shell Solution Consulting</span>
                    <h1 class="mb-4">We Are The Best Consulting Agency</h1>
                    <p><a href="/services" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate mb-md-5">
                    <span class="subheading">Shell Solution Advice</span>
                    <h1 class="mb-4">Conseil sur le choix de vos solutions d'entreprise</h1>
                    <p><a href="/services" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
