<!-- resources/views/home.blade.php -->


<?php $__env->startSection('content'); ?>
    <?php if(count($banners) > 0): ?>
        <?php echo $__env->make('layouts.front.partials.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="marqueefy moms-marqueefy" tabindex="0">
        <div class="content">
            <?php $__empty_1 = true; $__currentLoopData = $marqueeItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <span class="item"><?php echo e($item->content); ?></span>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
            <?php $__empty_1 = true; $__currentLoopData = $marqueeItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <span class="item"><?php echo e($item->content); ?></span>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>
            
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
                        <?php
                            $cardNo = 0;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $trendingProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php
                                $cardNo++;
                                if ($cardNo == 4) {
                                    $cardNo = 1;
                                }
                            ?>
                            <li class="splide__slide">
                                <div class="trending-card trending-card-<?php echo e($cardNo); ?>">
                                    <div class="trending-image"><img
                                            src="<?php echo e(url('images/product-image')); ?>/<?php echo e($product->productImages->first()->image_path ?? ''); ?>"
                                            alt=""></div>
                                    <div class="trending-data">
                                        <h4><?php echo e($product->title); ?></h4>
                                        <p><?php echo e($product->description); ?></p>
                                    </div>
                                    <a href="<?php echo e(route('front.product-details', $product->slug)); ?>" class="comn-btn">Shop Now <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="splide__arrows splide__arrows_top">
                    <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                        aria-controls="splide01-track"><i class="fa-solid fa-arrow-left-long"></i></button>
                    <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                        aria-controls="splide01-track"><i class="fa-solid fa-arrow-right-long"></i></button>
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
                    <div class="shop-image"><img src="<?php echo e(asset('images/shop-img-1.png')); ?>" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Infants</h3>
                        <a href="<?php echo e(route('front.product-list', 'shop-for-infants')); ?>" class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="shop-card shop-card-2 pb-0">
                    <div class="shop-image"><img src="<?php echo e(asset('images/shop-img-2.png')); ?>" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Girls</h3>
                        <a href="<?php echo e(route('front.product-list', 'shop-for-girls')); ?>" class="comn-btn">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="shop-card shop-card-3 pb-0">
                    <img src="<?php echo e(asset('images/banner-element1.svg"')); ?> class="banner-ele-1" alt="">
                    <div class="shop-image"><img src="<?php echo e(asset('images/shop-img-3.png')); ?>" alt=""></div>
                    <div class="shop-data">
                        <h3 class="comn-title-text">Shop For Boys</h3>
                        <a href="<?php echo e(route('front.product-list', 'shop-for-boys')); ?>" class="comn-btn">
                            Shop Now <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="new-section comn-padding">
        <div class="container">
            <div class="comn-title mb-3">
                <h2 class="comn-title-text">New <span>Collection</span></h2>
            </div>
            <div class="trending-card text-end mb-2">
                <a href="<?php echo e(route('front.product-list')); ?>" class="comn-btn">view all <i
                        class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="new-grid">
                <?php $__empty_1 = true; $__currentLoopData = $newCollections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="new-card">
                        <button class="wishliat-btn" data-product-id="<?php echo e($product->id); ?>">
                            <i class="<?php echo e(auth()->guard('customer')->check() && $product->isInCustomerWishlist() ? 'fa-solid' : 'fa-regular'); ?> fa-heart"></i>
                        </button>
                        <a href="<?php echo e(route('front.product-details', $product->slug)); ?>" class="product-link">
                            <div class="new-image"><img
                                    src="<?php echo e(url('images/product-image')); ?>/<?php echo e($product->productImages->first()->image_path ?? ''); ?>"
                                    alt=""></div>
                            <div class="star-row">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h4 class="new-title"><?php echo e($product->title); ?></h4>
                            
                            <aside class="new-price-text">
                                <span class="h5">₹<?php echo e($product->net_price); ?></span>
                                <br>
                                <span class="text-muted">M.R.P.:<del> <?php echo e($product->mrp); ?></del></span>
                            </aside>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if(count($testimonials) > 0): ?>
        <section class="customers-section comn-padding">
            <img src="<?php echo e(asset('images/customer-ele-1.svg')); ?>" class="customer-ele-1" alt="">
            <img src="<?php echo e(asset('images/customer-ele-2.svg')); ?>" class="customer-ele-2" alt="">
            <div class="container">
                <div class="comn-title">
                    <h2 class="comn-title-text">What Our Customers <span>Say</span></h2>
                </div>
                <div class="splide customers-splide">
                    <div class="splide__track">
                        <div class="splide__list">
                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="splide__slide">
                                    <div class="customers-card">
                                        <i class="fa-solid fa-quote-right"></i>
                                        <img src="<?php echo e(url('images/testimonial')); ?>/<?php echo e($testimonial->image); ?>" alt="<?php echo e($testimonial->customer_name); ?>">
                                        <div class="star-row">
                                            <?php for($i = 1; $i <= 5; $i++): ?>
                                                <i class="fa-solid <?php echo e($i <= $testimonial->rating ? 'fa-star' : ($i - 0.5 == $testimonial->rating ? 'fa-star-half-stroke' : 'fa-star-outline')); ?>"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <h3><?php echo e($testimonial->title); ?></h3>
                                        <p><?php echo e($testimonial->review); ?></p>
                                        <h3 class="small-text"><?php echo e($testimonial->customer_name); ?></h3>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="splide__arrows splide__arrows_top">
                        <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                            aria-controls="splide01-track"><i class="fa-solid fa-arrow-left-long"></i></button>
                        <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                            aria-controls="splide01-track"><i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php
    // php global functions here

    function currency(){
        return '₹';
    }
?>
<?php if(session('success')): ?>
    <script>
        alert("<?php echo e(session('success')); ?>");
    </script>
<?php endif; ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project22\resources\views/front/index.blade.php ENDPATH**/ ?>