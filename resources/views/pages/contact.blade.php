@extends('layouts.main')

@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_22.jpg') }});"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="col-md-12 mb-4">
                    <h2 class="h4">Contact Information</h2>
                    <p>Feel free to contact us for enquiries, quotations, or project consultations.</p>
                </div>

                <div class="w-100"></div>

                <div class="col-md-3">
                    <p><span>Address:</span> Mallam-Kasoa Highway, Accra, Ghana</p>
                </div>

                <div class="col-md-3">
                    <p><span>Phone:</span> <a href="tel:+233244662178">+233 24 466 2178</a></p>
                </div>

                <div class="col-md-3">
                    <p><span>Email:</span> <a href="mailto:uniqueglazing42@gmail.com">uniqueglazing42@gmail.com</a></p>
                </div>

                <div class="col-md-3">
                    <p><span>Website:</span> <a href="/">www.uniqueglazing.com</a></p>
                </div>

                <div class="col-md-3">
                    <a href="https://wa.me/233244662178" class="btn btn-success mt-3">
                        Chat with us on WhatsApp
                    </a>
                </div>




            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section mb-5">
        <div class="container-wrap">
            <div class="row d-flex align-items-stretch no-gutters">
                <div class="col-md-6 p-5 order-md-last">

                      @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
                        </div>

                        <div class="form-group">
                            <textarea name="message" rows="7" class="form-control" placeholder="Your Message"
                                required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>

                    </form>

                  
                </div>

                <div class="col-md-6 d-flex align-items-stretch">
                    <iframe src="https://www.google.com/maps?q=Accra+Ghana&output=embed" width="100%" height="100%"
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

            </div>
        </div>
    </section>


@endsection