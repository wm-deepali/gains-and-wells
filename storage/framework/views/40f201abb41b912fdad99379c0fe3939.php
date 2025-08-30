

<?php $__env->startSection('pagetitle'); ?>
ERP & CRM's
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
    </style>
     <style>
        .creative-section {
            background-color: #f5f5f5;
            padding: 50px 0px;
        }
    
        .creative-header {
          text-align: center;
          margin-bottom: 50px;
        }
    
        .creative-header h2 {
          font-size: 32px;
          font-weight: bold;
          margin-bottom: 15px;
        }
    
        .creative-header p {
          font-size: 16px;
          max-width: 700px;
          margin: 0 auto;
          color: #555;
        }
    
        .creative-cards-container {
          background-color: #f5f5f5;
          padding: 40px 20px;
         
          display: flex;
          flex-wrap: wrap;
          gap: 20px;
          justify-content: center;
        }
    
        .creative-card {
          background-color: #fff;
          border-radius: 10px;
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.07);
          padding: 25px;
          width: 100%;
          max-width: 350px;
          transition: transform 0.3s ease;
        }
    
        .creative-card:hover {
          transform: translateY(-5px);
        }
    
        .creative-card h3 {
          font-size: 20px;
         
          margin-bottom: 4px;
          font-weight: 600;
          /* text-align: center; */
        }
    
        .creative-card h4 {
          font-size: 16px;
          font-weight: bold;
          color: #f36f27;
          /* text-align: center; */
          margin-bottom: 10px;
        }
    
        .creative-card p {
          font-size: 14px;
          color: #444;
          /* text-align: center; */
        }
    
        @media (max-width: 768px) {
          .creative-cards-container {
            padding: 30px 10px;
          }
    
          .creative-card {
            max-width: 100%;
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
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/seo-mobile.png')); ?>');">

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
        <h1 class="animated-heading">Get Found. Get Clicked. <span> Get Results </span> with SEO That Works</h1>

                       <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">100% Result Oriented</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">Market Analysis & Planning.</span>
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
                <h1 style="color: #003760;"><span>Get Found. Get Clicked.    <span
                            style="color: #f36f27;">Get Results with SEO That Works</span> </span> </h1>
                <p style="color: #003760;">Rank higher on Google, drive more organic traffic, and grow your business with our expert SEO services. We optimize your online presence so your audience finds you before your competitors.
                </p>
                <div class="position-relative mb-15">

                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">100% Result Oriented</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">Market Analysis & Planning.</span>
                        </li>
                       
                    </ul>

                </div>
                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Get Started</button>



            </div>
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/seo.png')); ?>" class="main-image" alt="Website Image" width="220px">
  <div class="small-dot"></div>
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
                                        <!-- <h3>Why Choose Us</h3> -->
                                        <h2 class="title">Drive Long-Term Growth with Powerful 

<span class="text-base-skin">
                                                SEO Strategies</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>SEO is more than just rankings — it’s about being discovered by the right people at the right time. We help your website rise through the search engine results by using ethical, data-driven strategies. From keyword research to technical fixes, we cover every aspect of SEO to help you achieve lasting visibility and steady growth.

                                        </p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="">
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="99.9%">
                                        <div class="progressbar-title">99.9% Result Oriented</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="99.9">99.9%</div>
                                            </div>
                                        </div>
                                    </div><!-- prt-progress-bar end -->
                                    <!-- prt-progress-bar -->
                                    <div class="prt-progress-bar" data-percent="98%">
                                        <div class="progressbar-title">High End Traffic</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent" data-percentage="98">98</div>
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
                                    <h3>Comprehensive SEO Services Backed by Expertise & Results
</h3>
                                </div>
                                <div class="service-desc">
                                    <p>We provide end-to-end SEO solutions tailored to your business goals — from keyword research to technical optimization. With our expert-driven strategies, we help you rank higher, gain more visibility, and grow organically.
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
                                <h4>On Page & Off Page</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Technical SEO
</h4>

                            </div>
                            <div class="website-solution-card" style="background:#ff7300">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4 style="color:#fff;background:#ff7300;">Backlinks</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Content Creation</h4>

                            </div>
                            <div class="website-solution-card">
                                <div class="website-circle-card">
                                    <img src="<?php echo e(asset('assets/images/www.png')); ?>" width="40px">

                                </div>
                                <h4>Monthly Reports & Analysis


</h4>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <section class="creative-section">
                <div class="section-title">
                    <div class="title-header">
                        <!-- <h3 class="text-center">Take the step to</h3> -->
                        <h2 class="title text-center">What We Do — <span>Smart SEO Solutions </span> Crafted<br> for Real Results </h2>
                    </div>
                    <div class="title-desc text-center">
                        <p>Our SEO services are designed to cover every aspect of your online growth — from technical optimization to content and backlinks. Here’s how we help your business rise through the ranks and stay ahead
.</p>
                    </div>
                </div>
                
            
                <div class="creative-cards-container">
            
                  <div class="creative-card">
                    <h3>On-Page SEO</h3>
                    <h4>Optimize Every Page for Maximum Visibility</h4>
                    <p>We enhance your website’s structure, content, and internal linking to make it search engine-friendly and user-focused, improving both ranking and user experience.</p>
                  </div>
            
                  <div class="creative-card">
                    <h3>Off-Page SEO & Backlink Building</h3>
                    <h4>Build Authority & Trust with Quality Backlinks</h4>
                    <p>Our link-building strategies focus on high-quality backlinks from trusted websites, boosting your domain authority and credibility in Google’s eyes</p>
                  </div>
            
                  <div class="creative-card">
                    <h3>Keyword Research & Strategy</h3>
                    <h4>Target the Right Keywords That Convert</h4>
                    <p>We analyze your audience, competition, and industry trends to identify high-value keywords that drive traffic and lead to real business results.
</p>
                  </div>
            
                  <div class="creative-card">
                    <h3>Technical SEO</h3>
                    <h4>Fix the Foundation of Your Website</h4>
                    <p>From site speed to mobile responsiveness and crawl errors, we ensure your website is technically sound so search engines can index and rank it properly.
</p>
                  </div>
            
                  <div class="creative-card">
                    <h3>SEO Content Writing</h3>
                    <h4>Content That Ranks and Engages</h4>
                    <p>Our team creates SEO-optimized content that not only ranks well on search engines but also connects with your audience and encourages action.
</p>
                  </div>
            
                  <div class="creative-card">
                    <h3>Local SEO</h3>
                    <h4>Be Seen by Customers Near You</h4>
                    <p>We optimize your business for local search, helping you appear in maps, directories, and local queries — driving more foot traffic and local leads.
.</p>
                  </div>
            
                </div>
              </section>
            
            
         <!--   <section class="prt-row about01-about-section clearfix">
                <div class="container">
                    <div class="row g-0">

                        <div class="col-lg-7 align-self-center">
                            <div class="pl-50 res-1199-pr-15 res-1199-pl-30 res-991-pl-15 res-991-mt-30">
                                <!-- section title -->
                             <!--   <div class="section-title mb-15">
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
                             <!--   <div class="row">
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
                                            <button class="cost-calculate-banner1 mt-25"> Get Started</button>
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
            </section> -->
            
             <div class="prt-service-single-content-area" style="padding:40px 40px 80px 40px;">

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
                                                    <h3>Don’t Get Lost in Search — Rise to the Top</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Your competitors are investing in SEO — are you? A strong search presence means more traffic, more leads, and more sales. Let us help you stay ahead in the digital race with strategies that work long-term.</p>
                                                </div>
                                                <button class="cost-calculate-banner1 mt-25" data-bs-toggle="offcanvas" href="#offcanvasExample"> Get A Free Quote</button>
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
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Experienced SEO Professionals</h3>
        <p class="wptb-item--description mb-0">Our SEO experts bring years of hands-on experience and proven strategies to boost your rankings.</p>
      </div>
    </div>
  </div>

  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">White-Hat Techniques Only</h3>
        <p class="wptb-item--description mb-0">We follow ethical, Google-approved methods that deliver long-term, risk-free results..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Customized Strategies</h3>
        <p class="wptb-item--description mb-0">Every business is different—we tailor SEO plans to your specific goals and industry..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">End-to-End Optimization</h3>
        <p class="wptb-item--description mb-0">From technical SEO to content and backlinks, we cover all aspects to maximize visibility..</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Transparent Reporting</h3>
        <p class="wptb-item--description mb-0">Get clear, actionable reports so you always know what’s working and where we’re headed.

.</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 icon-box-col">
    <div class="wptb-item--inner">
      <div class="wptb-item--holder">
        <h3 class="wptb-item--title" style="font-family: 'fontello';">Proven Track Record</h3>
        <p class="wptb-item--description mb-0">We’ve helped businesses climb the search rankings—and stay there—with real, measurable success.</p>
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
        </div>
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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/search-engine-optimization.blade.php ENDPATH**/ ?>