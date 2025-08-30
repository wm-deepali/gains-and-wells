 <!--section-title -->
<div class="section-title style4 right-side-form-card">
   
    <div class="bg-base-grey spacing-25 right-side-form-card">
        <!-- section title -->
        <div class="section-title style7">
            <div class="title-header">
                <h2 class="title" style="font-size: 26px;text-align: center;line-height: 28px; color: #fff;">Start your Journey Today! </h2>
                <p style="text-align: center; color: #e7e5e5;">Please fill up the form to receive free consultation, from
                    one of our business setup advisors within 24 hours.</p>
            </div>
        </div><!-- section title end -->
        <form method="POST" action="<?php echo e(route('submit.package')); ?>" class="contact_form clearfix pkgfrm" id="pkgfrm">
            <?php echo csrf_field(); ?>
            <div class="row">
                <input type="hidden" id="pkgfrmres" value="0">
            <!-- Full Name -->
                <div class="col-md-12">                  
                    <input name="full_name" type="text" value="" placeholder="Your Full Name" required>
                </div>

                 <!-- Hidden Page ID -->
                    <?php $pageData = App\Helpers\Helper::getCurrentPage(); ?>
                 <input type="hidden" name="page_id" value="<?php echo e($pageData ?? ''); ?>">

                <!-- Email -->
                <div class="col-md-12">
                    <input name="email" type="email" value="" placeholder="Email Address" required>
                </div>
            
            <!-- Service (must use actual service IDs) -->
                <div class="col-md-12">
                <select id="selectbox" name="service_id" required>
                    <option value="">Select Service</option>
                    <?php $services = App\Helpers\Helper::getServices(); ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($service->id); ?>"><?php echo e($service->service); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                </div>
                <div class="col-md-12">
                    <input name="location" type="text" value="" placeholder="Location" required>
                </div>
            
                                
                <!-- Mobile -->
                <div class="col-md-12"  style="display:flex;">
                     <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
                      <select id="pkg_country_code" name="country_code" class="codecountry" required style="width:48%;">
                        
                        <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
                        <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                    <input name="mobile" type="text" placeholder="Mobile Number" oninput="validatePhone(this)" id="pkg_phone_number" style="width:50%;margin-left: 10px;" required>
                    <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                    
                    <p id="pkg_verified_badge" style="color:green;display:none;">Verified</p>
                </div>
                <div class="col-12">
                    <input type="tel" name="mobile" id="pkg_mob_in" class="form-control" style="display:none;"/>
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
                    <button type="button" class="btn btn-primary mb-2" id="pkg-send-otp-bt" onclick="sendPkgOTP()" style="display:none;">Send OTP</button>
                     <button type="button" class="btn btn-primary mb-2" id="pkg-verify-otp-bt" style="display: none;" onclick="verifyPkgOTP()">Verify</button>
                    <button type="button" class="btn btn-primary mb-2" id="pkg-resend-otp-bt" onclick="sendPkgOTP()" style="display: none;">Resend OTP</button>
                   
                </div>
                <!-- Message -->
                <div class="col-md-12">
                    <textarea name="details" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <div class="col-md-12">
                <!-- details -->
                    <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                </div>
                                        
                                    
                    <!-- Submit -->
                    <div class="mt-5">
                        <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit">Submit Here</button> 
                    </div>
                </div>
            </form>
    </div>
</div><!--section-title-end --><?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/package-enquiry-form.blade.php ENDPATH**/ ?>