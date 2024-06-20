@extends('frontend.layouts.master2')
@section('meta')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="">
	{{-- <meta name="description" content="{{$post->summary}}"> --}}
	{{-- <meta property="og:url" content="{{route('blog-detail',$post->slug)}}"> --}}
	<meta property="og:type" content="article">
	<meta property="og:title" content="{{$event->title}}">
	<meta property="og:image" content="{{$event->photo}}">
	<meta property="og:description" content="{{$event->description}}">
@endsection
@section('title') {{$event->event_type}} @endsection
@section('main-content')
@include('frontend.layouts.notification')

<!-- Body main wrapper start -->
<main>
    <!-- breadcrumb area start -->
    <section class="bd-breadcrumb-area p-relative fix">
        <!-- breadcrumb background image -->
        <div class="bd-breadcrumb-bg" data-background="{{ asset('frontend/assets/images/bg/breadcrumb-bg.png') }}"></div>
        <div class="bd-breadcrumb-wrapper p-relative">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                            <div class="bd-breadcrumb-content text-center">
                                <h1 class="bd-breadcrumb-title">{{$event->title}}</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                    <span>Event</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- blog-details area start -->
    <section class="bd-tour-details-area section-space">
        <div class="container">
            <div class="row gy-24">
                <div class="col-xxl-8 col-xl-8 col-lg-7">
                    <div class="tour-details-wrapper">
                        <div class="tour-details mb-25">
                            <div class="tour-details-thumb details-slide-full mb-30">
                                @php
                                    $photo=explode(',',$event->photo);
                                @endphp
                                <img src="{{ Storage::url($event->photo) }}" class="img-responsive"  alt="" />
                            </div>
                            <div class="tour-details-content">
                                <h3 class="tour-details-title mb-15">{{$event->event_type}}</h3>
                                <div class="tour-details-destination-wrapper">
                                    <div class="tour-details-destination-info">
                                        <div class="search-icon-bg is-big">
                                            <span><i class="fa-light fa-clock"></i></span>
                                        </div>
                                        <div class="tour-details-destination-info-title">
                                            <p class="tour-details-destination-info-top mb-0">Start Date</p>
                                            <span class="tour-details-destination-info-bottom small">{{$event->start_date}}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="tour-details-destination-info">
                                        <div class="search-icon-bg is-big">
                                            <span><i class="icon-hourglass"></i></span>
                                        </div>
                                        <div class="tour-details-destination-info-title">
                                            <p class="tour-details-destination-info-top mb-0">End Date</p>
                                            <span class="tour-details-destination-info-bottom small">{{$event->end_date}}</span>
                                        </div>
                                    </div>
                                    <div class="tour-details-destination-info">
                                        <div class="search-icon-bg is-big">
                                            <span><i class="fa-light fa-location-dot"></i></span>
                                        </div>
                                        <div class="tour-details-destination-info-title">
                                            <p class="tour-details-destination-info-top mb-0">Location</p>
                                            <span class="tour-details-destination-info-bottom">{{$event->location}}</span>
                                        </div>
                                    </div>
                                </div>

                                <p class="mb-15">{!!$event->learning_outcomes!!}</p>                                                         
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details area end -->

</main>
<!-- Body main wrapper end -->


@endsection