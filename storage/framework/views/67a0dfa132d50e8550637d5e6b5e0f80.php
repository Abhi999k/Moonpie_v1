<footer>
    <img src="<?php echo e(asset('images/banner-element3.svg')); ?>" class="banner-ele-3" alt="">
    <img src="<?php echo e(asset('images/footer-ele-1.svg')); ?>" class="footer-ele-1" alt="">
    <div class="footer-top">
        <div class="container">
            <div class="footer-top-row">
                <div class="footer-top-card">
                    <img src="<?php echo e(asset('images/footer-icon-2.svg')); ?>" alt="">
                    <aside>Free Shipping Above ₹1499</aside>
                </div>
                <div class="footer-top-card">
                    <img src="<?php echo e(asset('images/footer-icon-4.svg')); ?>" alt="">
                    <aside>gift - wrap &#38; ready to give</aside>
                </div>
                <div class="footer-top-card">
                    <img src="<?php echo e(asset('images/footer-icon-1.svg')); ?>" alt="">
                    <aside>Easy Free Returns</aside>
                </div>
                <div class="footer-top-card">
                    <img src="<?php echo e(asset('images/footer-icon-3.svg')); ?>" alt="">
                    <aside>Secure Payment</aside>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-middle">
            <div class="footer-card">
                <h6 class="footer-title">Categories</h6>
                <ul class="footer-list">
					<?php $__empty_1 = true; $__currentLoopData = App\Models\Category::where('is_active', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="nav-item"><a href="<?php echo e(route('front.product-list', '')); ?>?catid=<?php echo e($category->id); ?>&category=<?php echo e($category->name); ?>"
                                class="nav-link"><?php echo e($category->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
					<!--
						<li><a href="<?php echo e(url('/products?catid=2&category=Shop%20for%20Boys')); ?>">Shop for Boys</a></li>
						<li><a href="<?php echo e(url('/products?catid=2&category=Shop%20for%20Boys')); ?>">Shop for Girls</a></li>
						<li><a href="<?php echo e(url('/products?catid=2&category=Shop%20for%20Boys')); ?>">Shop for Infants</a></li>
						<li><a href="<?php echo e(url('/products?catid=2&category=Shop%20for%20Boys')); ?>">Gifting</a></li>
					-->
                </ul>
            </div>
            <div class="footer-card">
                <h6 class="footer-title">Information</h6>
                <ul class="footer-list">
                    <li><a href="<?php echo e(route('front.shipping-policy')); ?>">Shipping Policy</a></li>
                    <li><a href="<?php echo e(route('front.returns-policy')); ?>">Returns Policy</a></li>
                    <li><a href="<?php echo e(route('front.privacy-policy')); ?>">Privacy Policy</a></li>
                    <li><a href="<?php echo e(route('front.terms-and-conditions')); ?>">Terms &#38; Conditions</a></li>
                    <li><a href="<?php echo e(route('front.contact-us')); ?>">Contact Us</a></li>
                    <li><a href="<?php echo e(route('front.about-us')); ?>">About Us</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <h6 class="footer-title">My Account</h6>
                <ul class="footer-list">
					<?php if(auth()->guard('customer')->guest()): ?>
                    <li><a href="">Log in</a></li>
					<?php endif; ?>
                    <li><a href="">Refer a Friend</a></li>
                    <li><a href="<?php echo e(route('front.my-account.profile')); ?>">My Profile</a></li>
                    <li><a href="<?php echo e(route('front.wishlists.index')); ?>">My Wishlist</a></li>
                </ul>
            </div>
            <div class="footer-card">
                <a class="navbar-brand" href="index.html"><img src="<?php echo e(asset('images/logo.png')); ?>" alt=""></a>
                <h6 class="footer-title">Follow Us</h6>
                <ul class="social-list">
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© <?php echo e(date('Y')); ?> Moms Moonpie. All Rights Reserved</p>
            <img src="<?php echo e(asset('images/card-image.png')); ?>" alt="">
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\project22\resources\views/layouts/front/partials/footer.blade.php ENDPATH**/ ?>