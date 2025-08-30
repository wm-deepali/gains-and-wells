
<?php $__env->startSection('title'); ?>
Feedback
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
Feedback
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--site-main start-->
<div class="site-main">

    <!-- contact-form-section -->
<section class="prt-row padding_bottom_zero-section share-feedback-form-section clearfix mb-5">
    <div class="container">
        <div class="row g-0">
            <!-- Left Side Image -->
            <div class="col-lg-6">
                <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer-feedback prt-bg-layer"></div>
                    <div class="layer-content"></div>                           
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-37.png')); ?>" alt="col-bgimage-37">
            </div>

            <!-- Right Side Form -->
            <div class="col-lg-6">
                <div class="bg-base-grey spacing-25">
                    <!-- section title -->
                    <div class="section-title style7">
                        <div class="title-header">
                            <h2 class="title">Share Your <span>Feedback</span></h2>
                        </div>
                    </div><!-- section title end -->

                    <form action="#" class="contact_form clearfix" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <!-- Feedback Type -->
                            <div class="col-md-12 mb-2">
                                <select name="feedback_type" required>
                                    <option value="">Select Option</option>
                                    <option value="success_story">I want to write my Success Story</option>
                                    <option value="feedback">I want to share the Feedback</option>
                                </select>
                            </div>

                            <!-- Service Selection -->
                            <div class="col-md-12 mb-2">
                                <select name="service" required>
                                    <option value="">Select Service</option>
                                    <option value="wordpress_security">WordPress Security</option>
                                    <option value="software_integration">Software Integration</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <!-- Star Rating -->
                            <div class="col-md-12 mb-3">
                                <label>Rate Our Service:</label>
                                <div class="star-rating" style="font-size: 1.8rem; color: #ccc; cursor: pointer;">
                                    <span data-value="1">★</span>
                                    <span data-value="2">★</span>
                                    <span data-value="3">★</span>
                                    <span data-value="4">★</span>
                                    <span data-value="5">★</span>
                                </div>
                                <input type="hidden" name="rating" id="rating" value="">
                            </div>

                            <!-- Feedback Detail -->
                            <div class="col-md-12 mb-3">
                                <textarea name="feedback_detail" rows="4" placeholder="Write your feedback or story here..." required></textarea>
                            </div>

                            <!-- Full Name -->
                            <div class="col-md-12 mb-2">
                                <input name="full_name" type="text" placeholder="Full Name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-12 mb-2">
                                <input name="email" type="email" placeholder="Email ID" required>
                            </div>

                            <!-- Mobile -->
                            <div class="col-md-12 mb-2">
                                <input name="mobile_number" type="text" placeholder="Mobile Number" required>
                            </div>

                            <!-- Profile Picture -->
                            <div class="col-md-12 mb-3">
                                <label>Browse Profile Picture:</label>
                                <input name="profile_picture" type="file" accept="image/*">
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit">
                                    Submit
                                </button> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>                        
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const stars = document.querySelectorAll('.star-rating span');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function () {
            const value = this.getAttribute('data-value');
            ratingInput.value = value;

            stars.forEach(s => {
                s.style.color = (s.getAttribute('data-value') <= value) ? 'gold' : '#ccc';
            });
        });

        star.addEventListener('mouseover', function () {
            const value = this.getAttribute('data-value');
            stars.forEach(s => {
                s.style.color = (s.getAttribute('data-value') <= value) ? 'gold' : '#ccc';
            });
        });

        document.querySelector('.star-rating').addEventListener('mouseleave', function () {
            const value = ratingInput.value;
            stars.forEach(s => {
                s.style.color = (s.getAttribute('data-value') <= value) ? 'gold' : '#ccc';
            });
        });
    });
});
</script>

    <!-- contact-form-section-end -->


</div><!-- site-main end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/feedbacks.blade.php ENDPATH**/ ?>