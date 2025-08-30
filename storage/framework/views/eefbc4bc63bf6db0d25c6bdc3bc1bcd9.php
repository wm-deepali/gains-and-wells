

<?php $__env->startSection('pagetitle'); ?>
Mobile Application (Android & iOS)
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
 <style>
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

        .accordion-item:first-of-type {
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
            stroke-dasharray: 219.911;
            /* 2πr = 2 * π * 35 */
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

        .process-flow {
  padding: 30px 20px;
  /* background-color: #f9f9f9; */
  text-align: center;
  font-family: 'Segoe UI', sans-serif;
}

.process-title {
  font-size: 28px;
  color: #003760;
  font-weight: bold;
  /* margin-bottom: 40px; */
}

.steps-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.step {
  flex: 1 1 150px;
  max-width: 260px;
  height: 100px !important;
  margin-bottom: 60px;
}

.arrow {
  position: relative;
  background-color: #c1c2c43b;
  color: #004994;
  padding: 20px 15px;
  border-radius: 8px;
  font-weight: bold;
  text-align: center;
  font-size: 16px;
  height: 100px !important;
 
}

.arrow span {
    height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: normal;
  font-size: 14px;
  margin-top: 5px;
}

.arrow::after {
  content: "";
  position: absolute;
  right: -20px;
  top: 50%;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-top: 20px solid transparent;
  border-bottom: 20px solid transparent;
  border-left: 20px solid #c1c2c43b;
}

.step:last-child .arrow::after {
  content: none;
}

@media (max-width: 768px) {
  .steps-container {
    flex-direction: column;
    align-items: center;
  }

  .arrow::after {
    display: none;
  }
}

    </style>
    <style>
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

        .accordion-item:first-of-type {
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
            stroke-dasharray: 219.911;
            /* 2πr = 2 * π * 35 */
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
       .testimonial-section {
      padding: 60px 20px;
      background-color: #f0f5fb;
    }

    .testimonial-slider-wrapper {
        
      max-width: 1240px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .testimonial-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .testimonial-card {
      min-width: 100%;
      box-sizing: border-box;
      padding: 40px;
      background: #fff;
      border-radius: 20px;
      /*box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);*/
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .testimonial-content {
      flex: 1 1 60%;
      padding-right: 20px;
    }

    .testimonial-content h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .testimonial-text {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
    }

    .testimonial-client {
      display: flex;
      align-items: center;
      margin-top: 20px;
      gap: 10px;
    }

    .testimonial-client img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
    }

    .testimonial-client h4 {
      margin: 0;
      font-size:16px;
      font-weight:600;
    }

    .testimonial-image {
      flex: 1 1 35%;
      text-align: center;
    }

    .testimonial-image img {
      width: 100%;
      max-width: 300px;
      border-radius: 15px;
    }

    .testimonial-nav {
      text-align: center;
      margin-top: 30px;
    }

    .testimonial-nav button {
      background-color: #3e68d1;
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      margin: 0 8px;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.3s ease;
     
    }

    .testimonial-nav button:hover {
      background-color: #d1d5db;
    }
 .icon-box-col {
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  padding: 2rem;
}

/* Remove right border from every 2nd column (assuming 2 columns per row) */
.icon-box-col:nth-child(2n) {
  border-right: none;
}

/* Remove bottom border from last row */
.icon-box-col:nth-last-child(-n+2) {
  border-bottom: none;
}

@media (max-width: 576px) {
  .icon-box-col {
    border-right: none;
    border-bottom: 1px solid red;
  }
  .icon-box-col:last-child {
    border-bottom: none;
  }
}


    </style>
    
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/mobile-application.png')); ?>');">

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
        <h1 class="animated-heading">Powerful Mobile Apps for <span>Android & iOS That </span> Drive Results </h1>

 <div class="mobile-app-logo">
                    <img src="<?php echo e(asset('assets/images/android (1).png')); ?>">
                    <img src="<?php echo e(asset('assets/images/kotlin.svg')); ?>">
                    <img src="<?php echo e(asset('assets/images/swift.png')); ?>">
                    <img src="<?php echo e(asset('assets/images/Google-flutter-logo.svg.png')); ?>" height="40px">
                    <img src="<?php echo e(asset('assets/images/java (2).png')); ?>">

                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style=" width:61%;">
                <h1 style="color: #003760;"><span>Powerful Mobile Apps for Android &  <span
                            style="color: #f36f27;"> iOS That Drive Results </span> </span> </h1>
                <p style="color: #003760;">We design and develop sleek, scalable, and user-friendly mobile apps that work seamlessly on both Android and iOS. From idea to launch, we build apps that bring your vision to life and deliver real impact.
                </p>
 <div class="mobile-app-logo">
                    <img src="<?php echo e(asset('assets/images/android (1).png')); ?>">
                    <img src="<?php echo e(asset('assets/images/kotlin.svg')); ?>">
                    <img src="<?php echo e(asset('assets/images/swift.png')); ?>">
                    <img src="<?php echo e(asset('assets/images/Google-flutter-logo.svg.png')); ?>" height="40px">
                    <img src="<?php echo e(asset('assets/images/java (2).png')); ?>">

                </div>
                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Get Started</button>



            </div>
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/mobile.png')); ?>" class="main-image" alt="Website Image" width="220px">
  <div class="small-dot"></div>
</div>


        </div>
 <!--<div class="top-banner-bank-website">-->
 <!--           <div class="top-banner-title">-->
 <!--               <h1 class="banner-title-top-wesite"> Powerful Mobile Apps for Android & -->
 <!--                   <br><span> iOS That Drive Results-->
 <!--                   </span>-->
 <!--               </h1>-->
 <!--               <div class="position-relative mb-15" style="width: 70%;color: gray;">-->

 <!--                   <p style="width: 80%;color: gray;"> We design and develop sleek, scalable, and user-friendly mobile apps that work seamlessly on both Android and iOS. From idea to launch, we build apps that bring your vision to life and deliver real impact.</p>-->

 <!--               </div>-->
 <!--               <div class="mobile-app-logo">-->
 <!--                   <img src="<?php echo e(asset('assets/images/android (1).png')); ?>">-->
 <!--                   <img src="<?php echo e(asset('assets/images/kotlin.svg')); ?>">-->
 <!--                   <img src="<?php echo e(asset('assets/images/swift.png')); ?>">-->
 <!--                   <img src="<?php echo e(asset('assets/images/Google-flutter-logo.svg.png')); ?>" height="40px">-->
 <!--                   <img src="<?php echo e(asset('assets/images/java (2).png')); ?>">-->

 <!--               </div>-->
 <!--               <button class="cost-calculate-banner1"> Get Free Consultation</button>-->


 <!--           </div>-->

 <!--       </div>-->


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
                                        <!-- <h3>Why Choose Us</h3> -->
                                        <h2 class="title">Custom Mobile App Development for <span class="text-base-skin">
                                            the Modern User</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p> In today’s mobile-first world, your business needs more than just a website — it needs a powerful app. We specialize in creating high-performance Android and iOS applications tailored to your unique goals. Whether it's a startup idea or an enterprise-level solution, we ensure your app is intuitive, fast, and future-ready.
                                        </p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="">
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="90%">
                                        <div class="progressbar-title">Custom Developed</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="90">90%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="98%">
                                        <div class="progressbar-title">User Friendly Apps</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="98">98%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="col-lg-12 align-self-center mb-30">
                <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                    <!-- section title -->
                    
                        <div class="row">
                            <div class="col-6 ">
                                <div class="bank-card-design">
                                   
                                    <h3>Seamless Cross-Platform Experience</h3>
                                    <p>We build apps that perform flawlessly on both Android and iOS, ensuring a consistent user experience. Reach more users with a single, powerful solution that adapts to every device.<br><br></p>
                                   

                                </div>

                            </div>
                            <div class="col-6 ">
                                <div class="bank-card-design">
                                    
                                    <h3>Feature-Rich & Business-Focused Solutions</h3>
                                    <p>From user login to real-time updates and secure payments — we develop every feature your business needs. Each app is designed to solve real problems and deliver measurable results.</p>

                                </div>

                            </div>
                        </div>
                    </div><!-- section title end -->
                    <!-- section title -->
                   
                  
                    
                    

                </div>
            
            <!-- about-section -->
            <section class="process-flow">
                <h2 class="process-title">Our Design & Development Process</h2>
                <p>A mobile app isn’t just a trend — it’s a powerful tool to connect, engage, and grow. We create apps that offer real value, keep users <br>coming back, and help your brand stay ahead in a mobile-first world.</p>
                <div class="steps-container">
                  <div class="step">
                    <h4>Step 1</h4>
                    <div class="arrow"><span>Requirement Analysis</span></div>
                  </div>
                  <div class="step">
                    <h4>Step 2</h4>
                    <div class="arrow"><span>UX Designing</span></div>
                  </div>
                  <div class="step">
                    <h4>Step 3</h4>
                    <div class="arrow"><span>Wireframing</span></div>
                  </div>
                  <div class="step">
                    <h4>Step 4</h4>
                    <div class="arrow"><span>UI Designing</span></div>
                  </div>
                  <div class="step">
                    <h4>Step 5</h4>
                    <div class="arrow"><span>API Development & Integrations</span></div>
                  </div>
                  <div class="step">
                    <h4>Step 6</h4>
                    <div class="arrow"><span>Testing & Deployment</span></div>
                  </div>
                </div>
              </section>
              
           
            <section class="prt-row about01-about-section clearfix">
                <div class="container" style="max-width:1300px;">
                    <div class="row g-0" style="justify-content: space-between;">

                        <div class="col-lg-6 align-self-center">
                            <div class="pl-50 res-1199-pr-15 res-1199-pl-30 res-991-pl-15 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title mb-15">
                                    <div class="title-header">
                                        <h3>Your customers are on mobile — is your business?
                                        </h3>
                                        <h2 class="title">A well-built app opens doors to deeper engagement, <span class="text-base-skin"> higher retention, and greater growth.</span></h2>
                                    </div>
                                    <div class="featured-icon-box style16">


                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p><i class="fa-solid fa-angles-right"></i> We design apps that aren’t just functional — they’re addictive. With smooth UI/UX, smart notifications, and performance-first development, we help keep your users engaged, active, and loyal.
                                                    </p>

                                                </div>
                                            </div>
                                            </br>
                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p><i class="fa-solid fa-angles-right"></i> Let’s build an app that’s not just downloaded — but used, loved, and shared.</p>
                                                </div>
                                            </div>

                                           
                                        </div>
                                   
                                </div><!-- section title end -->
                                

                            </div>
                        </div>
                        <div class="col-lg-5 res-1199-pl-15 res-1199-pr-15">
                            <div class="prt_single_image-wrapper">
                                <img width="540" height="530" class="img-fluid" src="<?php echo e(asset('assets/images/single-img-7.png')); ?>"
                                    alt="single-img-7">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="prt-service-single-content-area" style="padding:0px 40px 80px 40px;">

                                    <div class="bg-base-grey">
                                        <div class="featured-icon-box style13">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-8"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Get Custom App Development by a Skilled & Experienced Team</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Every business is unique — and so is the app we build for it. Backed by a team of expert developers, designers, and strategists, we craft tailor-made mobile applications that meet your exact requirements and exceed expectations.</p>
                                                </div>
                                                 <button class="cost-calculate-banner1 mt-25" data-bs-toggle="offcanvas" href="#offcanvasExample"> Free Consultation</button> 
                                            </div>
                                        </div>
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
                <a class="home-page-price-btn1" href="tel:<?php echo e($package->call_no ?? ''); ?>">
<i class="fa-solid fa-phone-volume"></i>
</a>


<a class="home-page-price-btn1" href="https://wa.me/<?php echo e($package->watsup_no ?? ''); ?>" target="_blank">
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
                  <form action="<?php echo e(route('mobileAppDevelopment.submit_mobileAppDevelopment')); ?>" method="POST" class="contact_form clearfix">
                  
                     <div class="row">
                      <div class="col-md-12">  
                        <input type="hidden" name="offer_id" id="contactFormModal"  value="<?php echo e($package->id); ?>">  
                         <input type="hidden" name="p_id" id="contactFormModal"  value="<?php echo e($package->page_id); ?>">
                        <input name="name" type="text" placeholder="Your Full Name" required>
                      </div>
                      <div class="col-md-12">
                        <input name="email" type="email" placeholder="Email Address" required>
                      </div>
                       <div class="col-md-12">
                        <input name="mobile" type="text" placeholder="Mobile Number" required>
                      </div>
                       <div class="col-md-12">
                        <input name="location" type="text" placeholder="Location " required>
                      </div>
                              
                      <div class="col-md-12">
                        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                      </div>
                      <div class="mt-4">
                        <button class="submit 
                        prt-btn prt-btn-size-md prt-btn-shape-round
                         prt-btn-style-fill prt-btn-color-skincolor" type="submit">Submit Here</button>
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
          <section class="prt-row wptb-why-choose-one">
            <div class="container" style="max-width:1300px;">
                <div class="wptb-heading">
                    <div class="wptb-item--inner text-center mb-5">
                        <h6 class="wptb-item--subtitle">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                                </svg>
                            </span>
                            Why Choose Us
                        </h6>
                        <h1 class="wptb-item--title"> <span>Trusted Partner for Seamless <br>Business Solutions</span></h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 pe-md-5">
                        <div class="wptb-client-review bg-white wow skewIn card-review-card">
                            <div class="wptb-item--inner">
                                <div class="wptb-heading">
                                    <div class="wptb-item--inner text-center">
                                        <h6 class="wptb-item--subtitle">BUSINESS OPPORTUNITIES</h6>
                                        <h1 class="wptb-item--title" style="font-family: 'fontello';"> <span>We help Making your dream into Reality</span></h1>
                                    </div>
                                </div>
                                
                                <div class="wptb-item--images">
                                    <div class="wptb-counter1">
                                        <div class="wptb-item--inner">
                                            <div class="wptb-item--value">4.8</div>
                                        </div>
                                    </div>
    
                                    <div class="wptb-avatar avatar-group">
                                        <!-- Avatar Group -->
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/1.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/2.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/3.jpg')); ?>" alt="Avatar">
                                        </span>
                                        <span class="avatar rounded-circle">
                                            <span class="avatar-initials rounded-circle"><a href="#">12+</a></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="wptb--rating-label">Creating Business Growth</div>
                                <div class="wptb-item--star">
                                    <div class="item-star"> <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i> </div> 
                                   <button style="background:#162842" data-bs-toggle="offcanvas" href="#offcanvasExample"> Get in Touch</button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="wptb-why-choose--inner">
<div class="row g-0">
<div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Native Android & iOS Development</h3>
        <p class="wptb-item--description mb-0">Optimized performance on every device.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Custom Features as Per Your Business Needs</h3>
        <p class="wptb-item--description mb-0">From chat to payments to real-time updates.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';"> Robust Backend Integration</h3>
        <p class="wptb-item--description mb-0">We connect your app with powerful backend systems and APIs.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Stunning UI/UX Design</h3>Smooth, beautiful, and easy-to-use interfaces.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Performance & Speed Optimized</h3>
        <p class="wptb-item--description mb-0">Lightning-fast load times and seamless transitions.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Security First</h3>
        <p class="wptb-item--description mb-0">We follow the latest standards to keep user data safe and secure.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Scalable Architecture</h3>
        <p class="wptb-item--description mb-0">Apps built to grow with your business</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Full Support</h3>
        <p class="wptb-item--description mb-0">From Concept to Launch and Beyond – We're with you every step of the way</p>
      </div>
    </div>
  </div>

  <!-- Repeat for remaining 6 cards -->
</div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
             <div class="support-card ">
                <img src="<?php echo e(asset('assets/images/support-bg.png')); ?>" width="190px">
                <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3 style="font-size: 32px;
    line-height: 38px;font-weight:600; color:#fff;">Looking for an Experts Advice? </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p style="color:#fff;">Get expert advice tailored to your needs — no pressure, just solutions.<br>
Get instant solutions from professional advisors, who power the platforms our customers swear by</p>
                                                </div>
                                                
                                            </div>
<!--                <div class="support-card-text">-->
<!--                    <h2>Looking for an Experts Advice? </h2>-->
<!--                    <p style="color:#fff">Get expert advice tailored to your needs — no pressure, just solutions.<br>-->
<!--Get instant solutions from professional advisors, who power the platforms our customers swear by</p>-->


<!--                </div>-->
                  <a href="tel:++971 52 993 0830">
  <button>Talk To A Specialist</button>
</a>
            </div>
<?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
           
           
                    <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        
        
       <section class="testimonial-section mt-3">
    <div class="testimonial-slider-wrapper">
      <div class="testimonial-slider">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Kelly Williamson</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Sarah Jordan</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card">
          <div class="testimonial-content">
            <h2>What Our Clients Say</h2>
            <p class="testimonial-text">
              "Discover how we've helped businesses grow and succeed through our expert guidance and reliable services. Hear directly from our satisfied clients below."
            </p>
            <div class="testimonial-client">
              <img src="https://i.ibb.co/CHkf9fN/female-avatar.png" alt="Client Photo" />
              <div>
                <h4>Anna Peterson</h4>
                <span>Client</span>
              </div>
            </div>
          </div>
          <div class="testimonial-image">
            <img src="https://i.ibb.co/q9gd5nN/female-photo.png" alt="Testimonial Person" />
          </div>
        </div>
      </div>

      <div class="testimonial-nav">
        <button id="prevBtn">&larr;</button>
        <button id="nextBtn">&rarr;</button>
      </div>
    </div>
  </section>
    </div><!-- site-main end-->
      <script>
    const slider = document.querySelector('.testimonial-slider');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let index = 0;

    function updateSlider() {
      const cardWidth = cards[0].offsetWidth;
      slider.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
      if (index > 0) {
        index--;
        updateSlider();
      }
    });

    nextBtn.addEventListener('click', () => {
      if (index < cards.length - 1) {
        index++;
        updateSlider();
      }
    });

    window.addEventListener('resize', updateSlider);
  </script>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/mobile-apps-anroid-ios-development.blade.php ENDPATH**/ ?>