@extends('frontend.layouts.master')
@section('title') {{ __('header.home_title') }} @endsection
@section('main-content')
@include('frontend.layouts.notification')

<!-- Body main wrapper start -->
<main class="main-area fix">

@if(count($banners)>0)
	<!-- Banner area start -->
	<section class="bd-banner-area banner-style-five">
		<div class="swiper bd-slider-active p-relative">
			<div class="swiper-wrapper slider-wrapper">
				@foreach($banners as $key=>$banner)
					<div class="swiper-slide {{(($key==0)? 'active' : '')}}">
						<div class="banner-slider-wrapper">
							<div class="banner-bg-image" data-background="{{ Storage::url($banner->photo) }}">
							</div>
							<div class="container">
								<div class="row">
									<div class="col-xxl-7 col-xl-9 col-lg-8">
										<div class="banner-five-content">
											<div class="banner-subtitle mb-10">{{$banner->subtitle}}</div>
											<h1 class="banner-title large white-text mb-25">{{$banner->title}}</h1>
											{{-- <p class="banner-description white-text mb-40">8700 TOURS ARE AVAILABLE, 
												<span class="warning-text">Book Now</span></p> --}}
											<div class="banner-btn">
												<a href="{{$banner->link}}" class="bd-primary-btn btn-style has-arrow is-bg radius-60">
													<span class="bd-primary-btn-arrow arrow-right"><i class="fa-regular fa-arrow-right"></i></span>
													<span class="bd-primary-btn-text">{{$banner->button}}</span>
													<span class="bd-primary-btn-circle"></span>
													<span class="bd-primary-btn-arrow arrow-left"><i class="fa-regular fa-arrow-right"></i></span>
												</a>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<!-- navigation button start -->
			<div class="banner-nav-btn banner-five-navigation d-none d-xxl-block">
				<div class="banner-navigation-btn-2">
					<button class="banner-navigation-prev"><i class="fa-regular fa-angle-left"></i></button>
					<button class="banner-navigation-next"><i class="fa-regular fa-angle-right"></i></button>
				</div>
			</div>
			<!-- navigation button end -->
		</div>
	</section>
	<!-- Banner area start -->
@endif

	<!-- activity area start -->
	<section class="bd-activity-area section-space fix">
		<div class="container">
			<div class="row gy-24 text-center align-items-center justify-content-center section-title-space">
				<div class="col-xl-4">
					<div class="section-title-wrapper">
						<span class="section-subtitle mb-10">Our Events</span>
						<h2 class="section-title">Common Events</h2>
					</div>
				</div>
			</div>
			<div class="row gy-24">
				@if($events)
                    @foreach($events as $event)
						<div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
							<div class="activity-wrapper activity-style activity-style-six">
								<div class="activity-thumb image-overly">
									<a href="{{route('event.detail',$event->slug)}}">
										@php
											$photo=explode(',',$event->photo);
										@endphp
                                        <img src="{{ Storage::url($event->photo) }}" class="img-responsive"  alt="{{ Storage::url($event->photo) }}" />
									</a>
								</div>
								<div class="activity-meta">
									<span><i class="icon-star"></i> {{$event->location}}</span>
								</div>
								<div class="activity-content-wrap">
									<div class="activity-content">
										<div class="activity-content-top d-flex align-items-center gap-10 justify-content-between">
											<div class="activity-title-wrap">
												<h6 class="underline">
													<a href="{{route('event.detail',$event->slug)}}">
														{{$event->event_type}}
													</a>
												</h6>
											</div>
											<div class="activity-btn">
												<a class="bd-icon-btn hover-style" href="{{route('event.detail',$event->slug)}}" target="_blank">
													<i class="fa-sharp fa-regular fa-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>
	<!-- activity area end -->

	<!-- tour area start -->
	<section class="bd-service-area section-space">
		<div class="container">
			<div class="row gy-24 text-center justify-content-center section-title-space">
				<div class="col-xxl-5 col-xl-6 col-lg-6 col-md-8">
					<div class="section-title-wrapper">
						<span class="section-subtitle mb-10">Top Materials</span>
						<h2 class="section-title">Dive into Our Range of Materials</h2>
					</div>
				</div>
			</div>
			<div class="row gy-24">
				@if($materials)
                    @foreach($materials as $material)
						<div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
							<div class="tour-wrapper style-five">
								<div class="tour-thumb-wrapper p-relative">
									<div class="tour-thumb image-overly">
										<a href="tour-details-right.html">
											@php
                                                $photo=explode(',',$material->photo);
                                            @endphp
                                        	<img src="{{ Storage::url($material->photo) }}" class="img-responsive"  alt="{{ Storage::url($material->photo) }}" />
										</a>
									</div>
								</div>
								<div class="tour-content">
									<h5 class="tour-title fw-5 underline mb-10">
										<a href="{{route('material.detail',$material->slug)}}">
											{{$material->material_name}}
										</a>
									</h5>
									<div class="tour-meta mb-5">
										<div class="tour-location d-flex gap-10 align-items-center">
											<i class="fa-regular fa-user"></i> 
											<a href="{{route('material.detail',$material->slug)}}">
												{{$material->target_age_group}} years
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				@endif
			</div>
		</div>
	</section>
	<!-- tour area end -->

</main>
<!-- Body main wrapper end -->

	
@endsection