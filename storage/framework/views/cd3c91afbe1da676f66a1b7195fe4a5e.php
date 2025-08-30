

<?php $__env->startSection('pagetitle'); ?>
PRO Services
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
            background: #162842;c
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
    
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/pro-mobile.png')); ?>');">

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
        <h1 class="animated-heading">Reliable PRO Services for <span> Business Success in </span> the UAE</h1>

                         <p style="color: #fff;"> Simplify your government-related processes with our expert PRO solutions.
                    From visa processing to approvals, we handle all your documentation with ease.
                    </p>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
<div class="top-banner-dubai-mainland-pro-service">
            <div class="top-banner-title">
                <h1 style="color: #003760;">Reliable PRO Services for  <br><span> Business Success in<br> the UAE</span></h1>
                <p style="color: #003760;"> Simplify your government-related processes with our expert PRO solutions.<br>
                    From visa processing to approvals, we handle all your documentation with ease.
                    </p>
              
                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Get PRO</button>



            </div>

        </div>

        <!--site-main start-->
        <div class="site-main">
           

           
            <!-- about-section -->
            <section class="prt-row service02-about-section" >
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Company Setup
                                            in Dubai Mainland</h3>
                                        <h2 class="title">What Are <span>PRO Services?</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>PRO (Public Relations Officer) services refer to professional support for handling all government-related documentation and approvals in the UAE. This includes visa applications, license renewals, labor contracts, Emirates ID processing, and more. By outsourcing PRO services, businesses save time, avoid delays, and ensure full compliance with UAE regulations.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="row mb-30">
                                    <div class="col-lg-6">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-office-building"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Visa Processing & Renewal</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Smooth handling of employment, investor, and dependent visas.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-instructor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Trade License Services.</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Assistance with new license applications, renewals, and amendments.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-instructor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Document Clearance & Attestation.</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Fast and accurate processing of government paperwork.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-instructor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3> Labour & Immigration Services.</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>  Complete support with MOL, GDRFA, and immigration formalities.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div
                                            class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-instructor"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Time-Saving & Hassle-Free
                                                        .</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p> Focus on your business while we handle all admin and approvals.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="dubai-commercial-card">
                                            <div class="dubai-commercial-card-one">
                                                <h3>PRO Services Starts @ AED 4000<br></h3>

                                                <h4><strong>Our PRO Services package is designed for seamless business setup and ongoing compliance in the UAE. </strong></h4>
                                                <h4>Enjoy a complete solution covering visas, licenses, renewals, and government approvals—all in one place.</h4>
                                                
                                                <button class="cost-calculate-banner" style="justify-content: end; float: right;" data-bs-toggle="offcanvas" href="#offcanvasExample">
                                                    Book PRO Service Now</button>
                                            </div>
                                           

                                        </div>
                                    </div>

                                   
                                </div>
                                <div class="row mt-50 res-991-mt-30">                                    
                                    <div class="col-lg-6">
                                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-twenty-six z-index-2">
                                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                            <div class="layer-content">
                                            </div>
                                        </div>
                                        <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-26.png')); ?>" alt="bg-image-26">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="spacing-26">
                                            <div class="service-title mb-30">
                                                <div class="service-header">
                                                    <h3 class="mb-0">What We Do</h3>
                                                    <p>At the heart of our PRO services is a commitment to efficiency, accuracy, and convenience. We deliver end-to-end support for all your government-related needs—from visa applications and labor permits to document attestation and trade license renewals. Our team ensures your paperwork is processed correctly the first time, saving you time and avoiding costly delays. With a dedicated account manager and transparent updates throughout, we offer a reliable, tailored experience designed to let you focus on growing your business while we handle the rest.</p>
                                                </div>                                        
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                                        
                                                        
                                                           
                                                            <div class="featured-desc">
                                                                <p><i class="fa-solid fa-angles-right"></i> Seamless coordination with UAE government departments.</p>
                                                                <p><i class="fa-solid fa-angles-right"></i> Fast, error-free document handling and clearances.</p>
                                                                <p><i class="fa-solid fa-angles-right"></i> Real-time progress updates and full transparency.</p>
                                                                <p><i class="fa-solid fa-angles-right"></i> Personalized service with a dedicated account manager.</p>
                                                                <p><i class="fa-solid fa-angles-right"></i> Solutions customized to your business type and size.</p>
                                                            </div>
                                                       
                                                    </div>
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
            <!-- <div class="b-page-card">
                
                <div class="row col-10">
                    <div class="col-md-6 res-767-mb-30 residency-key-points">
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-color-skincolor">
                                    <i class="flaticon-passport-8"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3 style="color: #fff;">Permanent Residency
                                    </h3>
                                </div>
                                <div class="featured-desc">
                                    <p>Stay in the UAE for up to 10 years with easy renewals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 residency-key-points">
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-color-skincolor">
                                    <i class="flaticon-passport-4"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3 style="color: #fff;">Family Inclusion</h3>
                                </div>
                                <div class="featured-desc">
                                    <p >Your immediate family members can benefit from the visa too.   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-color-skincolor">
                                    <i class="flaticon-passport-4"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3 style="color: #fff;">Access to Premium Services</h3>
                                </div>
                                <div class="featured-desc">
                                    <p >Leverage world-class healthcare, education, and business resources.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 ">
                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                            <div class="featured-icon">
                                <div class="prt-icon prt-icon_element-color-skincolor">
                                    <i class="flaticon-passport-4"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h3 style="color: #fff;">Investment and Growth</h3>
                                </div>
                                <div class="featured-desc">
                                    <p > A strong foundation for growing businesses and career prospects in the UAE.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            
            </div>
            -->
            <!-- about-section-end -->
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
                                        <h6 class="wptb-item--subtitle">BUSINESS  OPPORTUNITIES</h6>
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
                                   <button style="background:#162842" data-bs-toggle="offcanvas" href="#offcanvasExample"
> Get in Touch</button>
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
        <h3 class="wptb-item--title" style="font-family: 'fontello';">End-to-End Government Liaison</h3>
        <p class="wptb-item--description mb-0">We manage all interactions with UAE government departments on your behalf.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Quick & Compliant Paperwork</h3>
        <p class="wptb-item--description mb-0">All documents are accurately prepared, submitted, and tracked to avoid delays or rejections.
</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Transparent & Timely Updates</h3>
        <p class="wptb-item--description mb-0">You stay informed at every stage with real-time updates on your application or service</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Dedicated Account Manager
</h3>
        <p class="wptb-item--description mb-0">A single point of contact to ensure a smooth and personalized experience..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Tailored Solutions for Every Business</h3>
        <p class="wptb-item--description mb-0">Whether you're a startup, SME, or large enterprise, our services adapt to your needs.</p>
      </div>
    </div>
  </div>
  
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Expert Support Panel</h3>
        <p class="wptb-item--description mb-0">Expert Support Panel provides specialized assistance and guidance, ensuring effective solutions for complex challenges.</p>
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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/pro-services.blade.php ENDPATH**/ ?>