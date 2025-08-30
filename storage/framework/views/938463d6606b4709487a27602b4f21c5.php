<style>
    .modal-backdrop.fade
    
    {
        display:none;
    }
</style>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel" style="width: 100%;">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel" style="font-weight: 600;">Free Consultation</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <!-- contact-form-section -->
        <section class="">
            <div class="container">
                <div class="row g-0" style="margin: auto;">
                    <div class="col-lg-6">
                        <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content form-banner-content">
                                <h1 style="color:#fff; font-size:28px;font-weight:600;">Get a Free Consultation – Start Your UAE Business Journey Today!</h1>
                                <p style="color:#fff; font-size:16px;">Fill out the form below and our experts will guide you through the best setup options tailored to your goals. Quick response, expert advice, no obligations.</p>
                            </div>
                        </div>
                        <!--<img class="" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-37.png')); ?>"-->
                        <!--    alt="col-bgimage-37" style="width:100%;">-->
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-base-grey spacing-25">
                            <!-- section title -->
                            <div class="section-title style7">
                                <div class="title-header">
                                    <h2 class="title" style="font-size: 26px;line-height: 28px;">Have be any
                                        question? feel free to <span>Contact</span></h2>
                                </div>
                            </div><!-- section title end -->
                            <form action="<?php echo e(route('submit.package')); ?>" class="contact_form clearfix" method="post" id="callfrm">
                                 <?php echo csrf_field(); ?>
                                 
                                 <input type="hidden" id="callfrmres" value="0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input name="full_name" type="text" value="" placeholder="Your Full Name"
                                            required="required">
                                    </div>
                                    <?php $pageData = App\Helpers\Helper::getCurrentPage(); ?>
                                    <input type="hidden" name="page_id" value="<?php echo e($pageData ?? ''); ?>">
                                    <div class="col-md-12">
                                        <input name="email" type="text" value="" placeholder="Email Address"
                                            required="required">
                                    </div>
                                    <div class="col-md-12">
                                        <select name="service_id"  id="service_id" required>
                                    <option value="">Select Services </option>
                                    <?php $services = App\Helpers\Helper::getServices(); ?>
                                    <?php if(isset($services) && count($services)>0): ?>
                                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($service->id); ?>"><?php echo e($service->service); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                   
                                </select>
                                    </div>
                                     <div class="col-md-12" style="display:flex;">
                                         
                                         <div class="col-md-3">
                                             <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
                                          <select id="country_code" name="country_code" class="codecountry" required>
                                            <option value="">Country Code</option>
                                            <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
                                            <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                          </select>
                                         </div>
                                         <div class="col-md-9">
                                             <input type="mobile" name="mobile" id="phone_number" placeholder="mobile" oninput="validatePhone(this)" style="margin-left: 10px;width:97%" required >
                                             <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                                        <p id="verified_badge" style="color:green;display:none;">Verified</p>
                                         </div>
                                            
                                        
                                        
                                    </div>
                                    <div class="col-12">
                                        <input type="tel" name="mobile" id="mob_in"  style="display:none;"/>
                                        <input type="text" name="isValid" id="is_valid_number" value="1"  style="display:none;"/>
                                        <div class="form-group mb-2" id="otp_field" style="display: none;">
                                            <input
                                                type="text"
                                                
                                                id="otp"
                                                name="otp"
                                                placeholder="Enter OTP"
                                                maxlength="6"
                                            />
                                        </div>
                                        <button type="button" class="btn btn-primary mb-2" id="send-otp-bt" onclick="sendOTP()" style="display: none;">Send OTP</button>
                                        <button type="button" class="btn btn-primary mb-2" id="verify-otp-bt" style="display: none;" onclick="verifyOTP()">Verify</button>
                                        <button type="button" class="btn btn-primary mb-2" id="resend-otp-bt" onclick="sendOTP()" style="display: none;">Resend OTP</button>
                                    </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="location" id="location"
                                  placeholder="Location" required>
                            </div>
                            <div class="text-danger" id="email-err"></div>
                        </div>
                                    <div class="col-md-12">
                                        <textarea name="details" rows="4" placeholder="Your Message"
                                            required="required"></textarea>
                                    </div>
                                     <div class="col-md-12">
                            <div class="form-group">
                                 <!-- Google Recaptcha -->
        <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                            </div>
                           
                        </div>
                                    <div class="mt-5">
                                        <button
                                            class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                            type="submit" value="submit">Submit Here</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-form-section-end -->

    </div>
</div><?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/modal.blade.php ENDPATH**/ ?>