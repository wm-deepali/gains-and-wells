<?php $__env->startSection('title'); ?>
Career With Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
Career With Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--site-main start-->
<div class="site-main">

    <!-- contact-form-section -->
    <section class="prt-row padding_bottom_zero-section career-contact-form-section clearfix mb-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer-career prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/tax-img.png')); ?>" alt="col-bgimage-37">
            </div>

            <div class="col-lg-6">
                <div class="bg-base-grey spacing-25">
                    <!-- section title -->
                    <div class="section-title style7">
                        <div class="title-header">
                            <h2 class="title">Join Our Team <br><span>Career</span> Application</h2>
                        </div>
                    </div><!-- section title end -->

                    <form action="" method="post" class="contact_form clearfix" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="applying_for" class="form-label">Applying For</label>
                                <input id="applying_for" name="applying_for" type="text" class="form-control" placeholder="Position / Job Title" required value="<?php echo e(old('applying_for')); ?>">
                            </div>

                            <div class="col-md-12 mb-2">
                                <label for="full_name" class="form-label">Full Name</label>
                                <input id="full_name" name="full_name" type="text" class="form-control" placeholder="Full Name" required value="<?php echo e(old('full_name')); ?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="email" class="form-label">Email ID</label>
                                <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" required value="<?php echo e(old('email')); ?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                <input id="mobile_number" name="mobile_number" type="text" class="form-control" placeholder="Mobile Number" required value="<?php echo e(old('mobile_number')); ?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" name="gender" class="form-control" required>
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php echo e(old('gender')=='male'? 'selected':''); ?>>Male</option>
                                    <option value="female" <?php echo e(old('gender')=='female'? 'selected':''); ?>>Female</option>
                                    <option value="other" <?php echo e(old('gender')=='other'? 'selected':''); ?>>Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input id="dob" name="dob" type="date" class="form-control" required value="<?php echo e(old('dob')); ?>">
                            </div>

                            <div class="col-md-12 mb-2">
                                <label for="education" class="form-label">Educational Qualification</label>
                                <input id="education" name="education" type="text" class="form-control" placeholder="e.g. B.Com, M.Tech, Diploma" required value="<?php echo e(old('education')); ?>">
                            </div>

                            <div class="col-md-12 mb-2">
                                <label for="address" class="form-label">Address</label>
                                <textarea id="address" name="address" rows="2" class="form-control" placeholder="Full address" required><?php echo e(old('address')); ?></textarea>
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="city" class="form-label">City</label>
                                <input id="city" name="city" type="text" class="form-control" placeholder="City" required value="<?php echo e(old('city')); ?>">
                            </div>

                            <div class="col-md-6 mb-2">
                                <label for="resume" class="form-label">Upload Resume (optional)</label>
                                <input id="resume" name="resume" type="file" class="form-control" accept=".pdf,.doc,.docx">
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="additional_details" class="form-label">Enter Detail</label>
                                <textarea id="additional_details" name="additional_details" rows="4" class="form-control" placeholder="Any additional information, experience or links (LinkedIn, portfolio)"><?php echo e(old('additional_details')); ?></textarea>
                            </div>

                            <div class="col-md-12 mt-3">
                                <button class="submit prt-btn" type="submit" style="background:#000;">Submit Application</button>
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
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/career.blade.php ENDPATH**/ ?>