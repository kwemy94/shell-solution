@extends('layouts/layout')

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info justify-content-center">
        	<div class="col-md-10">
        		<div class="row mb-5">
		            <div class="col-md-4 text-center d-flex">
		          	    <div class="border w-100 p-4">
			          	    <div class="icon">
			          		    <span class="icon-map-o"></span>
			          	    </div>
			                <p><span>Address:</span> Dschang, CAMEROUN</p>
			            </div>
		            </div>
		            <div class="col-md-4 text-center d-flex">
		          	    <div class="border w-100 p-4">
			          	    <div class="icon">
			          		    <span class="icon-tablet"></span>
			          	    </div>
			                <p>
                                <span>Phone:</span> <a href="tel://0237693540913">Call us: +237 693540913</a>
                                <span>Schreiben:</span> <a href="https://wa.me/message/QZCSIJOLAP7ON1" target="_blank">WhatsApp: +237 658758598</a>
                            </p>
			            </div>
		            </div>
		            <div class="col-md-4 text-center d-flex">
		          	    <div class="border w-100 p-4">
                            <div class="icon">
                                <span class="icon-envelope-o"></span>
			          	    </div>
			                <p><span>Email:</span> <a href="mailto:info@grant-shell.com">info@grant-shell.com</a></p>
			            </div>
		            </div>
		        </div>
            </div>
        </div>
        <div class="row block-9 justify-content-center mb-5">
            @if(!session()->has('message'))
            <div class="col-md-10 mb-md-5">
                <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message</h2>
                <form action="/contact" method="post" class="border p-5 contact-form">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
          
            </div>
            @endif
        </div>
    </div>
</section>

@endsection