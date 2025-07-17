@extends('layouts.app-public')

@section('title', 'Home')

@section('content')
<div class="site-wrapper-reveal">
    <div class="hero-box-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-area" id="product-preview">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us-area section-space--ptb_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-us-content_6 text-center">
                        <h2>Maison de Vue</h2>
                        <p><small>
                            Maison de Vue is a luxury interior production house, rooted in timeless elegance and refined craftsmanship.
                            We specialize in curating spaces that whisper sophistication — blending classic European sensibilities with modern functionality. Our work is not about trends, but about creating legacies.
                            Every line, every shadow, every texture is designed to embody quiet opulence — the kind that doesn’t speak loudly, but never goes unnoticed.
                        </small></p>
                        <p class="mt-5">We don't just build spaces, 
                            <span class="text-color-primary">we compose atmospheres.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-video-area overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-video-box">
                        <img src="{{ asset('Interior1.png') }}" alt="interior">
                        <div class="video-icon">
                            <a href="https://youtu.be/zumJJUL_ruM?si=RLfMxdDhzI9ZhUNl" class="popup-youtube">
                                <i class="linear-ic-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="our-brand-area section-space--pb_90">
        <div class="container">
            <div class="brand-slider-active">
                @for ($i = 1; $i <= 8; $i++)
                    <div class="col-lg-12">
                        <div class="single-brand-item">
                            <a href="#"><img src="{{ asset("assets/images/brand/partnerb$i.png") }}" class="img-fluid" alt="Brand $i"></a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="our-member-area section-space--pb_120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="member-box">
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-4">
                                <div class="section-title small-mb__40 tablet-mb__40">
                                    <h4 class="section-title">Join the community!</h4>
                                    <p>Become one of the member and get discount 48% off</p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8">
                                <div class="member-wrap">
                                    <form action="#" class="member--two">
                                        <input class="input-box" type="text" placeholder="Your email address">
                                        <button class="submit-btn"><i class="icon-arrow-right"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addition_css')
<!-- Tambahan CSS jika perlu -->
@endsection

@section('addition_script')
<script src="{{ asset('pages/js/home.js') }}"></script>
@endsection
