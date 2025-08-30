

<?php $__env->startSection('title'); ?>
Overseas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .flip-card-front h3{
        font-size:20px;
        font-weight:600;
    }
    .flip-card-back-index button{
        border-radius: 4px; 
        padding: 7px 15px; 
        background-color: #fff; 
        color: #115599;
        border: 1px solid #115599; 
        cursor: pointer !important;
    }
    .flip-card-back-index button:hover{
        background:#F36F27 !important;
        color:#fff !important;
    }
    .custom-modal {
  display: none; 
  position: fixed;
  z-index: 99999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.6);
}

.custom-modal-content {
  background-color: #fff;
  margin:auto;
  padding: 20px;
  border-radius: 10px;
  width: 90%;
  max-width: 600px;
  position: relative;
  animation: fadeIn 0.3s ease-in-out;
}

.close-btn {
  position: absolute;
  right: 15px;
  top: 10px;
  font-size: 22px;
  cursor: pointer;
}

@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}

</style>

<!-- site-main start -->
<div class="site-main">

<!--about-section-->

<section class="prt-row home03-welcome-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="res-1199-mb-30">
                    <!--section-title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>We Make A Difference</h3>
                            <h2 class="title">Welcome to <span>Ashton & Well
                                 </span> <br>Corporate Services Provider LLC
                            </h2>
                        </div>
                        <div class="title-desc">
                            <p>your trusted partner for business setup in Dubai. Let us turn your
                                entrepreneurial vision into reality with expert guidance and hassle-free
                                solutions.</p>
                        </div>
                    </div><!--section-title-end -->
                    <div class="row row-equal-height">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="position-relative text-start">
                                <div class="prt_single_image-wrapper">
                                    <img class="img-fluid img-new-card" width="372" height="364"
                                        src="<?php echo e(asset('assets/images/single-img-6.png')); ?>" alt="single-img-6">
                                </div>
                                <div class="d-block d-sm-flex mt-30 res-991-mt-20">
                                    <div class="mr-30 res-575-mr-0 mb-3">
                                        <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                            href="<?php echo e(route('about-us')); ?>" style="white-space: nowrap;">Read More </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class=" text-start">
                                <h3>10+ Years Expertise in Business Formation.</h3>
                                <p class="mb-0">With over a decade of experience, we’ve helped countless
                                    entrepreneurs establish and grow their businesses in the UAE. From
                                    company formation to bank account opening and Golden Visa processing—we
                                    handle it all seamlessly.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-12" style="margin: auto;">
                <!-- <div class="col-bg-img-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div> -->
                <img class="img-fluid " src="<?php echo e(asset('assets/images/intro1.jpeg')); ?>" alt="col-bgimage-7"
                    style="margin: auto;">
            </div>
        </div>
    </div>
</section>
<!--about-section end-->
<section class="prt-row service02-service-section bg-layer-equal-height bg-base-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <!-- section title -->
                <div class="section-title style2 mb-15">
                    <div class="title-header">
                        <h3>Start Strong</h3>
                        <h2 class="title">Get Your <br> Business Setup <br> <span>Done by Experts in UAE Free Zone & Dubai Mainland.</span>
                        </h2></br>
                        <p class="mb-0">We provide complete business setup services in UAE Free Zones and Dubai, backed by expert support. From company formation to Digital Solution, IT Services, Golden Visa, and bank account assistance — we handle it all.
</p>
                    </div>
                </div><!-- section title end -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free2.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>"
                                                    tabindex="0" class="text-center">Dubai Mainland </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> BUSINESS SETUP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>
                                We provide clear, customized pricing to match your goals and
                                 budget—no hidden fees, just expert guidance. </p>
                                <a href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>
                               

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free5.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="<?php echo e(route('uae-free-zone-business-setup')); ?>"
                                                    tabindex="0" class="text-center">UAE Free Zone </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> BUSINESS SETUP</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Set up your business in Sharjah Publishing City (SPC) Free Zone — the first-of-its-kind
hub for publishing and creative industries</p>
<a href="<?php echo e(route('uae-free-zone-business-setup')); ?>">
                                <button class="flip-card-button">Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free3.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>"
                                                    tabindex="0" class="text-center">BANK ACCOUNT </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Dubai & UAE</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                           
                            <p>Easily open your business or personal bank account in the UAE with seamless support from our Expert Advisors.</p>
                            <a href="<?php echo e(route('open-bank-account-in-uae-dubai')); ?>">
                                <button class="flip-card-button">Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free4.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>"
                                                    tabindex="0" class="text-center">Golden Visa </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Long Term Residency</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Gain long-term residency in the UAE, with exclusive benefits for investors, professionals, and their families.
Open doors to growth, stability, and a world of opportunities in Dubai.</p>
<a href="<?php echo e(route('golden-visa-uae-dubai')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/freeit.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>"
                                                    tabindex="0" class="text-center">Digital Solution </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Complete IT Services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Unlock new growth opportunities with smart, secure, and scalable IT services & Digital Solution.
From startups to enterprises, we power your success with innovative tech solutions.</p>
<a href="<?php echo e(route('it-services')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
          <!--  <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free6.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:35px;"><a
                                                    href="<?php echo e(route('business-setup-in-dubai-mainland')); ?>"
                                                    tabindex="0" class="text-center">Corporate Funding </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Build your wealth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Gain long-term residency in the UAE, with exclusive benefits for investors, professionals, and their families.
Open doors to growth, stability, and a world of opportunities in Dubai.</p>
<a href="<?php echo e(route('corporate-funding')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div> -->
            
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free6.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:35px;"><a
                                                    href="<?php echo e(route('ras-al-khaimah-offshore')); ?>"
                                                    tabindex="0" class="text-center">UAE Offshore </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Build your Business</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Setting up a business in UAE Offshore offers tax efficiency, full foreign ownership, and confidentiality. 
                            It's an ideal choice for international entrepreneurs seeking a secure and flexible environment for global operations.</p>
<a href="<?php echo e(route('corporate-funding')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            
            
            
            
            
            
            
            
            
             <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free7.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700; line-height:35px;"><a
                                                    href="<?php echo e(route('dubai-commercial-license-services')); ?>"
                                                    tabindex="0" class="text-center">Commercial License</a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> 100% Foreign Ownership</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Unlock trading opportunities across the UAE with a Dubai Mainland Commercial License.
We simplify the process from documentation to approval, so you can focus on growing your business.</p>
<a href="<?php echo e(route('dubai-commercial-license-services')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="prt-bg prt-col-bgimage-yes1 col-bg-img-fourteen bg-base-dark spacing-10">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                        <div class="prt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="position-relative">
                            <h3>What More?</h3>
                            <ul class="prt-list style2">
                                <li>
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <a href="<?php echo e(route('accounts-and-book-keeping')); ?>">
                                    <span class="prt-list-li-content1" style="color:#fff"> Accounts & Books</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('corporate-funding')); ?>">
                                    <span class="prt-list-li-content1">Corporate Funding</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('pro-services')); ?>">
                                    <span class="prt-list-li-content1">Custom PRO</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('dubai-commercial-license-services')); ?>">
                                    <span class="prt-list-li-content1">Commercial License</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('tax-residency')); ?>">
                                    <span class="prt-list-li-content1">Residency Visa</span>
                                    </a>
</span>
                                </li>
                                
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('open-bank-account-in-uae-dubai')); ?>">
                                    <span class="prt-list-li-content1">Free Bank Account</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('vat-registration-services-uae-dubai')); ?>">
                                    <span class="prt-list-li-content1">VAT Registration</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('mea-mofa-attestations')); ?>">
                                    <span class="prt-list-li-content1">MEA & MOFA Attestation</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('tax-residency')); ?>">
                                    <span class="prt-list-li-content1">Tax Residency</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <button class="mt-5" style="border-radius: 4px; padding: 7px 15px; background-color: #fff; color: #115599;border: 1px solid #115599; cursor: pointer;" data-bs-toggle="offcanvas" href="#offcanvasExample">Get Free Consultation </button>
                            
                            <div class="prt-image-plane">
                                <img width="182" height="199" class="img-fluid" src="<?php echo e(asset('assets/images/plane.png')); ?>"
                                    alt="image">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--services-section-->

<!--services-section end-->
<section class="prt-row home03-process-section clearfix">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper">
                    <div class="prt-processbox processbox-01">
                        <!--section-title -->
                        <div class="section-title style4">
                            <div class="title-header">
                                <h2 class="title">Simple & Hassle-Free <br><span>Business </span> Setup
                                    Process in Dubai
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p>Setting up your business in Dubai has never been easier. Our streamlined
                                    process ensures you get expert support every step of the way—from
                                    consultation to launch—so you can focus on your success while we handle
                                    the rest.</p>
                            </div>
                        </div><!--section-title-end -->
                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                href="#">Explore More</a>
                        </div>
                    </div>
                    <div class="prt-processbox processbox-02">
                        <div class="prt-box-image">
                            <div class="prt-process-image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/free-consultation.png')); ?>" alt="step-one">
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number"></span>
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Free Consultation</h3>
                                </div>
                                <div class="prt-box-description">Connect with our experts for a personalized
                                    consultation. We'll understand your goals and suggest the best setup
                                    options tailored to your needs.</div>
                            </div>
                        </div>
                    </div>
                    <div class="prt-processbox processbox-03">
                        <div class="prt-box-image">
                            <div class="prt-process-image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/process-box/02.png')); ?>" alt="step-two">
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number"></span>
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Documentation & Approvals</h3>
                                </div>
                                <div class="prt-box-description">We handle all paperwork, approvals, and
                                    legal formalities. Sit back while we manage the process from start to
                                    finish.</div>
                            </div>
                        </div>
                    </div>
                    <div class="prt-processbox processbox-04">
                        <div class="prt-box-image">
                            <div class="prt-process-image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/license.png')); ?>" alt="step-three">
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number"></span>
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Business License & Launch</h3>
                                </div>
                                <div class="prt-box-description"> Receive your trade license and start
                                    operations confidently. We ensure a smooth launch so you can focus on
                                    growing your business.</div>
                            </div>
                        </div>
                    </div>
                    <div class="prt-processbox processbox-05">
                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-eight bg-base-grey">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                <div class="prt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="featured-icon-box style4">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <i class="flaticon-passport-8"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Ready to Start Your <span>Business </span> in Dubai?
                                            </h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Get in touch with us today—fill out the enquiry form and our
                                                experts will guide you through every step of your business
                                                setup journey.</p>
                                        </div>
                                        <!-- <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                                href="#">Get a Callback</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="connect-section">
    <h3 class="title">Book a Free Appointment</h3>
    <p class="text-center">We are just a call or text away. Reach out to us and our expert business setup
        consultants will<br> get back to you to
        counsel you at every step of your company formation journey. </p>
  <div class="d-flex justify-content-between connect-section-btn">
    <a href="https://wa.me/971 52 993 0830" target="_blank" style="text-decoration: none;">
        <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
    </a>
    <a href="tel:++971 52 993 0830" style="text-decoration: none;">
        <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
    </a>
</div>

</div>
   <?php echo $__env->make('front.layouts.includes.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            

<!-- broken-section -->
<section class="prt-row padding_zero-section home03-why-us-section clearfix">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pb-70 res-991-pb-0">
                <div class="col-bg-img-nine prt-bg prt-col-bgimage-yes prt-left-span spacing-5 z-index-1">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-9.png')); ?>"
                    alt="col-bgimage-9">
            </div>
            <div class="col-lg-6">
                <div class="prt-bg prt-col-bgcolor-yes prt-right-span bg-base-dark spacing-6 z-index-2">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content">
                        <!--section-title -->
                        <div class="section-title style2">
                            <div class="title-header">
                                <h3>Why Choose Us for Your Business Setup in Dubai?</h3>
                                <h2 class="title"
                                    style="font-size: 24px; line-height: 34px;text-align: justify;">With
                                    over 10 years of expertise, we offer tailored solutions that simplify
                                    the business setup process, ensuring a seamless and efficient experience
                                    for every entrepreneur.
                                </h2>
                            </div>
                        </div><!--section-title-end -->
                        <div class="row g-0 prt-vertical_sep res-991-mt_15">
                            <div class="col-md-6">
                                <div class="featured-icon-box style5">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <img src="<?php echo e(asset('assets/images/united.png')); ?>" alt="" width="80px">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Expert Team</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="text-base-white mb-0">Our team provides in-depth,
                                                personalized advice to help you choose the best business
                                                setup options based on your goals and budget.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-50 res-767-pl-0">
                                <div class="featured-icon-box style5">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <img src="<?php echo e(asset('assets/images/iteration.png')); ?>" alt="" width="80px">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Hassle-Free Process</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="text-base-white mb-0">From paperwork to approvals, we
                                                manage every aspect of your business setup, ensuring a
                                                smooth and efficient journey with no hidden costs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="d-block d-sm-flex text-start bg-base-dark text-base-white spacing-7">
                                <div class="align-self-start">
                                    <img class="mr-30" src="<?php echo e(asset('assets/images/star-rating.png')); ?>" width="88" height="15"
                                        alt="rating">
                                </div>
                                <div class="align-self-start res-575-mt-10">
                                    <span class="mr-10 fs-15 fw-700"><label
                                            class="underline text-white">99.9% Customer Satisfaction based
                                            on 200+ reviews and almost 100+ Business Setups</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- broken-section-end -->

<!-- immigration-and-services-section -->
<section class="prt-row home01-immigration-and-services-section clearfix">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <!--section-title-->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>Corporate Services</h3>
                        <h2 class="title">More Than Just Business Setup – Comprehensive <span> Services for
                                Your Success</span>
                        </h2>
                    </div>
                </div><!--section-title end-->
            </div>
        </div>
        <div class="row mt_15 p-3">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-15">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/information-technology.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('it-services')); ?>">
                                <h3>Digital Solution</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>End-to-end IT solutions including website, software, and server management.
We support your business growth with reliable tech infrastructure..
                            </p>
                            <a href="<?php echo e(route('it-services')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/settings.png')); ?>"
                                alt="" width="50px">
                                <h3>Custom PRO</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Tailored PRO services to handle your documentation and government work.
We simplify processes, so you can focus on growing your business.
                            </p>
                            <a href="<?php echo e(route('dubai-custom-pro')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/communication.png')); ?>"
                                alt="" width="50px>
                            <a href="<?php echo e(route('dubai-commercial-license-services')); ?>">
                                <h3>Commercial License</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Get your commercial license in Dubai or UAE Free Zones — fast and easy.
We guide you through every legal step to get your business running.
                            </p>
                            <a href="<?php echo e(route('dubai-commercial-license-services')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/resident.png')); ?>"
                                 alt=""  width="50px">
                            <a href="<?php echo e(route('dubai-residency-visa')); ?>">
                                <h3>Residency Visa</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Secure your UAE residency visa through smooth and hassle-free processing.
We manage all paperwork and approvals — stress-free and transparent.
                            </p>
                            <a href="<?php echo e(route('dubai-residency-visa')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/free-of-charge.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('bank-account-opening-in-uae')); ?>">
                                <h3>Free Bank Account</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Open a UAE bank account for your business without any hidden barriers.
We assist you in choosing the right bank and completing all formalities.
                            </p>
                            <a href="<?php echo e(route('bank-account-opening-in-uae')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/vat.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('vat-registration-services-uae-dubai')); ?>">
                                <h3>VAT Registration</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Stay compliant with UAE tax laws through accurate VAT registration.
Our experts ensure timely filing and ongoing support for your business.
                            </p>
                            <a href="<?php echo e(route('vat-registration-services-uae-dubai')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/attestation.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('mea-mofa-attestations')); ?>">
                                <h3>MEA & MOFA Attestation</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>We handle MEA and MOFA attestation for all your business and personal documents.
Certified, quick, and accepted across UAE and globally.
                            </p>
                            <a href="<?php echo e(route('mea-mofa-attestations')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/taxes (1).png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('tax-residency')); ?>">
                                <h3>Tax Residency</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Get official Tax Residency Certificates (TRC) for your personal or business needs.
Enjoy global credibility and access to tax treaty benefits with our support..
                            </p>
                            <a href="<?php echo e(route('tax-residency')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- immigration-and-services-section-end -->

<!-- testimonial-section -->
<?php echo $__env->make('front.layouts.includes.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- testimonial-section-end -->

<!--fid-section-->
<section class="prt-row home03-fid-section bg-base-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-office-building"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="100"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">100
                            </span>
                            <span class="fid-prefix">+</span>
                        </h4>
                    </div>
                    <h3 class="prt-fid-title">Business Setups</h3>
                    <div class="prt-fid-desc">
                        <p>Helping entrepreneurs bring their vision to life with successful business setups
                            in Dubai and across the UAE.</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-teamwork"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="200"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">200
                            </span>
                            <span class="fid-prefix">+</span>
                        </h4>
                    </div>
                    <h3 class="prt-fid-title">Satisfied Clients
                    </h3>
                    <div class="prt-fid-desc">
                        <p>A proven track record of delivering exceptional results and exceeding client
                            expectations.</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-process"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="30"
                                data-interval="1" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">30
                            </span>
                            <span class="fid-prefix">+</span>
                            <!-- <span class="fid-prefix">K</span> -->
                        </h4>
                    </div>
                    <h3 class="prt-fid-title">Services</h3>
                    <div class="prt-fid-desc">
                        <p>Offering a wide range of services, from business setup to digital marketing,
                            ensuring all your needs are covered.</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-office-building"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="20"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">20
                            </span>
                            <span class="fid-prefix">+</span>
                        </h4>
                    </div>
                    <h3 class="prt-fid-title"> Team Members</h3>
                    <div class="prt-fid-desc">
                        <p>A dedicated team of experts working together to provide you with personalized and
                            efficient solutions.


                            .</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
        </div>
    </div>
</section>
<!--fid-section-end-->

<!-- blog-section -->
<?php echo $__env->make('front.layouts.includes.blog-secton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- blog-section-end -->

<?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- site-main end-->
<script>
function openModal(id) {
  document.getElementById(`modal-${id}`).style.display = 'flex';
}

function closeModal(id) {
  document.getElementById(`modal-${id}`).style.display = 'none';
}

// Close modal if clicked outside
window.addEventListener('click', function (e) {
  document.querySelectorAll('.custom-modal').forEach(modal => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/index.blade.php ENDPATH**/ ?>