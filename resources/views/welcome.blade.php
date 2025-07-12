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
                        @foreach([1, 2, 3, 1, 2, 3] as $i)
                            <li class="splide__slide">
                                <div class="trending-card trending-card-{{ $i }}">
                                    <div class="trending-image">
                                        <img src="{{ asset('assets/images/trending-img-' . $i . '.png') }}" alt="">
                                    </div>
                                    <div class="trending-data">
                                        <h4>@if($i == 1)Playful Designs, Perfect Fit@endif
                                            @if($i == 2)Stylish Clothes for Growing Kids@endif
                                            @if($i == 3)Comfort Meets Cute in Every Piece@endif
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pretium felis et ornare aliquet.</p>
                                    </div>
                                    <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="splide__arrows splide__arrows_top">
                    <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
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
                @foreach(['1' => 'Infants', '2' => 'Girls', '3' => 'Boys'] as $num => $label)
                    <div class="shop-card shop-card-{{ $num }} {{ $num != 1 ? 'pb-0' : '' }}">
                        @if($num == 3)
                            <img src="{{ asset('assets/images/banner-element1.svg') }}" class="banner-ele-1" alt="">
                        @endif
                        <div class="shop-image">
                            <img src="{{ asset('assets/images/shop-img-' . $num . '.png') }}" alt="">
                        </div>
                        <div class="shop-data">
                            <h3 class="comn-title-text">Shop For {{ $label }}</h3>
                            <button class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="new-section comn-padding">
        <div class="container">
            <div class="comn-title mb-3">
                <h2 class="comn-title-text">New <span>Collection</span></h2>
            </div>
            <div class="trending-card text-end mb-2">
                <button class="comn-btn">view all <i class="fa-solid fa-arrow-right"></i></button>
            </div>
            <div class="new-grid">
                @foreach(range(1, 8) as $i)
                    <div class="new-card">
                        <button class="wishliat-btn"><i class="fa-regular fa-heart"></i></button>
                        <div class="new-image">
                            <img src="{{ asset('assets/images/new-img-' . $i . '.png') }}" alt="">
                        </div>
                        <div class="star-row">
                            @for($s = 1; $s <= 4; $s++)
                                <i class="fa-solid fa-star"></i>
                            @endfor
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <h4 class="new-title">@if($i == 1 || $i == 5)Classic Printed Pajama Set@endif
                            @if($i == 2)Multi color flower print T-shirt@endif
                            @if($i == 3)Blue color Animal printed baby pillow@endif
                            @if($i == 4)infant swaddle blanket/sleeping bag@endif
                            @if($i == 6)infant car seat cushion@endif
                            @if($i == 7)baby girl tutu dress@endif
                            @if($i == 8)Designer Girls Baby Frock@endif
                        </h4>
                        <aside class="new-price-text">₹{{ [899, 1299, 499, 1680, 770, 930, 1820, 1820][$i-1] }}</aside>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="customers-section comn-padding">
        <img src="{{ asset('assets/images/customer-ele-1.svg') }}" class="customer-ele-1" alt="">
        <img src="{{ asset('assets/images/customer-ele-2.svg') }}" class="customer-ele-2" alt="">
        <div class="container">
            <div class="comn-title">
                <h2 class="comn-title-text">What Our Customers <span>Say</span></h2>
            </div>
            <div class="splide customers-splide">
                <div class="splide__track">
                    <div class="splide__list">
                        @foreach([1, 2, 1, 2] as $i)
                            <div class="splide__slide">
                                <div class="customers-card">
                                    <i class="fa-solid fa-quote-right"></i>
                                    <img src="{{ asset('assets/images/customer-img-' . $i . '.jpg') }}" alt="">
                                    <div class="star-row">
                                        @for($s = 1; $s <= 4; $s++)
                                            <i class="fa-solid fa-star"></i>
                                        @endfor
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                    <h3>Amazing Fabric</h3>
                                    <p>@if($i == 1)
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas imperdiet ipsum,
                                        eget eleifend libero suscipit vel. Mauris sit amet vehicula nibh.
                                    @else
                                        Fusce id venenatis libero, tempor rhoncus nunc. Sed eget neque odio. In eu rhoncus
                                        ligula. Fusce augue dolor, luctus et lorem nec, iaculis fringilla nibh.
                                    @endif</p>
                                    <h3 class="small-text">@if($i == 1)Anaya@endif @if($i == 2)Kabir@endif</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="splide__arrows splide__arrows_top">
                    <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide">
                        <i class="fa-solid fa-arrow-left-long"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide">
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
