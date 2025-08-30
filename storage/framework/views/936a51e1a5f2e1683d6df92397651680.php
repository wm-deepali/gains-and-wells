<?php $__env->startSection('title'); ?>
Contact Us
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
Contact Us
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
                       <form action="<?php echo e(route('submit.quote')); ?>" method="post" class="contact_form clearfix" id="pkgfrm">
                        <?php echo csrf_field(); ?>
                        <input type="hidden" id="pkgfrmres" value="0">
                            <div class="row">
                                <div class="col-md-6">                  
                                    <input name="first_name" type="text" placeholder="First Name" required>
                                </div>
                        
                                <div class="col-md-6">                  
                                    <input name="last_name" type="text" placeholder="Last Name" required>
                                </div>
                                <div class="col-md-12">
                                
                                    <select name="type" class="form-control" required id="contacttype">
                                        <option value="">Select Type</option>
                                        <option value="Service">Service</option>
                                        <option value="Career">Career</option>
                                    </select>
                                </div>
                                <div class="col-md-12 service_div" style="display: none;">
                                
                                    <select name="service_id" class="form-control" id="serviceId">
                                        <option value="">Select Services</option>
                                        <?php $__currentLoopData = App\Helpers\Helper::getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($service->id); ?>"><?php echo e($service->service); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-md-12 carrerDiv" style="display: none;">                  
                                    <input name="apply_for" type="text" placeholder="Apply For" id="apply_for">
                                </div>
                                <div class="col-md-12" style="display:flex;">
                                     <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
                                      <select id="pkg_country_code" name="country_code" class="codecountry" required style="width:48%;">
                                        <option value="">Select Country Code</option>
                                        <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
                                        <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                      </select>
                                    <input name="mobile_number" type="text" placeholder="Mobile Number" onfocusout="validatePhone(this)" id="pkg_phone_number" style="width:50%;margin-left: 10px;" required>
                                    <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                                            <p id="pkg_verified_badge" style="color:green;display:none;">Verified</p>
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="mobile_number" id="pkg_mob_in" class="form-control" style="display:none;"/>
                                    <input type="text" name="isValid" id="pkg_is_valid_number" value="1" class="form-control" style="display:none;"/>
                                    <div class="form-group mb-2" id="pkg_otp_field" style="display: none;">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="pkg_otp"
                                            name="otp"
                                            placeholder="Enter OTP"
                                            maxlength="6"
                                        />
                                    </div>
                                    <button type="button" class="btn btn-primary mb-2" id="pkg-send-otp-bt" onclick="sendPkgOTP()" style="display: none;">Send OTP</button>
                                    
                                    <button type="button" class="btn btn-primary mb-2" id="pkg-verify-otp-bt" style="display: none;" onclick="verifyPkgOTP()">Verify</button>
                                    <button type="button" class="btn btn-primary mb-2" id="pkg-resend-otp-bt" onclick="sendPkgOTP()" style="display: none;">Resend OTP</button>
                                </div>
                                <div class="col-md-12">
                                    <input name="email" type="email" placeholder="Email Address" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="col-md-12">
                                    <!-- details -->
                                    <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button class="submit prt-btn cost-calculate-btn" type="submit">Submit Quote</button> 
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
                                <a href="tel:+65416541654165">+971 5 2993 0830</a></br>
                                <a href="tel:+919220899544">+91-9220899544</a>
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
                                <a href="info@ashtonwell.com">info@ashtonwell.com</a>
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
                                <span>Mon-Sun: 09.00 AM to 06.00 PM</span>
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
                                <span>Facebook, Twitter, Instagram, LinkedIn</span>
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
                            <h2 class="title">Our Address <span> in Dubai</span></h2>
                        </div>
                    </div><!-- section title end -->
                </div>
            </div>
           <div class="row mt_15">
  <!-- Left Column -->
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="featured-imagebox featured-imagebox-contact">
      <div class="featured-thumbnail">
        <img class="img-fluid" src="<?php echo e(asset('assets/images/contact-us/01.png')); ?>" width="896" height="484" alt="contact-us-01">
      </div>
<div class="featured-content">
        <div class="featured-title">
          <h3>Dubai Office</h3>
        </div>
        <div class="featured-desc">
          <ul class="prt-list style9">
            <li>
              <label>Address:</label><span>Building A1, Dubai Digital Park, Dubai Silicon Oasis, Dubai, UAE</span>
            </li>
            <li>
              <label>Contact Number:</label><a href="tel:+971 5 2993 0830" style="color:#024fa1;">+971 5 2993 0830</a>
            </li>
            <li>
              <label>Email Us:</label><a href="mailto:dubaioffice@example.com"  style="color:#024fa1;">business@ashtonandwells.com</a>
            </li>
          </ul>
        </div>
        <div class="featured-bottom">
          <a href="https://www.google.com/maps?q=Building%20A1,%20Dubai%20Digital%20Park,%20Dubai%20Silicon%20Oasis,%20Dubai,%20UAE"
            class="prt-btn btn-inline" style="color:#024fa1;"><span>View Directions</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Right Column -->
  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="featured-imagebox featured-imagebox-contact">
      <div class="featured-thumbnail">
        <!-- Embedded Google Map -->
        <iframe
          src="https://www.google.com/maps?q=Building%20A1,%20Dubai%20Digital%20Park,%20Dubai%20Silicon%20Oasis,%20Dubai,%20UAE&output=embed"
          width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
    </div>
  </div>
</div>

        </div>
    </section>
    <!-- our-branches-section end-->

</div><!-- site-main end-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('after-scripts'); ?>
<script>
$('#contacttype').change(function(){
    
        if($('#contacttype').val() === 'Career') {
           
            $('.carrerDiv').css('display', 'block'); 
            $("#apply_for").prop('required',true);

             $('.service_div').css('display', 'none'); 
             $("#serviceId").prop('required',false);

        } else {
            $('.carrerDiv').css('display', 'none'); 
            $("#apply_for").prop('required',false);

             $('.service_div').css('display', 'block'); 
             $("#serviceId").attr("required", true);

        } 
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/contact-us.blade.php ENDPATH**/ ?>