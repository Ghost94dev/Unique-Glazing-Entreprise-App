@extends('layouts.main')

@section('content')

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_22.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
            <span>About us <i class="ion-ios-arrow-forward"></i></span>
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('sections.about')

  <section class="ftco-services">
    <div class="container">
      <div class="row justify-content-start mb-5 pb-5">
        <div class="col-md-4 heading-section ftco-animate">
          <h2 class="mb-4">Our Glazing & Aluminium Solutions</h2>
        </div>

        <div class="col-md-8 pl-md-5 ftco-animate">
          <div class="pl-md-4 border-line">
            <p>
              At <strong>Unique Glazing Enterprise</strong>, we specialize in providing modern glazing,
              aluminium, and stainless steel solutions for residential, commercial, and office spaces.
              Our expertise includes the fabrication and installation of aluminium windows and doors,
              UPVC windows and doors, frameless glass works, sliding glass doors, glass partitions,
              balustrades, and stainless steel railings.
            </p>

            <p>
              We combine quality materials, skilled craftsmanship, and modern designs to create
              durable, stylish, and secure installations that enhance the beauty and functionality
              of every property.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-services">
    <div class="container">
      <div class="row justify-content-start mb-5 pb-5">
        <div class="col-md-4 heading-section ftco-animate">
          <h2 class="mb-4">Why Choose Unique Glazing Enterprise</h2>
        </div>

        <div class="col-md-8 pl-md-5 ftco-animate">
          <div class="pl-md-4 border-line">
            <p>
              <strong>Quality Materials:</strong> We use durable glass, aluminium, and stainless steel
              to ensure long-lasting installations.
            </p>

            <p>
              <strong>Modern Designs:</strong> Our solutions are designed to enhance the beauty
              and functionality of homes, offices, and commercial buildings.
            </p>

            <p>
              <strong>Professional Installation:</strong> Our experienced team ensures precise
              fabrication and safe installation of every project.
            </p>

            <p>
              <strong>Custom Solutions:</strong> We tailor our services to meet the unique
              needs and preferences of every client.
            </p>

            <p>
              <strong>Reliable Service:</strong> We are committed to delivering high-quality work,
              timely completion, and customer satisfaction.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>



  @include('sections.counter')

  <section class="ftco-section">
    <div class="container">
      <div class="row mt-5 pt-4">

        <div class="col-md-4 ftco-animate">
          <h3 class="h4">Our Mission</h3>
          <p>
            Our mission is to provide high-quality aluminium, UPVC windows, and glass
            installation solutions that combine durability, modern design, and
            affordability while delivering excellent craftsmanship and customer satisfaction.
          </p>
        </div>

        <div class="col-md-4 ftco-animate">
          <h3 class="h4">Our Vision</h3>
          <p>
            Our vision is to become a trusted leader in glazing and aluminium systems,
            known for innovation, reliability, and delivering modern architectural
            solutions for residential and commercial buildings.
          </p>
        </div>

        <div class="col-md-4 ftco-animate">
          <h3 class="h4">Our Commitment</h3>
          <p>
            We are committed to using quality materials, skilled workmanship, and
            professional installation to ensure every project meets the highest
            standards of safety, durability, and design excellence.
          </p>
        </div>

      </div>
    </div>

  </section>
@endsection