@extends('layouts/layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Services</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Services <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
</section>

<section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-4">Pourquoi nous choisir?</h2>
            <p>Avec l'avancement rapide de la technologie, Shell-Solution conçoit des solutions web pouvant être visualisé sur des appareils mobiles tels que les téléphones intelligents et les tablettes, ainsi qu'à plus grande échelle comme les ordinateurs portables et les ordinateurs de bureau.</p>
          </div>
        </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                    <div class="text media-body">
                        <h3><strong>Développement d'application web</strong></h3>
                        <p>Grâce a son équipe de pointe, <strong>Shell-Solution</strong> conçoit un système web de votre 
                        choix avec un dashboard d'administration (selon vos besoins). <strong>Shell-Solution</strong> vous accompagne également dans l'achat d'un ébergement en ligne, etc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                    <div class="text media-body">
                        <h3> Divers</h3>
                        <p>
                            Mise à jour des logiciels pour PC (antivirus, système d'exploitation, etc)<br>
                            Mise à jour des logiciels de smartphone, reinitialisation, etc
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
                    <div class="text media-body">
                        <h3><strong>Conception brochures</strong></h3>
                        <p>Conception de dépliant personnel ou pour entreprise</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
                    <div class="text media-body">
                        <h3><strong>Conseils</strong></h3>
                        <p>Nous apportons également de l'aide à nos client dans le choix des solutions de gestion d'entreprise. En particulier sur les système ERP</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
                    <div class="text media-body">
                        <h3><strong>Publicité</strong></h3>
                        <p>Nous offrons la possibilité à nos client qui ne peuvent pas s'offrir une place sur la toile, de faire la publicité de leur produit à travers notre site. Nous mettons à la disposition des clients quelques espaces pour la pub</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 d-flex">
                <div class="services-2 border rounded text-center ftco-animate">
                    <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                    <div class="text media-body">
                        <h3>Marketing Strategy</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection