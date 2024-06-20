@extends('frontend.layouts.master2')
@section('title') Girls @endsection
@section('main-content')

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
                                <h1 class="bd-breadcrumb-title">Girls</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                    <span>Girls</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- blog-grid area start -->
    <div class="bd-blog-grid-area section-space">
        <div class="container">
            <div class="row gy-24">
                @if($girls)
                    @foreach($girls as $girl)
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="trip-wrapper trip-style-one p-relative">
                                <div class="trip-thumb image-overly">
                                    <a href="{{route('girl.detail',$girl->slug)}}">
                                        @php
                                            $photo=explode(',',$girl->photo);
                                        @endphp
                                        <img src="{{ Storage::url($girl->photo) }}" class="img-responsive"  alt="" />
                                    </a>
                                </div>
                                <div class="trip-tag">
                                    <div class="trip-number">
                                        <span><a href="{{route('girl.detail',$girl->slug)}}">{{$girl->age_group}} years</a></span>
                                    </div>
                                    <div class="trip-location">
                                        <span><a href="{{route('girl.detail',$girl->slug)}}">{{$girl->name}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- blog-grid area end -->

</main>
<!-- Body main wrapper end -->

@endsection