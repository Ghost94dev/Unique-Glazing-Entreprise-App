@extends('layouts.main')

@section('content')

	<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('images/bg_22.jpg') }});"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 bread">Services</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
									class="ion-ios-arrow-forward"></i></a></span> <span>Services <i
								class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	</section>

	<div class="mb-2">
		@include('sections.workflow')
	</div>

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-start mb-5 pb-2">
				<div class="col-md-4 heading-section ftco-animate">
					<span class="subheading subheading-with-line">
						<small class="pr-2 bg-light">Projects</small>
					</span>
					<h2 class="mb-4">Our Completed Projects</h2>
				</div>

				<div class="col-md-8 pl-md-5 heading-section ftco-animate">
					<div class="pl-md-4 border-line">
						<p>
							We take pride in delivering high-quality glazing and aluminium solutions
							for residential and commercial buildings. Our completed projects include
							UPVC and aluminium windows, glass doors, curtain walls, automatic garage
							doors, and custom glazing installations designed to enhance both durability
							and modern architectural style.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="{{ asset('images/work-4000.jpeg') }}" class="img-fluid" alt="Stainless Steel with Glass">
						<div class="text">
							<span>Stainless Steel with Glass</span>
							<h3><a href="project.html">Stainless Steel with Glass Installation</a></h3>
						</div>
						<a href="{{ asset('images/work-4000.jpeg') }}"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="{{ asset('images/work-5000.jpeg') }}" class="img-fluid" alt="Stairs Frameless Glass">
						<div class="text">
							<span>Stairs Frameless Glass</span>
							<h3><a href="project.html">Stairs Frameless Glass Installation</a></h3>
						</div>
						<a href="{{ asset('images/work-5000.jpeg') }}"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="{{ asset('images/work-6000.jpeg') }}" class="img-fluid" alt="Stainless Steel with Glass">
						<div class="text">
							<span>Stainless Steel with Glass</span>
							<h3><a href="project.html">Stainless Steel with Glass Installation</a></h3>
						</div>
						<a href="{{ asset('images/work-6000.jpeg') }}"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="project">
						<img src="{{ asset('images/work-7000.jpeg') }}" class="img-fluid" alt="Complete Store Building">
						<div class="text">
							<span>Complete Store Building Aluminium Windows & Doors Project</span>
							<h3>Complete Store Building Installation</h3>
						</div>
						<a href="{{ asset('images/work-7000.jpeg') }}"
							class="icon image-popup d-flex justify-content-center align-items-center">
							<span class="icon-expand"></span>
						</a>
					</div>
				</div>
			</div>
	</section>


@endsection