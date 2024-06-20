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
	<meta property="og:title" content="{{$girl->name}}">
	<meta property="og:image" content="{{$girl->photo}}">
	<meta property="og:description" content="{{$girl->description}}">
@endsection
@section('title') {{$girl->name}} @endsection
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
                                <h1 class="bd-breadcrumb-title">{{$girl->name}}</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                    <span>{{$girl->name}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- destinations-details area start -->
    <section class="bd-destinations-details-area section-space">
        <div class="container">
            <div class="row gy-24 justify-content-center">
                <div class="col-xxl-8 col-xl-8 col-lg-10">
                    <div class="destinations-details-wrapper">
                        <div class="destinations-details mb-25">
                            <div class="destinations-details-slider details-slide p-relative mb-30">
                                <div class="swiper details-slide-activation">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            @php
                                                $photo=explode(',',$girl->photo);
                                            @endphp
                                            <img src="{{ Storage::url($girl->photo) }}" class="img-responsive"  alt="{{ Storage::url($girl->photo) }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="destinations-details-content">
                                <h3 class="destinations-details-title mb-15">{{$girl->name}}
                                </h3>
                                {{-- <p class="mb-15">{!!$destination->description!!}</p> --}}
                                <div class="tour-details-list-box mb-35">
                                    <div class="tour-details-list-include">
                                        <ul>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                      <i class="icon-globe"></i>
                                   </span>
                                                Address: {{$girl->address}}
                                            </li>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                                    <i class="icon-flag"></i>
                                                </span>
                                                Age Group: {{$girl->age_group}} years
                                            </li>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                                    <i class="icon-flag"></i>
                                                </span>
                                                HIV Status: {{$girl->hiv_status}}
                                            </li>
                                            
                                            
                                        </ul>
                                    </div>
                                    <div class="tour-details-list-exclude">
                                        <ul>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                                    <i class="icon-flag"></i>
                                                </span>
                                                Schooling Status: {{$girl->schooling_status}}
                                            </li>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                                    <i class="fa-light fa-location-dot"></i>
                                                </span>
                                                Village: {{$girl->village}}
                                            </li>
                                            <li>
                                                <span class="list-icon has-big secondary">
                                      <i class="icon-globe"></i>
                                   </span>
                                                Date of Birth: {{$girl->date_of_birth}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="section-divider mt-30 mb-25"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- destinations-details area end -->

</main>
<!-- Body main wrapper end -->

@endsection