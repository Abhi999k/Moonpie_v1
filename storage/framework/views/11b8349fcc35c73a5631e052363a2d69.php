<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="py-5">
        <div class="container">
            <h2 class="comn-title-text mb-5 mt-3 text-center">About <span>Us</span></h2>
            <div class="row">
                <?php echo $page->content; ?>

            </div>
        </div>
    </section>
    <!-- content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project22\resources\views/front/about-us.blade.php ENDPATH**/ ?>