<!-- resources/views/layouts/front/partials/header.blade.php -->
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="header-top">
            <div class="container">
                <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
                    <img alt="" src="<?php echo e(asset('images/logo.png')); ?>">
                </a>
                <div class="header-top-left">
                    <form role="search" method="get" action="<?php echo e(route('front.product-list', '')); ?>">
                        <input aria-label="Search" placeholder="Search" name="search">
                        <button type="submit">
                            <img alt="" src="<?php echo e(asset('images/search-icon.svg')); ?>">
                        </button>
                    </form>
                    <ul class="header-top-list">
                        <?php if(Auth::guard('customer')->check()): ?>
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false"><img alt=""
                                            src="<?php echo e(asset('images/account-icon.svg')); ?>">Account</a>
                                    <ul class="dropdown-menu" style="background-color:#0e0132;">
                                        <li><a class="dropdown-item" href="<?php echo e(route('front.my-account.orders')); ?>">My
                                                Orders</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="<?php echo e(route('front.my-account.profile')); ?>">My
                                                Profile</a>
                                        </li>
                                        
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li>
                                            <form id="logout-form" action="<?php echo e(route('front.customer-logout')); ?>"
                                                method="POST" style="display: none;">
                                                <?php echo csrf_field(); ?>
                                            </form>
                                            <aside>
                                                <a class="dropdown-item" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>
                                            </aside>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('front.customer-login')); ?>"><img alt=""
                                        src="<?php echo e(asset('images/account-icon.svg')); ?>">Login</a></li>
                        <?php endif; ?>

                        <li>
                            <a href="<?php echo e(route('front.wishlists.index')); ?>">
                                <img alt="Wishlist" src="<?php echo e(asset('images/wishlist-icon.svg')); ?>">Wishlist</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('front.cart')); ?>">
                                <img alt="My Cart" src="<?php echo e(asset('images/cart-icon.svg')); ?>">Cart
                                <?php
									$cartCount = 0;
									if(auth()->guard('customer')->check()){
										$cartCount = App\Models\CustomerCart::where('customer_id', auth()->guard('customer')->id())->count();
									}else{
										$cartCount = App\Models\CustomerCart::where('session_id', session()->getId())->count();
									}
                                ?>
                                <?php if($cartCount > 0): ?>
                                    <span class="badge badge-danger"><?php echo e($cartCount); ?></span>
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="<?php echo e(route('front.product-list')); ?>" class="nav-link">Shop</a></li>
                        <?php $__empty_1 = true; $__currentLoopData = App\Models\Category::where('is_active', 1)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="nav-item"><a href="<?php echo e(route('front.product-list', '')); ?>?catid=<?php echo e($category->id); ?>&category=<?php echo e($category->name); ?>"
                                class="nav-link"><?php echo e($category->name); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>

                        
                        
                        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH C:\xampp\htdocs\project22\resources\views/layouts/front/partials/header.blade.php ENDPATH**/ ?>