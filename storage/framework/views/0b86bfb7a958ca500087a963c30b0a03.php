<?php $__env->startSection('style'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jquery-picZoomer.css')); ?>">
    <style>
		/*
        .cart-wishlist-btn {
            margin-left: 2%;
            width: 18px;
            height: 18px;
            background-color: transparent;
            padding: 0;
            border: none;
            font-size: 18px;
            color: var(--primary-color);
        }
		*/
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center picZoomer">
                        <?php
                            $obj = $product->productImages ?? [];

                            $images = !empty($obj) ? $obj->toArray() : [];
                            $defaultSet = false;
                            foreach ($images as $key => $value) {
                                if ($value['is_default'] == 1) {
                                    $defaultSet = true;
                                    break;
                                }
                            }
                            if ($defaultSet) {
                                $defaultImage = collect($images)->firstWhere('is_default', 1)['image_path'];
                            } else {
                                $defaultImage = $images[0]['image_path'];
                            }
                        ?>
                        <img src="<?php echo e(url('images/product-image')); ?>/<?php echo e($defaultImage ?? ''); ?>"
                            style="max-width: 100%; max-height: 100vh; margin: auto;" id="main-image" class="rounded-4 fit" alt="<?php echo e($product->title); ?>">
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a onclick="changeImg(this);" data-image="<?php echo e(url('images/product-image')); ?>/<?php echo e($image['image_path'] ?? ''); ?>" class="border mx-1 rounded-2"  data-type="image"
                                href="javascript:void(0);"
                                class="item-thumb">
                                <img width="60" height="60" class="rounded-2"
                                    src="<?php echo e(url('images/product-image')); ?>/<?php echo e($image['image_path'] ?? ''); ?>" />
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </a>
                    </div>
                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        
                        <h4 class="title text-dark">
                            <?php echo e($product->title); ?>

                        </h4>
                        <div class="d-flex flex-row my-3">
                            <div class="text-warning mb-1 me-2">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="ms-1">
                                    4.5
                                </span>
                            </div>
                            <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                            <?php if($product->is_in_stock == 1): ?>
                                <span class="text-success ms-2">In stock</span>
                            <?php else: ?>
                                <span class="text-danger ms-2">Out of stock</span>
                            <?php endif; ?>

                           

                        </div>
                        <div class="mb-3">
                            <span class="h5">₹ <?php echo e($product->net_price); ?></span>
                            <br>
                            <span class="text-muted">M.R.P.:<del> <?php echo e($product->mrp); ?></del></span>

                            
                        </div>

                        <div class="row mb-4">
                            <dt class="col-3 d-none">Age Group:</dt>
                            <dd class="col-9 d-none"><?php echo e($product->age_group); ?></dd>

                            <dt class="col-3">Type:</dt>
                            <dd class="col-9"><?php echo e($product->productType->title); ?></dd>

                            <dt class="col-3">Color</dt>
                            <dd class="col-9"><?php echo e($product->color); ?></dd>
							
							<dt class="col-3">Description</dt>
                            <dd class="col-9"><?php echo $product->description; ?></dd>
                        </div>

                        <div class="row">
                            <?php if($product->is_size_available == 1): ?>
                                <div class="col-md-6 col-12">
                                    <label class="mb-2">Size</label>
                                    <select name="product-size" id="product-size" class="form-control" onchange="getProductInventory(this.value)">
                                        <option value="">Select a size</option>
                                        <?php $__empty_1 = true; $__currentLoopData = $productSizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <option value="<?php echo e($size->id); ?>"><?php echo e($size->size); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <?php endif; ?>
                                    </select>
                                </div>
                            <?php endif; ?>
                            <p id="size-err" class="text-danger"></p>
							<div class="col-md-6 col-12">
								<label class="mb-2 d-block">Quantity</label>
								<div class="input-group mb-3" style="width: 170px;">
									<button class="btn btn-white border border-secondary px-3"
											onclick="changeQty('minus')" type="button" id="button-addon1"
											data-mdb-ripple-color="dark">
										<i class="fas fa-minus"></i>
									</button>
									<input type="text" id="quantity"
										   class="form-control text-center border border-secondary" placeholder="1"
										   aria-label="Example text with button addon" aria-describedby="button-addon1"
										   value="1" min="1" />
									<button class="btn btn-white border border-secondary px-3"
											onclick="changeQty('plus')" type="button" id="button-addon2"
											data-mdb-ripple-color="dark">
										<i class="fas fa-plus"></i>
									</button>
								</div>
							</div>
                        </div>
                        <input type="hidden" name="inventory-qty" id="inventory-qty" value="<?php echo e($product->units_available); ?>">

                        <div class="row">
                            <div class="col-md-4 col-6 d-none">
                                <label class="mb-2">Size</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>Small</option>
                                </select>
                            </div>
                            <?php if($product->is_in_stock == 1): ?>
                                <div class="col-md-4 col-8">
                                    <a href="javascript:" data-url="<?php echo e(route('front.cart.add')); ?>" onclick="addToCart('<?php echo e($product->id); ?>', <?php echo e($product->is_size_available); ?>)"
                                        class="btn btn-primary shadow-0 mt-1">
                                        <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                                </div>
								<div class="col-md-4 col-8">
                                    <button href="javascript:" class="btn btn-danger cart-wishlist-btn" data-product-id="<?php echo e($product->id); ?>">
                                        <i class="me-1 <?php echo e(auth()->guard('customer')->check() && $product->isInCustomerWishlist() ? 'fa-solid' : 'fa-regular'); ?> fa-heart"></i> Add to Wishlist </button>
                                </div>
                            <?php endif; ?>
                        </div>
                        

                        
                    </div>
                </main>
            </div>
        </div>
    </section>
    <!-- content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/jquery.picZoomer.js')); ?>"></script>
    <script>
        $('.picZoomer').picZoomer();
        var addToCartUrl = "<?php echo e(route('front.cart.add')); ?>";
        var getProductInventoryUrl = "<?php echo e(route('front.product-inventory')); ?>";
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project22\resources\views/front/product-details.blade.php ENDPATH**/ ?>