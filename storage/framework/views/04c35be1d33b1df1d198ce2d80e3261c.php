

<?php $__env->startSection('pagetitle'); ?>
OPENING A BUSINESS BANK
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
    .line-seprator-bottom{
        width: 100%;
        height: 2px;
        background-color: 1px solid rgb(255, 255, 255);
    }
    </style>
     <style>
    .documents-wrapper {
      display: flex;
      justify-content: space-between;
      gap: 40px;
      flex-wrap: wrap;
    }
    .document-box {
      flex: 1;
      min-width: 300px;
    }
    .document-box h3 {
      background-color: #004080;
      color: white;
      padding: 12px;
      margin: 0;
      font-size: 20px;
    }
    .documents-table {
      width: 100%;
      border: 1px solid #ccc;
      border-top: none;
      border-collapse: collapse;
    }
    .documents-table td {
      padding: 12px;
      border-top: 1px solid #ccc;
      background-color: #f9f9f9;
      font-size: 16px;
    }
    .documents-table td::before {
      content: "» ";
      color: #004080;
      font-weight: bold;
      margin-right: 6px;
    }
    .documents-table td.empty::before {
      content: "";
    }
    .section-heading {
      text-align: center;
      margin-bottom: 40px;
    }
    .section-heading h2 {
      font-size: 28px;
      color: #004080;
      margin-bottom: 10px;
    }
    .section-heading p {
      font-size: 16px;
      color: #666;
      max-width: 700px;
      margin: 0 auto;
    }
    .home-page-price-btn {
    background-color: #ffffff !important;
    border-radius: 2px;
    color: #003760 !important;
    padding: 7px 35px;
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
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/book-mobile.png')); ?>');">

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
        <h1 class="animated-heading">Simplify Your <span> Business Need </span> Accounting, Bookkeeping & Auditing Assistance</h1>

            <h4 style="color: rgb(255, 123, 0);">Hassle free services just a phone call aways</h4>
             <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: #fff;">
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;">Accurate Financial Reporting</span>
                        </li>
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Compliance & Regulation</span>
                        </li>
                        <li style="color:#fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Tailored Solutions</span>
                        </li>
                        
                    </ul>
                   
                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Get Free Assistance
        </button>
    </div>

</div>
     <!-- page-title end -->
         <div class="top-banner-corporate-book">
            <div class="top-banner-title">
                <h1 style="font-size: 44px; font-weight: 600;"><span style="color: #fff;">Simplify Your  </span> <span style="color: rgb(255, 123, 0);"> Business Need  <br/></span><span style="color:#fff;">Accounting, Bookkeeping & </br>Auditing Assistance</span></h1>
                <h4 style="color: rgb(255, 123, 0);">Hassle free services just a phone call aways</h4>
                <p style="color: #fff; margin-top: 0px;">We provide comprehensive accounting, bookkeeping, and auditing services to help streamline </br>your financial processes and ensure compliance. </br> Our expert team is committed to delivering accurate, reliable, and timely financial solutions tailored to your business needs.</p>
                <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: #fff;">
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;">Accurate Financial Reporting</span>
                        </li>
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Compliance & Regulation</span>
                        </li>
                        <li style="color:#fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Tailored Solutions</span>
                        </li>
                        
                    </ul>
                   
                </div>
                

                <button class="cost-calculate-banner1" data-bs-toggle="offcanvas" href="#offcanvasExample"> Get Free Assistance</button>
                <!-- <h1 class="mt-4" style="font-size: 18px; color: rgb(0, 60, 255);">Starting From AED <span style="font-size: 44px; font-weight: 600;">6,875</span> </h1> -->



            </div>

        </div>
        <!--site-main start-->
        <div class="site-main">
             <section class="prt-row services01-first-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bg-base-grey spacing-19">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="spacing-20">
                                            <div class="service-title">
                                                <div class="service-header">
                                                    <h3>How We Can Scale Your Business with Accounting, Bookkeeping & Auditing Services</h3>
                                                </div>
                                                <div class="service-desc">
                                                    <p class="mb-20">Better Solutions for Business <strong><span
                                                                class="text-base-skin">in Dubai </span></strong> By partnering with us for accounting, bookkeeping, and auditing assistance, we can help your business scale efficiently and sustainably. .<br><br> Our services ensure that your financial operations are organized, compliant, and optimized, allowing you to focus on growth and strategic decision-making.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-twenty-five z-index-2">
                                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                            <div class="layer-content">
                                            </div>
                                        </div>
                                        <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/book1.jpg')); ?>"
                                            alt="bg-image-25">
                                    </div>
                                </div>
                                <div class="row mt-50 res-991-mt-30 book-img-new">
                                    <div class="col-lg-6">
                                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-twenty-six z-index-2">
                                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                            <div class="layer-content">
                                            </div>
                                        </div>
                                        <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/book2.jpg')); ?>"
                                            alt="bg-image-26">
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="spacing-26">
                                            <div class="service-title mb-30">
                                                <div class="service-header">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div
                                                        class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                                        <div class="featured-icon">
                                                            <div class="prt-icon prt-icon_element-color-skincolor">
                                                                <i class="flaticon-office-building"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                     <div class="featured-title">
                                                                <h3>Streamlined Financial Processes</h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p> Our bookkeeping services ensure all transactions are accurately recorded, reducing errors and saving valuable time, which can be redirected toward business expansion.
</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="prt-horizontal_sep mt-25 mb-25"></div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div
                                                        class="featured-icon-box icon-align-before-content icon-ver_align-top style7 bg-color-white">
                                                        <div class="featured-icon">
                                                            <div class="prt-icon prt-icon_element-color-skincolor">
                                                                <i class="flaticon-instructor"></i>
                                                            </div>
                                                        </div>
                                                        <div class="featured-content">
                                                            <div class="featured-title">
                                                                <h3>Informed Decision-Making</h3>
                                                            </div>
                                                            <div class="featured-desc">
                                                                <p>Accurate financial statements and audits provide a clear picture of your financial health, enabling you to make data-driven decisions that foster growth and profitability.
                                                                </p>
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
                </div>
            </section>
            
              <div class="connect-section">
                <h3 class="title">Need Assistance? Book a Free Appointment</h3>
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
            
             <section class=" service02-about-section">
                <div class="container">
                    <div class="row">
                        <!--<div class="col-lg-6 align-self-center ">-->
                        <!--    <div class="bg-base-grey text-center text-lg-start res-991-pt-20">-->
                        <!--        <div class="prt_single_image-wrapper res-991-ml-20 res-991-mr-20">-->
                        <!--            <img class="img-fluid" src="<?php echo e(asset('assets/images/c-1.png')); ?>" alt="single-img-9">-->
                        <!--        </div>-->
                        <!--        <div class="spacing-18">-->
                        <!--            <h3 class="fs-20 mb-0">Welcome to <strong class="text-base-skin">Dubai</strong> Mainland!</h3>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Accounting & Finance Management</h3>
                                        <h2 class="title">Unlock Your Business  Potential <span> with Expert Financial Solution  </span> in Dubai?</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Don’t let accounting and financial management hold you back. With our professional accounting, bookkeeping, and auditing services, you can streamline your operations, ensure compliance, and make informed decisions that drive growth. Partner with us today to focus on what matters most—scaling your business with confidence!</p>
                                        <!-- <p>Company Setup in Dubai is a straightforward process. If you wish to operate a commercial business, Dubai Mainland is the perfect location designated by the Dubai Economic Department (DED) to provide opportunities to private businesses and their representatives. You can benefit from the UAE’s robust
                                            economy and establish a business with top-notch quality standards.</p> -->
                                            <p style="margin-top: 30px;"><strong><i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Personalized Support &nbsp;
                                                <i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Transparent Process &nbsp;
                                                <i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Timely Execution </strong></p>
                                    </div>
                                </div><!-- section title end -->                            
                                
                                
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
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/accounts-and-book-keeping.blade.php ENDPATH**/ ?>