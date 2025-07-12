@extends('layouts.front')

@section('content')
    @include('layouts.front.partials.banner')

    <div class="marqueefy moms-marqueefy" tabindex="0">
        <div class="content">
            <span class="item">kids-wear, redefined comfort</span>
            <span class="item">Soft, breathable, and stylish for kids</span>
            <span class="item">Quality kids clothing made in India</span>
            <span class="item">Dress your child in pure Indian comfort</span>
            <span class="item">kids-wear, redefined comfort</span>
            <span class="item">Soft, breathable, and stylish for kids</span>
            <span class="item">Quality kids clothing made in India</span>
            <span class="item">Dress your child in pure Indian comfort</span>
        </div>
    </div>

    <section class="trending-section comn-padding">
        <div class="container">
            <div class="comn-title">
                <h2 class="comn-title-text">Trending <span>Now</span></h2>
                <p class="comn-title-para">for Your Little Ones</p>
            </div>
            <div class="trending-splide splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="trending-card trending-card-1">
                                <div class="trending-image"><img src="{{ asset('images/trending-img-1.png') }}" alt=""></div>
                                <div class="trending-data">
                                    <h4>Playful Designs, Perfect Fit</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium felis et ornare aliquet.</p>
                                </div>
                                <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="trending-card trending-card-2">
                                <div class="trending-image"><img src="{{ asset('images/trending-img-2.png') }}" alt=""></div>
                                <div class="trending-data">
                                    <h4>Stylish Clothes for Growing Kids</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium felis et ornare aliquet.</p>
                                </div>
                                <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="trending-card trending-card-3">
                                <div class="trending-image"><img src="{{ asset('images/trending-img-3.png') }}" alt=""></div>
                                <div class="trending-data">
                                    <h4>Comfort Meets Cute in Every Piece</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium felis et ornare aliquet.</p>
                                </div>
                                <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </li>
                        <!-- Repeat slides with asset() -->
                    </ul>
                </div>
                <div class="splide__arrows splide__arrows_top">
                    <button class="splide__arrow splide__arrow--prev" type="button"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="splide__arrow splide__arrow--next" type="button"><i class="fa-solid fa-arrow-right-long"></i></button>
                </div>
            </div>
        </div>
    </section>

    <section class="shop-section">
        <div class="container">
            <div class="comn-title">
                <h2 class="comn-title-text">Shop By <span>Categories</span></h2>
            </div>
            <div class="shop-grid">
                <div class="shop-card shop-card-1">
                    <div class="shop-image"><img src="{{ asset('images/shop-img-1.png') }}" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Infants</h3>
                        <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="shop-card shop-card-2 pb-0">
                    <div class="shop-image"><img src="{{ asset('images/shop-img-2.png') }}" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Girls</h3>
                        <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
                <div class="shop-card shop-card-3 pb-0">
                    <img src="{{ asset('images/banner-element1.svg') }}" class="banner-ele-1" alt="">
                    <div class="shop-image"><img src="{{ asset('images/shop-img-3.png') }}" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Boys</h3>
                        <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Do the same for rest of the sections -->
    <!-- Just replace every: src="images/... with src="{{ asset('images/...') }}" -->

@endsection
