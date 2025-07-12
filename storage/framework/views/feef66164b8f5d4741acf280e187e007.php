<!-- resources/views/partials/banner.blade.php -->
<section class="banner-section">
    <img alt="" src="<?php echo e(asset('images/banner-element1.svg')); ?>" class="banner-ele-1">
    <img alt="" src="<?php echo e(asset('images/banner-element3.svg')); ?>" class="banner-ele-3">
    <img alt="" src="<?php echo e(asset('images/banner-element4.svg')); ?>" class="banner-ele-4">
    <div class="container">
        <div class="splide banner-splide">
            <div class="splide__track">
                <ul class="splide__list">
                    

                    <?php $__empty_1 = true; $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li class="splide__slide">
                            <div class="align-items-center banner-row row">
                                <div class="col-lg-5">
                                    <div class="banner-data">
                                        <h1><?php echo e($banner->title); ?></h1>
                                        <p><?php echo e($banner->description); ?></p>
                                        <a href="<?php echo e($banner->cta_url); ?>" class="comn-btn"><?php echo e($banner->cta_text); ?> <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="banner-image">
                                        <img alt="" src="<?php echo e(asset('images/banner-element2.svg')); ?>" class="banner-image-ele">
                                        <div class="banner-image-card-1"><img alt="banner-image" src="<?php echo e(url('images/banner')); ?>/<?php echo e($banner->image_1); ?>"></div>
                                        <div class="banner-image-card-2"><img alt="banner-image" src="<?php echo e(url('images/banner')); ?>/<?php echo e($banner->image_2); ?>"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\xampp\htdocs\project22\resources\views/layouts/front/partials/banner.blade.php ENDPATH**/ ?>