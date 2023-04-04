@extends('layouts/layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">About Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
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
                <p>Exprimez vos désirs et nous nous chargeons de la transformation en application web responsive.
                     Demander notre expertise afin de faire le bon choix parmi des milliers de solutions disponible</p>
                <div class="tabulation-2 mt-4">
                    <ul class="nav nav-pills nav-fill d-md-flex d-block">
                        <li class="nav-item">
                        <a class="nav-link active py-2" data-toggle="tab" href="#home1"><span class="ion-ios-home mr-2"></span> Our Mission</a>
                        </li>
                        {{-- <li class="nav-item px-lg-2">
                        <a class="nav-link py-2" data-toggle="tab" href="#home2"><span class="ion-ios-person mr-2"></span> Our Vision</a>
                        </li> --}}
                        <li class="nav-item">
                        <a class="nav-link py-2" data-toggle="tab" href="#home3"><span class="ion-ios-mail mr-2"></span> Our Value</a>
                        </li>
                    </ul>
                    <div class="tab-content bg-light rounded mt-2">
                        <div class="tab-pane container p-0 active" id="home1">
                        <p>
                            Permettre aux structures n'ayant pas assez de moyens d'avoir une visibilité sur la 
                            toile. Ceci par la conception d'une application web repondant aux besoins. Apporter 
                            également une assistance aux personnes/entreprises pour le choix ou la mise à jour 
                            d'une solution disponible
                        </p>
                        </div>
                        {{-- <div class="tab-pane container p-0 fade" id="home2">
                        <p> coast of the Semantics, a large language ocean.</p>
                        </div> --}}
                        <div class="tab-pane container p-0 fade" id="home3">
                        <p>Satisfaire  nos client est notre priorité</p>
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