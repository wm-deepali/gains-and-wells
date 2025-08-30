

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
    
    
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/corporate-fund.png')); ?>');">

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
        <h1 class="animated-heading">Empower Your <span> Business with </span> Smart Capital.</h1>

                           <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: #fff;">
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;">Flexible Funding Models</span>
                        </li>
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Investor & Equity Partnerships</span>
                        </li>
                        <li style="color:#fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> End-to-End Funding Support</span>
                        </li>
                        
                    </ul>
                   
                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Start Investing
        </button>
    </div>

</div>
     <!-- page-title end -->
         <div class="top-banner-corporate">
            <div class="top-banner-title">
                <h1 style="font-size: 44px; font-weight: 600;"><span style="color: #fff;">Empower Your  </span> <span style="color: rgb(255, 123, 0);"> Business with  <br/></span><span style="color:#fff;"> Smart Capital.</span></h1>
                <h4 style="color: rgb(255, 123, 0);">Driving Business Expansion Through Funding</h4>
                <p style="color: #fff; margin-top: 0px;">Unlock your business’s potential with our strategic corporate funding options. </br>We connect ambitious enterprises with smart capital to fuel expansion, innovation, and success.</p>
                <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: #fff;">
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;">Flexible Funding Models</span>
                        </li>
                        <li style="color: #fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> Investor & Equity Partnerships</span>
                        </li>
                        <li style="color:#fff;">
                            <i class="fa fa-check" aria-hidden="true" style="color: #fff;"></i>
                            <span class="" style="color: #fff;padding-left:20px;"> End-to-End Funding Support</span>
                        </li>
                        
                    </ul>
                   
                </div>
                

                <button class="cost-calculate-banner1" data-bs-toggle="offcanvas" href="#offcanvasExample"> Start Investing </button>
                <!-- <h1 class="mt-4" style="font-size: 18px; color: rgb(0, 60, 255);">Starting From AED <span style="font-size: 44px; font-weight: 600;">6,875</span> </h1> -->



            </div>

        </div>
        <!--site-main start-->
        <div class="site-main">
            
            <section class=" service02-about-section" style="padding:40px 0px;">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        
                                        <h2 class="title">Learn more about Corporate Funding?</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Corporate funding refers to the financial support businesses receive to operate, expand, or launch new projects. This can come in the form of equity investment, debt financing, or strategic partnerships. It’s a crucial tool for companies looking to scale operations, enter new markets, or develop innovative solutions - <br><br>
                                            without straining existing resources. Corporate funding empowers businesses to grow smarter and faster with the right financial backing..
                                            </p>
                                    </div>
                                </div><!-- section title end -->                            
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="prt-row service02-service-section bg-layer-equal-height bg-base-grey clearfix">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/realestate.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Real Estate </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Future Investment</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                           
                            <p>Dubai and the UAE offer lucrative opportunities for real estate investment, with a thriving property market and high potential returns. From luxury residences to commercial properties, the region’s strategic location and strong economy make it an ideal destination for global investors.</p>
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/g1.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center" style="line-height:40px;" >Business and Franchise Investments </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Long Business Opportunity</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>With a business-friendly environment, Dubai and the UAE present a wealth of opportunities for entrepreneurs and franchise investors. Whether you're looking to start a business or invest in established global brands, the region offers diverse sectors with high demand, from hospitality to retail.</p>
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/g4.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center" style="line-height:40px;">Venture Capital and Private Equity </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Capital Gain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Dubai and the UAE serve as a hub for capital ventures, with a supportive ecosystem for startups and established businesses alike. Access to diverse funding options, including venture capital and private equity, coupled with favorable tax policies, creates an attractive environment for investors seeking high-growth opportunities.</p>
<a href="<?php echo e(route('it-services')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

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
                    <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
                    <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
                </div>
            </div>
            
             <section class=" service02-about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center ">
                            <div class="bg-base-grey text-center text-lg-start res-991-pt-20">
                                <div class="prt_single_image-wrapper res-991-ml-20 res-991-mr-20">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/c-1.png')); ?>" alt="single-img-9">
                                </div>
                                <div class="spacing-18">
                                    <h3 class="fs-20 mb-0">Corporate Funding  <strong class="text-base-skin">Solutions </strong> Tailored for Growth!</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Investment in Dubai & UAE</h3>
                                        <h2 class="title">Corporate Funding

 <span> Helping Investors to Grow</span> in Dubai</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Corporate funding is ideal for startups, SMEs, and established businesses looking to scale operations, launch new products, or expand into new markets. Whether you're seeking capital to meet growing demand or need investment for innovation and infrastructure, corporate funding can be the catalyst. </br>

It helps by providing the necessary financial resources, access to strategic partnerships, and improved cash flow—enabling faster growth, increased competitiveness, and long-term sustainability.</p>
                                        <!-- <p>Company Setup in Dubai is a straightforward process. If you wish to operate a commercial business, Dubai Mainland is the perfect location designated by the Dubai Economic Department (DED) to provide opportunities to private businesses and their representatives. You can benefit from the UAE’s robust
                                            economy and establish a business with top-notch quality standards.</p> -->
                                            <p style="margin-top: 30px;"><strong><i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Personalized Support &nbsp;
                                                <i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Transparent Process &nbsp;
                                                <i class="fa-solid fa-check-to-slot" style="color: #f36f27;"></i> Better Growth </strong></p>
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
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/corporate-funding.blade.php ENDPATH**/ ?>