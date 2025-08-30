

<?php $__env->startSection('pagetitle'); ?>
Free Bank Account 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <style>
            .featured-imagebox-wrapper-page {
                perspective: 1000px;
            }
    
            .featured-imagebox-wrapper-page .flip-card-inner {
                position: relative;
                width: 100%;
                height: 300px;
                text-align: center;
                transition: transform 0.6s;
                transform-style: preserve-3d;
            }
    
            .featured-imagebox-wrapper-page:hover .flip-card-inner {
                transform: rotateY(180deg);
            }
    
            .featured-imagebox-wrapper-page .flip-card-front,
            .featured-imagebox-wrapper-page .flip-card-back {
                position: absolute;
                width: 100%;
                height: 100%;
                backface-visibility: hidden;
                border-radius: 10px;
                overflow: hidden;
            }
    
            .flip-card-front {
                display: flex;
                justify-content: center;
                flex-direction: column;
                gap: 20px;
                align-items: center;
                background: #fff;
                z-index: 2;
            }
    
            .flip-card-front img {
                /* width: 66%;
                    height: 122px; */
                /* object-fit: cover; */
            }
    
            .flip-card-front h3 {
                padding: 10px;
                font-size: 18px;
            }
    
            .flip-card-back {
                background: #115599;
                color: #fff;
                transform: rotateY(180deg);
                display: flex;
                flex-direction: column;
    
                align-items: center;
                justify-content: center;
                padding: 15px;
            }
    
            .flip-card-back a {
                color: #f36f27;
                font-weight: 600;
            }
            .custom-accordion {
            border: 1px solid #dddddd3a;
            /* border-radius: 6px; */
            overflow: hidden;
        }
    
        .accordion-item {
            border-bottom: 1px solid #dddddd3a;
        }
    
        .accordion-title {
            cursor: pointer;
            padding: 15px;
            background: #162842;
            font-weight: 600;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #fff;
        }
    
        .accordion-title i {
            transition: transform 0.3s ease;
        }
    
        .accordion-title.active i {
            transform: rotate(180deg);
        }
    
        .accordion-content {
            display: none;
            padding: 15px;
            background: #162842;
            color: #fff;
            border-top: 1px solid #dddddd3a;
        }
    
        .accordion-content.active {
            display: block;
        }
        .accordion-item:first-of-type{
            border-radius: 0px !important;
        }
        .radial-progress {
      width: 190px;
      height: 190px;
      transform: rotate(-90deg);
      margin-bottom: 20px;
    }
    
    .radial-progress circle {
      fill: none;
      stroke-width: 10;
    }
    
    .bar-static {
      stroke: #eee;
    }
    
    .bar--animated {
      stroke: #f36f27;
      stroke-dasharray: 219.911; /* 2πr = 2 * π * 35 */
      stroke-dashoffset: 219.911;
      transition: stroke-dashoffset 1s ease;
    }
    
    .radial-progress text.countervalue {
      fill: #000;
      font-size: 16px;
      text-anchor: middle;
      dominant-baseline: middle;
      transform: rotate(90deg);
      transform-origin: 40px 40px;
    }
        </style>
        
        <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/digital-marketing.png')); ?>');">

    <style>
        .animated-heading, .animated-paragraph, .animated-button {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease forwards;
        }

        .animated-paragraph {
            animation-delay: 0.6s;
        }

        .animated-button {
            animation-delay: 1.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="top-banner-title">
        <h1 class="animated-heading">Transform Your <span> Business with Future-Ready </span> IT Solutions</h1>

         <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Customized IT
                                Solutions.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">24/7 Support &
                                Monitoring.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Secure & Scalable
                                Infrastructure</span>
                        </li>
                    </ul>

                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
         <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style="padding-left: 50px;">
                <h1 style="color: #003760;"><span>Transform Your <span style="color: #f36f27;">Business</span> <br><span
                            style="color: #f36f27;"> with Future-Ready  </span> </span><span> IT Solutions</span> </h1>
                <p style="color: #003760;">Unlock new growth opportunities with smart, secure, and scalable IT services.
                    <br>
                    From startups to enterprises, we power your success with innovative tech solutions.
                </p>
                <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Customized IT
                                Solutions.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">24/7 Support &
                                Monitoring.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Secure & Scalable
                                Infrastructure</span>
                        </li>
                    </ul>

                </div>
                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Contact Now</button>



            </div>
            <img src="<?php echo e(asset('assets/images/bg-banner.png')); ?>" width="370px" style="margin-top: 15px; z-index: 1;">

        </div>
        <div class="banner-bottom-feature">
            <div class="banner-bottom-card-design">
                <div class="bonner-bottom-card">
                    <img src="<?php echo e(asset('assets/images/united.png')); ?>" width="80px" />
                    <h3>IT Consultancy</h3>

                </div>
                <div class="bonner-bottom-card">
                    <img src="<?php echo e(asset('assets/images/united.png')); ?>" width="80px" />
                    <h3>24 / 7 Live Support</h3>

                </div>
                <div class="bonner-bottom-card">
                    <img src="<?php echo e(asset('assets/images/united.png')); ?>" width="80px" />
                    <h3>Strategic Consulting</h3>

                </div>
                <div class="bonner-bottom-card">
                    <img src="<?php echo e(asset('assets/images/united.png')); ?>" width="80px" />
                    <h3>Market Analysis</h3>

                </div>
            </div>
            
        </div>

        <div class="site-main mt-30">

            <section class="prt-row about01-about-section clearfix">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-5 res-1199-pl-15 res-1199-pr-15">
                            <div class="prt_single_image-wrapper">
                                <img width="540" height="530" class="img-fluid" src="<?php echo e(asset('assets/images/single-img-7.png')); ?>"
                                    alt="single-img-7">
                            </div>
                        </div>
                        <div class="col-lg-7 align-self-center">
                            <div class="pl-50 res-1199-pr-15 res-1199-pl-30 res-991-pl-15 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title mb-15">
                                    <div class="title-header">
                                        <h3>Why Choose Us</h3>
                                        <h2 class="title">We Deliver Innovation That  <span class="text-base-skin"> Drives Growth</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Step into a digital journey where creativity meets technology. We blend strategy, design, and development to build impactful solutions that accelerate your business. With a focus on performance and user experience, our IT services are crafted to help you lead in the competitive digital space.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="">
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="85%">
                                        <div class="progressbar-title">Diplomatic Visa</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="92">92%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="74%">
                                        <div class="progressbar-title">Business Visa</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="78">78%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                </div>
                                <div class="row pt-30">
                                    <div class="col-lg-5 col-md-4 col-sm-12">
                                        <div class="prt_single_image-wrapper mr-38">
                                            <img width="960" height="680" class="img-fluid"
                                                src="<?php echo e(asset('assets/images/single-img-8.png')); ?>" alt="single-img-8">
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-8 col-sm-12 align-self-center">
                                        <ul class="prt-list style1 ml_30 res-767-ml-0 res-767-mt-20">
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">The desire blur boundaries
                                                    fulfil</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">Certified legal advisors to serve
                                                    way</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">Easy approval by consultant</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">The desire blur boundaries
                                                    fulfil</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="section-title">
                <div class="title-header">
                    <!-- <h3 class="text-center">Other Services</h3> -->
                    <h2 class="title text-center">Other <span>Services</span> </h2>
                </div>
                
            </div>
            <div class="service-page-service-card1 mb-25">
                
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Website Design & Development</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Mobile Applications (Android & iOS)</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3> Digital Marketing</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Graphic Designing & Video Creation</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Adwords & PPC Campaigns</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Social Media Marketing</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3>Search Engine Optimisation (SEO)</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
               
                <div class="service-p-card">
                    <img src="<?php echo e(asset('assets/images/services1.png')); ?>" width="170px">
                    <h3> ERP & CRM's</h3>
                    <button class="service-p-btn">Explore More</button>

                </div>
                
                

            </div>
            <!-- about-section -->
            
            <div class="connect-section">
                <h3 class="title">Book a Free Appointment</h3>
                <p class="text-center">We are just a call or text away. Reach out to us and our expert business setup
                    consultants will<br> get back to you to
                    counsel you at every step of your company formation journey. </p>
                <div class="d-flex justify-content-between connect-section-btn">
                    <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
                    <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
                </div>
            </div>
            
             <section class=" service02-about-section mb-30 mt-30">
                <div class="" style="padding: 0px 30px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <!-- <h3 class="text-center">Take the step to</h3> -->
                                        <h2 class="title text-center">Social Media Marketing <span> Services</span> in the UAE & Dubai</h2>
                                    </div>
                                    <div class="title-desc text-center">
                                        <p>Whether you're a startup or a growing enterprise, our Social Media Marketing Services Helps to Build a Brand, Our custom designed packages to match your goals and budget.
Choose the right plan and get started with a system that works for you..</p>
                                    </div>
                                </div><!-- section title end -->

                                <div class="slick_slider row"
                                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 3}}, {"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}'>




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
                <a class="home-page-price-btn" href="<?php echo e(route('contact-us')); ?>">Register Now</a>
                <a class="home-page-price-btn1" href="<?php echo e(route('contact-us')); ?>"><i class="fa-solid fa-phone-volume"></i></a>
                <a class="home-page-price-btn1" href="<?php echo e(route('contact-us')); ?>"><i class="fa-brands fa-whatsapp"></i></a>
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
            <div class="service-type04-first-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-title">
                                <div class="service-header">
                                    <h3>Key Feature</h3>
                                </div>
                                <div class="service-desc">
                                    <p>You are nothing witout your set eyes care set injury magna consectr elit, do
                                        eiusmod tempor incididunt or ut labore areas disease eyecare dolore aliqua. Ut
                                        enim adet minim veniam, and quis nostrud exercitation produrYou are nothing
                                        witout your set eyes care set injury magna consectr elit, do eiusmod tempor
                                        incididunt or utlabore areas disecare dolore.aliqua. Ut enim ad et minim veniam,
                                        and quis nostrud exercitation produrconducted right in our clinic.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mt-40 res-991-mt-30">
                        
                        <div class="col-lg-12 align-self-center">
                            <div class="pl-30 res-991-mt-15 res-991-pl-0">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-office-building"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3>Customise Solution</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-3"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3> Responsive Design</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3> User Friendly</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-visa-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3>SEO Compatible</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-visa-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3>Higher Ranking on Google</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="featured-icon-box style16">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-visa-1"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h3>Hassle Free Solution</h3>
                                            </div>
                                            <div class="prt-horizontal_sep mt-20 mb-20"></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <!-- about-section-end -->
            <?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


 <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- site-main end-->

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/it-services.blade.php ENDPATH**/ ?>