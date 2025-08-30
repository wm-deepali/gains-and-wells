
<?php $__env->startSection('title'); ?>
Become a Channel Partner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
Become a Channel Partner
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--site-main start-->
<div class="site-main">

    <!-- contact-form-section -->
<section class="prt-row padding_bottom_zero-section channel-partner-form-section clearfix mb-5">
    <div class="container">
        <div class="row g-0">
            <!-- Left Side Image -->
            <div class="col-lg-6">
                <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer-partner prt-bg-layer"></div>
                    <div class="layer-content"></div>                           
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/tax-img.png')); ?>" alt="col-bgimage-37">
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-6">
                <div class="bg-base-grey spacing-25">
                    <!-- section title -->
                    <div class="section-title style7">
                        <div class="title-header">
                            <h2 class="title">Become a <span>Channel Partner</span></h2>
                        </div>
                    </div><!-- section title end -->

                    <form action="#" class="contact_form clearfix" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <!-- Select Type -->
                            <div class="col-md-12 mb-2">
                                <select name="partner_type" required>
                                    <option value="">Select: Individual or Agency</option>
                                    <option value="individual">Individual</option>
                                    <option value="agency">Agency</option>
                                </select>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-12 mb-2">                  
                                <input name="full_name" type="text" placeholder="Full Name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-12 mb-2">
                                <input name="email" type="email" placeholder="Email ID" required>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-12 mb-2">
                                <input name="mobile_number" type="text" placeholder="Mobile Number" required>
                            </div>

                            <!-- Business Name -->
                            <div class="col-md-12 mb-2">
                                <input name="business_name" type="text" placeholder="Business Name" required>
                            </div>

                            <!-- Website -->
                            <div class="col-md-12 mb-2">
                                <input name="website" type="text" placeholder="Website">
                            </div>

                            <!-- Full Address -->
                            <div class="col-md-12 mb-2">
                                <textarea name="full_address" rows="2" placeholder="Full Address" required></textarea>
                            </div>

                            <!-- Country -->
                            <div class="col-md-6 mb-2">
                                <select name="country">
                                    <option value="">Select Country</option>
                                    <option value="India">India</option>
                                    <option value="USA">USA</option>
                                    <option value="UK">UK</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>

                            <!-- State -->
                            <div class="col-md-6 mb-2">
                                <select name="state">
                                    <option value="">Select State</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Karnataka">Karnataka</option>
                                </select>
                            </div>

                            <!-- City -->
                            <div class="col-md-6 mb-2">
                                <select name="city">
                                    <option value="">Select City</option>
                                    <option value="Lucknow">Lucknow</option>
                                    <option value="Mumbai">Mumbai</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Bangalore">Bangalore</option>
                                </select>
                            </div>

                            <!-- Pin Code -->
                            <div class="col-md-6 mb-2">
                                <input name="pincode" type="text" placeholder="Pin Code">
                            </div>

                            <!-- Enter Detail -->
                            <div class="col-md-12 mb-3">
                                <textarea name="details" rows="4" placeholder="Enter Details" required></textarea>
                            </div>

                            <!-- Submit -->
                            <div class="mt-4">
                                <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit">Submit</button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>                        
        </div>
    </div>
</section>


    <!-- contact-form-section-end -->

   

</div><!-- site-main end-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/become-a-channel-partner.blade.php ENDPATH**/ ?>