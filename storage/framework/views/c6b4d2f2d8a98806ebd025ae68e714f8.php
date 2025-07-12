<?php $__env->startSection('style'); ?>
    <style>
        .pagination .text-gray-700 { 
            display: none; 
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="new-section comn-padding">
        <div class="container">
            <div class="comn-title mb-5 mt-0">
                <?php if(empty($category)): ?>
                    <?php if(empty($searchText)): ?>
                        <h2 class="comn-title-text">Our <span>Products</span></h2>
                    <?php else: ?>
                        <h2 class="comn-title-text">Showing Products for: <span> <?php echo e(ucwords(str_replace('-', ' ', $searchText))); ?> </span></h2>
                    <?php endif; ?>
                <?php else: ?>
                    <h2 class="comn-title-text">Showing Products for: <span> <?php echo e(ucwords(str_replace('-', ' ', $category))); ?> </span></h2>
                <?php endif; ?>
            </div>
            <div class="trending-card text-end mb-2">
                
            </div>
            <div class="new-grid">
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="new-card">
                        <button class="wishliat-btn" data-product-id="<?php echo e($product->id); ?>">
                            <i
                                class="<?php echo e(auth()->guard('customer')->check() && $product->isInCustomerWishlist() ? 'fa-solid' : 'fa-regular'); ?> fa-heart"></i>
                        </button>
                        <a href="<?php echo e(route('front.product-details', $product->slug)); ?>" class="product-link">
                            <div class="new-image">
                                <img src="<?php echo e(url('images/product-image')); ?>/<?php echo e($product->productImages->first()->image_path ?? ''); ?>"
                                    alt="">
                            </div>
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

            <!-- Pagination links -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- Previous Page Link -->
                            <li class="page-item <?php echo e($products->onFirstPage() ? 'disabled' : ''); ?>">
                                <a class="page-link" href="<?php echo e($products->previousPageUrl()); ?>" aria-label="Previous" tabindex="-1">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                    
                            <!-- Pagination Elements -->
                            <?php $__currentLoopData = $products->getUrlRange(1, $products->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="page-item <?php echo e($page == $products->currentPage() ? 'active' : ''); ?>">
                                    <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                            <!-- Next Page Link -->
                            <li class="page-item <?php echo e($products->hasMorePages() ? '' : 'disabled'); ?>">
                                <a class="page-link" href="<?php echo e($products->nextPageUrl()); ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project22\resources\views/front/product-list.blade.php ENDPATH**/ ?>