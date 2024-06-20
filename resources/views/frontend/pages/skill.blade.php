@extends('frontend.layouts.master2')
@section('title') Skills @endsection
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
                                <h1 class="bd-breadcrumb-title">Skills</h1>
                                <div class="bd-breadcrumb-list">
                                    <span><a href="{{route('home')}}"><i class="icon-home"></i>Home</a></span>
                                    <span>Skills</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- tour-grid area start -->
    <section class="bd-tour-grid-area section-space">
        <div class="container">
            <div class="row gy-24">
                @if($skills)
                    @foreach($skills as $skill)
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                            <div class="tour-wrapper style-one">
                                <div class="p-relative">
                                    <div class="tour-thumb image-overly">
                                        <a href="{{route('skill.detail',$skill->slug)}}">
                                            @php
                                                $photo=explode(',',$skill->photo);
                                            @endphp
                                        <img src="{{ Storage::url($skill->photo) }}" class="img-responsive"  alt="{{ Storage::url($skill->photo) }}" />
                                        </a>
                                    </div>
                                </div>

                                <div class="tour-content">
                                    <h5 class="tour-title fw-5 underline mb-5">
                                        <a href="{{route('skill.detail',$skill->slug)}}">
                                            {{$skill->skill_name}}
                                        </a>
                                    </h5>
                                    <div class="tour-divider"></div>

                                    <div class="tour-meta d-flex align-items-center justify-content-between">
                                        <div class="tour-btn">
                                            <a class="bd-text-btn style-two" href="{{route('skill.detail',$skill->slug)}}">Read More
                                                <span class="icon__box">
                                                    <i class="fa-regular fa-arrow-right-long icon__first"></i>
                                                    <i class="fa-regular fa-arrow-right-long icon__second"></i>
                                                </span>
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
    <!-- tour-grid area end -->

</main>
<!-- Body main wrapper end -->

@endsection