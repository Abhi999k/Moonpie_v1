<?php $__env->startSection('title'); ?>
    Checkout | Moms Moonpie
<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php
    $user = auth()->guard('customer')->user();
?>
<?php $__env->startSection('content'); ?>
    <!-- content -->
    <section class="py-5">
        <div class="container mt-5">
            <h2 class="comn-title-text mb-5 text-center">My <span>Profile</span></h2>
            <form action="<?php echo e(route('front.my-account.profile-update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="row mb-4">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="col-md-12">
                        <div class="card">
                            
                            <div class="card-body">
                                <b>Personal Information</b>
                                <hr>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstname" class="form-label">Firstname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            value="<?php echo e($customer->firstname); ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastname" class="form-label">Lastname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            value="<?php echo e($customer->lastname); ?>" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastname" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="<?php echo e($customer->email); ?>" disabled required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="contact_number" class="form-label">Contact Number <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="contact_number"
                                            value="<?php echo e($customer->contact_number); ?>" name="contact_number" disabled required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping and Billing Address Section -->
                <div class="row mb-4">
                    <!-- Shipping Address -->
                    <div class="col-md-6">
                        <div class="card">
                            
                            <div class="card-body">
                                <b>Shipping Address</b>
                                <hr>
                                <div class="mb-3">
                                    <label for="shipping_street_address" class="form-label">Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="shipping_street_address"
                                        name="shipping_street_address" value="<?php echo e($customer->shipping_street_address); ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="shipping_state_id" class="form-label">State <span class="text-danger">*</span></label>
                                        <select class="form-control" id="shipping_state_id" name="shipping_state_id" required>
                                            <option value="">Select State</option>
                                            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($state->id); ?>" <?php if($state->id == $customer->shipping_state_id): ?> <?php if(true): echo 'selected'; endif; ?> <?php endif; ?>><?php echo e($state->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="shipping_city_id" class="form-label">City <span class="text-danger">*</span></label>
                                        <select class="form-control" id="shipping_city_id" name="shipping_city_id" required>
                                            <option value="">Select City</option>
                                            <?php $__currentLoopData = $shippingCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($city->id); ?>" <?php if($city->id == $customer->shipping_city_id): ?> <?php if(true): echo 'selected'; endif; ?> <?php endif; ?>><?php echo e($city->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="shipping_postal_code" class="form-label">Zip Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="shipping_postal_code"
                                            name="shipping_postal_code" value="<?php echo e($customer->shipping_postal_code); ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Billing Address -->
                    <div class="col-md-6">
                        <div class="card">
                            
                            <div class="card-body">
                                <b>Billing Address</b>
                                <hr>
                                <div class="mb-3">
                                    <label for="billing_street_address" class="form-label">Address
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="billing_street_address"
                                        name="billing_street_address" value="<?php echo e($customer->billing_street_address); ?>" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label for="billing_state_id" class="form-label">State <span class="text-danger">*</span></label>
                                        <select class="form-control" id="billing_state_id" name="billing_state_id" required>
                                            <option value="">Select State</option>
                                            <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($state->id); ?>" <?php if($state->id == $customer->billing_state_id): ?> <?php if(true): echo 'selected'; endif; ?> <?php endif; ?>><?php echo e($state->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="billing_city_id" class="form-label">City <span class="text-danger">*</span></label>
                                        <select class="form-control" id="billing_city_id" name="billing_city_id" required>
                                            <option value="">Select City</option>
                                            <?php $__currentLoopData = $billingCities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($city->id); ?>" <?php if($city->id == $customer->billing_city_id): ?> <?php if(true): echo 'selected'; endif; ?> <?php endif; ?>><?php echo e($city->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-4 mb-3">
                                        <label for="billing_postal_code" class="form-label">Zip Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="billing_postal_code"
                                            name="billing_postal_code" value="<?php echo e($customer->billing_postal_code); ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-2">
                        <button type="submit" style="background-color:#0e0132"
                            class="btn btn-primary btn-lg w-100">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    // When state changes, fetch the corresponding cities
    $('#shipping_state_id').change(function() {
        var stateId = $(this).val(); // Get the selected state ID

        if(stateId) {
            $.ajax({
                url: '<?php echo e(route('front.my-account.get-cities', '')); ?>/' + stateId, // URL to fetch cities based on state
                method: 'GET',
                success: function(response) {
                    $('#shipping_city_id').empty(); // Clear existing options
                    $('#shipping_city_id').append('<option value="">Select City</option>');
                    response.cities.forEach(function(city) {
                        $('#shipping_city_id').append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                }
            });
        } else {
            $('#shipping_city_id').empty();
            $('#shipping_city_id').append('<option value="">Select City</option>');
        }
    });

    $('#billing_state_id').change(function() {
        var stateId = $(this).val(); // Get the selected state ID

        if(stateId) {
            $.ajax({
                url: '<?php echo e(route('front.my-account.get-cities', '')); ?>/' + stateId, // URL to fetch cities based on state
                method: 'GET',
                success: function(response) {
                    $('#billing_city_id').empty(); // Clear existing options
                    $('#billing_city_id').append('<option value="">Select City</option>');
                    response.cities.forEach(function(city) {
                        $('#billing_city_id').append('<option value="' + city.id + '">' + city.name + '</option>');
                    });
                }
            });
        } else {
            $('#billing_city_id').empty();
            $('#billing_city_id').append('<option value="">Select City</option>');
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project22\resources\views/front/my-account/profile.blade.php ENDPATH**/ ?>