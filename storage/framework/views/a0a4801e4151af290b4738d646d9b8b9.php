<!-- resources/views/layouts/front.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title', 'Moms Moonpie'); ?></title>
    <link href="<?php echo e(asset('images/favicon.ico')); ?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/splide.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/marqueefy.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/responsive.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('style'); ?>
</head>

<body>
    <?php echo $__env->make('layouts.front.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Main Content -->
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.front.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/splide.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/marqueefy.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
    <script src="<?php echo e(asset('js/common.js')); ?>"></script>
    <script>
        var loggedin = <?php echo e(auth()->guard('customer')->check() ? 'true' : 'false'); ?>;
    </script>

    <script>
        $('.wishliat-btn, .cart-wishlist-btn').on('click', function() {
            if (!loggedin) {
                window.location.href = "<?php echo e(route('front.customer-login')); ?>";
            }
            const productId = $(this).data('product-id');
            const $icon = $(this).find('i');
            const isAdding = $icon.hasClass('fa-regular');
            const url = isAdding ? "<?php echo e(route('front.wishlists.add')); ?>" :
                "<?php echo e(route('front.wishlists.remove')); ?>";

            $.ajax({
                url: url,
                method: 'POST',
                contentType: 'application/json',
                headers: {
                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                },
                data: JSON.stringify({
                    product_id: productId
                }),
                success: function(data) {
                    if (data.status === 'success') {
                        $icon.toggleClass('fa-regular fa-solid');
                        alert(data.message);
                        // toastr.success(data.message);
                    }
                }
            });
        });
    </script>
    <?php echo $__env->yieldContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\project22\resources\views/layouts/front.blade.php ENDPATH**/ ?>