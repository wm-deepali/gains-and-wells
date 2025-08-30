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
    <section class="prt-row padding_bottom_zero-section contact-us-contact-form-section clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                        <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                        <div class="layer-content"></div>                           
                    </div>
                    <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-37.png')); ?>" alt="col-bgimage-37">
                </div>
                <div class="col-lg-6">
                    <div class="bg-base-grey spacing-25">
                        <!-- section title -->
                        <div class="section-title style7">
                            <div class="title-header">
                                <h2 class="title">Have be any question? <br>feel free to <span>Contact</span></h2>
                            </div>
                        </div><!-- section title end -->
                        <form action="<?php echo e(route('submit.quote')); ?>" method="post" class="contact_form clearfix">
    <?php echo csrf_field(); ?>
    <div class="row">
        <div class="col-md-6">                  
            <input name="first_name" type="text" placeholder="First Name" required>
        </div>

        <div class="col-md-6">                  
            <input name="last_name" type="text" placeholder="Last Name" required>
        </div>
        <select name="service_id" class="form-control" required>
        <option value="">Select Services</option>
        <?php $__currentLoopData = App\Helpers\Helper::getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($service->id); ?>"><?php echo e($service->service); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

        <div class="col-md-12">
            <input name="mobile_number" type="text" placeholder="Mobile Number" required>
        </div>

        <div class="col-md-12">
            <input name="email" type="email" placeholder="Email Address" required>
        </div>

        <div class="col-md-12">
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>

        <div class="col-md-12 mt-4">
            <button class="submit prt-btn" type="submit">Submit Quote</button> 
        </div>
    </div>
</form>
                    </div>
                </div>                        
            </div>
        </div>
    </section>
    <!-- contact-form-section-end -->

    <!-- contact-us-iconbox-section -->
    <section class="prt-row contact-us-iconbox-section clearfix">
        <div class="container">
            <div class="row g-0 prt-vertical_sep">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-phone-call"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>call us on</h3>
                            </div>
                            <div class="featured-desc">
                                <a href="tel:+65416541654165">+98 060 712 34 & 812 34</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-email"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Email</h3>
                            </div>
                            <div class="featured-desc">
                                <a href="mailto:supportyou@info.com">supportyou@info.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Opening hours</h3>
                            </div>
                            <div class="featured-desc">
                                <span>Mon-Sat: 09.00 to 07.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="featured-icon-box icon-align-top-content style19">
                        <div class="featured-icon">
                            <div class="prt-icon">
                                <i class="flaticon-share"></i>
                            </div>
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Share</h3>
                            </div>
                            <div class="featured-desc">
                                <span>Facebook, Twitter, Instagram</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-us-iconbox-section-end -->

    <!-- our-branches-section -->
    <section class="prt-row contact-us-our-branches-section bg-base-grey clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="section-title title-style-center_text style5">
                        <div class="title-header">
                            <h2 class="title">20+ Across worldwide <span>Branches</span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
            <div class="row mt_15">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="featured-imagebox featured-imagebox-contact">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="<?php echo e(asset('assets/images/contact-us/01.png')); ?>" width="896" height="484" alt="contact-us-01">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>New york hospital</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="prt-list style9">
                                    <li>
                                        <label>Address:</label><span>Peachtree St Atlanta, USA</span>
                                    </li>
                                    <li>
                                        <label>Contact Number:</label><a href="tel:+65416545465">+123 456 7890</a>
                                    </li>
                                    <li>
                                        <label>Email Us:</label><a href="mailto:supportrt@example.com">supportrt@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-bottom">
                                <a href="https://goo.gl/maps/q7ANcwsbA836pCaa9" class="prt-btn btn-inline"><span>View Directions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="featured-imagebox featured-imagebox-contact">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="<?php echo e(asset('assets/images/contact-us/02.png')); ?>" width="896" height="484" alt="contact-us-02">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>Atlanta hospital</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="prt-list style9">
                                    <li>
                                        <label>Address:</label><span>Peachtree St Atlanta, USA</span>
                                    </li>
                                    <li>
                                        <label>Contact Number:</label><a href="tel:+65416545465">+123 456 7890</a>
                                    </li>
                                    <li>
                                        <label>Email Us:</label><a href="mailto:supportrt@example.com">supportrt@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-bottom">
                                <a href="https://goo.gl/maps/q7ANcwsbA836pCaa9" class="prt-btn btn-inline"><span>View Directions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="featured-imagebox featured-imagebox-contact">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="<?php echo e(asset('assets/images/contact-us/03.png')); ?>" width="896" height="484" alt="contact-us-03">
                        </div>
                        <div class="featured-content">
                            <div class="featured-title">
                                <h3>San Fransisco hospital</h3>
                            </div>
                            <div class="featured-desc">
                                <ul class="prt-list style9">
                                    <li>
                                        <label>Address:</label><span>Peachtree St Atlanta, USA</span>
                                    </li>
                                    <li>
                                        <label>Contact Number:</label><a href="tel:+65416545465">+123 456 7890</a>
                                    </li>
                                    <li>
                                        <label>Email Us:</label><a href="mailto:supportrt@example.com">supportrt@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="featured-bottom">
                                <a href="https://goo.gl/maps/q7ANcwsbA836pCaa9" class="prt-btn btn-inline"><span>View Directions</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-branches-section end-->

</div><!-- site-main end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/career.blade.php ENDPATH**/ ?>