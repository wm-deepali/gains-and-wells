

<?php $__env->startSection('pagetitle'); ?>
Website Design & Development
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
    
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/website-mobile.png')); ?>');">

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

    <div class="top-banner-title">
        <h1 class="animated-heading">Bring Your Vision <span> to Life </span> with Stunning Websites </h1>

           <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Custom UX / UI</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">100% User Friendly.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> SEO Optimize</span>
                        </li>
                    </ul>

                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style=" width:61%;">
                <h1 style="color: #003760;"><span>Bring Your Vision  <span style="color: #f36f27;">to Life</span> <span
                            style="color: #f36f27;"> with Stunning Websites  </span> </span> </h1>
                <p style="color: #003760;">We craft modern, responsive, and results-driven websites that
                        elevate your brand. From sleek design to robust <br/>functionality — we handle everything to make
                        your online presence unforgettable.
                </p>
                <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Custom UX / UI</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">100% User Friendly.</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> SEO Optimize</span>
                        </li>
                    </ul>

                </div>
                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Get Started</button>



            </div>
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/website.png')); ?>" class="main-image" alt="Website Image" width="220px">
  <div class="small-dot"></div>
</div>


        </div>
 <!--<div class="top-banner-bank-website">-->
 <!--           <div class="top-banner-title">-->
 <!--               <h1 class="banner-title-top-wesite"> Bring Your Vision to Life-->
 <!--                   <br><span> with Stunning Websites-->
 <!--                   </span>-->
 <!--               </h1>-->
 <!--               <div class="position-relative mb-15" style="width: 70%;color: gray;">-->

 <!--                   <p style="width: 80%;color: gray;">We craft modern, responsive, and results-driven websites that-->
 <!--                       elevate your brand. From sleek design to robust functionality — we handle everything to make-->
 <!--                       your online presence unforgettable.</p>-->

 <!--               </div>-->
 <!--               <div class="position-relative mb-15">-->

 <!--                   <ul class="prt-list style2">-->
 <!--                       <li>-->
 <!--                           <i class="fa-solid fa-angles-right"></i>-->
 <!--                           <span class="prt-list-li-content">Custom UX / UI.</span>-->
 <!--                       </li>-->
 <!--                       <li>-->
 <!--                           <i class="fa-solid fa-angles-right"></i>-->
 <!--                           <span class="prt-list-li-content">100% User Friendly.</span>-->
 <!--                       </li>-->
 <!--                       <li>-->
 <!--                           <i class="fa-solid fa-angles-right"></i>-->
 <!--                           <span class="prt-list-li-content">SEO Optimized</span>-->
 <!--                       </li>-->
 <!--                   </ul>-->

 <!--               </div>-->
 <!--               <button class="cost-calculate-banner1"> Get Started</button>-->


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
                                        <h2 class="title">Website Designing & Development <span class="text-base-skin">
                                                That Delivers Impact</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Your website is your digital storefront — it should reflect the quality,
                                            creativity, and credibility of your brand. We specialize in designing and
                                            developing custom websites tailored to your business goals. Whether you're a
                                            startup, a growing brand, or an established enterprise, we ensure your
                                            website looks great, works flawlessly, and converts visitors into customers.
                                        </p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="">
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="95%">
                                        <div class="progressbar-title">Beter UX / UI</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="95">95%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="74%">
                                        <div class="progressbar-title">User Friendly Design</div>
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
            <!-- about-section -->
            <div class="service-type04-first-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="service-title">
                                <div class="service-header">
                                    <h3>Tailored Website Solutions, Built Just for You.</h3>
                                </div>
                                <div class="service-desc">
                                    <p>We don’t believe in one-size-fits-all. Every website we build is custom-developed
                                        to match your unique business goals, functionality needs, and brand identity.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-0 mt-40 res-991-mt-30">
                        <div class="website-solution">
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Business Website</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Fintech Website</h4>

                            </div>
                            <div class="website-solution-card " style="background:#ff7300">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4 style="color:#fff">E-Commerce</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Classified Portals</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Job Portals</h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="prt-row about01-about-section clearfix">
                <div class="container">
                    <div class="row g-0">

                        <div class="col-lg-7 align-self-center">
                            <div class="pl-50 res-1199-pr-15 res-1199-pl-30 res-991-pl-15 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title mb-15">
                                    <div class="title-header">
                                        <h3>Website for All Business Needs</h3>
                                        <h2 class="title">No Website, No Business — <span class="text-base-skin"> Go
                                                Digital, Stay Ahead</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>A strong online presence starts with a powerful website. Whether you're
                                            selling, showcasing, or scaling, your website is the key to unlocking new
                                            opportunities and reaching a wider audience.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="featured-icon-box style16">


                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p><i class="fa-solid fa-angles-right"></i> Don't let your
                                                        competitors leave you behind in the digital race. A great
                                                        website isn't a luxury — it's a necessity. </p>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p><i class="fa-solid fa-angles-right"></i> We’re here to turn your
                                                        ideas into interactive, user-friendly, and high-performing
                                                        websites.</p>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-desc">
                                                    <p><i class="fa-solid fa-angles-right"></i> Let’s build a digital
                                                        experience your audience will love — because your brand deserves
                                                        nothing less.</p>
                                                </div>
                                            </div>
                                            <button class="cost-calculate-banner1 mt-25" data-bs-toggle="offcanvas" href="#offcanvasExample"> Get Started</button>
                                        </div>
                                    </div>


                                </div>

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
            <div class="prt-service-single-content-area " style="padding:0px 40px 80px 40px;">

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
                                                    <h3>We Build What You Need, Exactly How You Want It </h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Your ideas, your vision — our expertise. Whether it’s a simple
                                                        website or a complex web application, we develop custom
                                                        solutions tailored to your exact requirements, with precision
                                                        and care.</p>
                                                </div>
                                                <button class="cost-calculate-banner1 mt-25" data-bs-toggle="offcanvas" href="#offcanvasExample"> Free Consultation</button>
                                            </div>
                                        </div>
                                    </div>



                                </div>
           
  <?php echo $__env->make('front.layouts.includes.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
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
                                        <h1 class="wptb-item--title" style="font-family: 'fontello';"> <span>Choose us for reliable expert guidance.</span></h1>
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
                                <div class="wptb--rating-label">Creating Business GROWTH</div>
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
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Custom, Clean & Responsive Design</h3>
        <p class="wptb-item--description mb-0">Your website will look amazing and perform well on all devices.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Full-Stack Development</h3>
        <p class="wptb-item--description mb-0">From front-end visuals to back-end power, we do it all.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Performance Optimized</h3>
        <p class="wptb-item--description mb-0">Fast load times, smooth navigation, and efficient coding.
</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">SEO-Ready Structure</h3>
        <p class="wptb-item--description mb-0">We build with SEO in mind so you can rank higher,</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Security First</h3>
        <p class="wptb-item--description mb-0">We follow best practices to keep your site and user data safe.
</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Business-Focused Solutions</h3>
        <p class="wptb-item--description mb-0">We align design with your brand’s goals to drive real results.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Scalable & Future-Ready </h3>
        <p class="wptb-item--description mb-0">As your business grows, your website can too..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Ongoing Support & Maintenance</h3>
        <p class="wptb-item--description mb-0">We’re here even after the launch..</p>
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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/website-design-development.blade.php ENDPATH**/ ?>