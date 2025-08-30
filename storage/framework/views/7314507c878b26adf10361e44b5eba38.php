   <style>
    .phone-input {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;
    }
    
    .error {
      color: red;
      font-size: 14px;
    }
    .success {
      color: green;
      font-size: 14px;
    }
  </style>
   <section class=" service02-about-section mb-30 ">
                <div class="" style="padding: 0px 30px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <!-- <h3 class="text-center">Take the step to</h3> -->
                                        
 

                                      <h2 class="title text-center">
  Customize Package for your <span style="color: orange !important;">Business</span> Solution
</h2>

                                    <div class="title-desc text-center">
                                        <p>Choose from the below give packages that suits your business requirements
Stay ahead among your competitors</p>
                                    </div>
                                </div><!-- section title end -->

                                <div class="slick_slider row mt-5"
                                data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 3}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}' >
                                    

                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4">
        <div class="prt-pricing-plan pricing-recommended-plan">
            
            <div class="prt-p_table-head">
                <div class="prt-icon prt-icon_element-onlytxt">
                    <i class="flaticon-teamwork"></i>
                </div>
                <div class="prt-p_table-title">
                    <h3 style="line-height: 35px;">
                        <span style="font-size: 22px;"><?php echo e($package->name); ?></span><br>
                        <span style="font-size: 15px;">AED</span>
                        <span style="font-size: 34px; font-weight: 800; color: #f36f27;">
                            <?php echo e(number_format($package->offered_price, 2)); ?>

                        </span>
                    </h3>
                </div>
            </div>
            <div class="prt-p_table-body">
                <ul class="prt-p_table-features">
                    <?php $__currentLoopData = json_decode($package->services, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($service); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="prt-p_table-footer1">
                 <button class="overlay-btn" onclick="openModal('<?php echo e($package->id); ?>')">Register Now</button>


                 <a class="home-page-price-btn1" href="tel:+91 9220899544">
<i class="fa-solid fa-phone-volume"></i>

 
</a>


<a class="home-page-price-btn1" href="https://wa.me/+971 52 993 0830" target="_blank">
<i class="fa-brands fa-whatsapp"></i>
</a>
            </div>
            <p style="color: red; padding-left: 20px; font-size: 12px;margin-top: -10px;">*Terms & Conditions Apply</p>
        </div>
    </div>
 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                   
                                   
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
<?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div id="modal-<?php echo e($package->id); ?>" class="custom-modal">
    <div class="custom-modal-content">
      <span class="close-btn" onclick="closeModal('<?php echo e($package->id); ?>')">&times;</span>
              <section class="prt-row contact-us-contact-form-section clearfix">
          <div class="container-fluid">
            <div class="row g-0">
              
              <div class="col-lg-12">
                <div class="bg-base-grey spacing-25">
                  <div class="section-title style7">
                    <div class="title-header">
                      <h2 class="title" style="font-size:20px;line-height:27px">Have any question? Feel free to <span>Contact</span></h2>
                    </div>
                  </div>
                  <form action="<?php echo e(route('home.submit')); ?>" method="POST" class="contact_form clearfix pFrm" id="pFrm<?php echo e($package->id); ?>" data-id="<?php echo e($package->id); ?>">
                    <?php echo csrf_field(); ?>
                     <div class="row">
                      <div class="col-md-12">  
                      <input type="hidden" id="pFrm<?php echo e($package->id); ?>res" value="0">
                       <?php $pageData = App\Helpers\Helper::getCurrentPage(); ?>
                 
                          <input type="hidden" name="p_id" id="contactFormModal"  value="<?php echo e($pageData ?? ""); ?>">
                        <input type="hidden" name="offer_id" id="contactFormModal"  value="<?php echo e($package->id); ?>">                
                        <input name="name" type="text" placeholder="Your Full Name" required>
                      </div>
                      <div class="col-md-12">
                        <input name="email" type="email" placeholder="Email Address" required>
                      </div>
                       <div class="col-md-12 phone-input" style="display:flex;">
                           
                        <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
                      <select id="country_code<?php echo e($package->id); ?>" data-id="<?php echo e($package->id); ?>" class="ccode codecountry" name="country_code" required style="width:48%;">
                        <option value="">Select Country Code</option>
                        <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
                        <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                        <input type="tel" name="mobile" id="phoneNumber<?php echo e($package->id); ?>" placeholder="1234567890" maxlength="15" oninput="validatePhone(this)" style="width:50%;margin-left: 10px;" required/>

                        
                      </div>
                      <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                        <p id="verifiedBadge<?php echo e($package->id); ?>" style="color:green;display:none;">Verified</p>
                      <div class="col-12">
                    <input type="tel" name="mobile" id="mobIn<?php echo e($package->id); ?>" class="form-control" style="display:none;"/>
                        <input type="text" name="isValid" id="isValid_number<?php echo e($package->id); ?>" value="1" class="form-control" style="display:none;"/>
                        <div class="form-group mb-2" id="otpField<?php echo e($package->id); ?>" style="display: none;">
                            <input
                                type="text"
                                class="form-control"
                                id="potp<?php echo e($package->id); ?>"
                                name="otp"
                                placeholder="Enter OTP"
                                maxlength="6"
                            />
                        </div>
                        <button type="button" class="btn btn-primary mb-2" id="sendOtp-bt<?php echo e($package->id); ?>" onclick="sendPOTP(<?php echo e($package->id); ?>)" style="display: none;">Send OTP</button>
                        <button type="button" class="btn btn-primary mb-2" id="verifyOtp-bt<?php echo e($package->id); ?>" style="display: none;" onclick="verifyPOTP(<?php echo e($package->id); ?>)">Verify</button>
                        <button type="button" class="btn btn-primary mb-2" id="resendOtp-bt<?php echo e($package->id); ?>" onclick="sendPOTP(<?php echo e($package->id); ?>)" style="display: none;">Resend OTP</button>
                        
                    </div>
                       <div class="col-md-12">
                        <input name="location" type="text" placeholder="location" required>
                      </div>
                           
                      <div class="col-md-12">
                        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                      </div>
                      <div class="col-md-12 col-lg-12 mb-4">
                            <div class="form-group">
                                 <!-- Google Recaptcha -->
                                <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                            </div>
                           
                        </div>  
                      <div class="mt-4">
                        <button class="submit 
                        prt-btn prt-btn-size-md prt-btn-shape-round
                         prt-btn-style-fill prt-btn-color-skincolor" type="submit" onclick="validatePhoneNumber()">Submit Here</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>                        
            </div>
          </div>
        </section>
    </div>
  </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/package.blade.php ENDPATH**/ ?>