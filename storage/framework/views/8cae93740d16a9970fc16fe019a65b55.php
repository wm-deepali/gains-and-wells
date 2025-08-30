

<?php $__env->startSection('pagetitle'); ?>
Accounts & Finance
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
.number1{
        font-weight: 900;
        font-size: 24px;
        color: #b12e5f;
}
.number1:hover{
    color:#fff;
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
        <h1 class="animated-heading">Streamlined  <span>Accounts & Finance</span> Solutions for Business Growth</h1>
<button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style=" width:61%;">
                <h1 style="color: #003760;"><span>Streamlined  <span style="color: #f36f27;"> </br> Accounts & Finance Solutions</span>  for Business Growth <span
                            style="color: #f36f27;">   </span> </span> </h1>
                <p style="color: #003760;">Simplify your financial operations with expert accounting, bookkeeping, tax planning, and compliance services. We help you stay audit-ready and financially healthy—so you can focus on scaling your business.
                </p>
                
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
            <section class="prt-row service02-about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center ">
                            <div class="bg-base-grey text-center text-lg-start res-991-pt-20">
                                <div class="prt_single_image-wrapper res-991-ml-20 res-991-mr-20">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/setupcompany.png')); ?>" alt="single-img-9">
                                </div>
                                <div class="spacing-18">
                                    <h3 class="fs-20 mb-0">One Stop Solution for <strong class="text-base-skin"> Account & Finance </strong> Solution</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>Account & Finance</h3>
                                        <h2 class="title">We understand the need of our client <span> Businesses</span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>At <b>IndCorp Advisory Services</b>, we deliver expert-driven accounts and finance services to help businesses stay compliant, optimize cash flow, and make informed financial decisions. Our goal is not just managing your books—but empowering your business with data-backed insights, automated processes, and total tax compliance, both locally and internationally.</p>
                                        
                                        <p>Whether you're a startup or an expanding enterprise, we act as your extended financial arm—handling everything from bookkeeping to tax strategy with precision and transparency.</p>
                                    </div>
                                </div><!-- section title end -->                            
                                <div class="row">
                                    <div class="col-md-6 res-767-mb-30">
                                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-8"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Customised Support</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Get support as per your business model and needs</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                                            <div class="featured-icon">
                                                <div class="prt-icon prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-4"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h3>Complete Solutions</h3>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Complete solutions for finance & accounts under one roof.</p>
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
            
            <div class="b-page-card">
    <div class="title-page col-10 border-bottom pb-3 mb-15">
        <h2>Why Choose <br> Our Accounts & Finance Services?</h2>
        <p class="text-center" style="color: #abafb5;">Managing business finances requires more than just compliance—it demands accuracy, insight, and strategic planning. Our expert team ensures your books are always audit-ready, taxes are filed on time, and your financial data supports growth decisions. With tailored accounting solutions, we help businesses stay financially fit and future-ready.</p>
    </div>
    <div class="row col-10">
        <div class="col-md-6 res-767-mb-30">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-8"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Complete Financial Oversight
                        </h3>
                    </div>
                    <div class="featured-desc">
                        <p> From bookkeeping to tax filing and MIS reporting, we give you a transparent, organized view of your company’s financial health at all times.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Smarter Business Decisions</h3>
                    </div>
                    <div class="featured-desc">
                        <p >With structured reporting and advisory, our services enable you to make informed decisions, manage cash flows better, and plan for expansion with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
            
            <!-- Feature-section -->
           
           <section class="prt-row home03-process-section clearfix right-side-form-card1">
                <div class="container">
                    <div class="row p-0">
                        <div class="col-lg-12 p-0">
                            <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                                <div class="prt-processbox processbox-03" style="width: 57%; height: auto; overflow: scroll;">
                                    <div class="">
                                        <h2 class="title m-0" style="font-size: 26px;">Some of our Business <span>Highlights & </span>  Features
                                        </h2>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>GST & VAT Compliance Made Easy</h3>
                                            </div>
                                            <div class="prt-box-description"> We handle your end-to-end tax responsibilities—be it GST in India or VAT in the UAE, UK, or other global regions—ensuring timely registration, filing, return submissions, and audit support.</div>
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Real-Time Bookkeeping & Ledger Maintenance
                                                </h3>
                                            </div>
                                            <div class="prt-box-description"> All your income, expenses, and transaction records are updated regularly with software-backed accuracy to avoid surprises during audits or financial reviews.</div>
                                            
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Payroll & Employee Tax Management
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">We streamline your payroll processing, calculate statutory deductions, and ensure timely filing of EPF, ESI, and TDS returns—ensuring hassle-free employee compliance.</div>
                                           
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Dynamic MIS & Financial Reporting</h3>
                                            </div>
                                            <div class="prt-box-description">Our detailed monthly or quarterly MIS reports help you track business health, cash flow, revenue, and profitability in a simplified, decision-ready format.</div>
                                           
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>International Taxation Support</h3>
                                            </div>
                                            <div class="prt-box-description"> Planning to operate abroad? We assist with cross-border tax planning, international VAT/GST setup, and accounting standards to ensure full regulatory alignment in every country you operate.</div>
                                           
                                        </div>
                                    </div>
                                    <div class="processbox-content">
                                        <div class="prt-number-box">
                                            <div class="process-num">
                                                <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="processbox-info">
                                            <div class="featured-title">
                                                <h3>Strategic Financial Advisory & Budgeting
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">Whether you need to raise capital, cut costs, or restructure your financials, our advisory experts guide you with budgeting, forecasting, and future-focused planning.</div>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="prt-processbox processbox-01 right-side-form-card " style="width: 36%;">
                                    <?php echo $__env->make('front.layouts.includes.package-enquiry-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                                    
                                </div>
                                
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
          
          <!--Feature Section Ends -->
           

            <div class="connect-section">
    <h3 class="title">Book a Free Appointment</h3>
    <p class="text-center">We are just a call or text away. Reach out to us and our expert Financial Consultants will<br> get back to you to
        counsel you at every step of your Business needs from Business formation to Accounts & Financial Solution. </p>
  <div class="d-flex justify-content-between connect-section-btn">
    <a href="https://wa.me/62910 33761" target="_blank" style="text-decoration: none;">
        <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
    </a>
    <a href="tel:+9162910 33761" style="text-decoration: none;">
        <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
    </a>
</div>

</div>
            
            
            <?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           
        
        
         <!--fid-section-->
    <section class="prt-row about01-fid-section bg-base-skin clearfix">
        <div class="container-fliud">
            <div class="row spacing-13 prt-vertical_sep">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- prt-fid -->
                    <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                        <div class="prt-fid-icon-wrapper">
                            <i class="flaticon-office-building"></i>
                        </div>
                        <div class="prt-fid-contents">
                            <h4 class="prt-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="30" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">30
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Services Delivered</h3>
                        <div class="prt-fid-desc">
                            <p>Offering a wide range of services, from business formaiton to Accounts & Financial Management,
                            ensuring all your needs are covered.</p>
                        </div>
                    </div><!-- prt-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- prt-fid -->
                    <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                        <div class="prt-fid-icon-wrapper">
                            <i class="flaticon-teamwork"></i>
                        </div>
                        <div class="prt-fid-contents">
                            <h4 class="prt-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="15" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">15
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Years of Excellence</h3>
                        <div class="prt-fid-desc">
                            <p>A decade of delivering trusted and efficient business solutions across the globe in Accounting & Finance along with Business Formation.</p>
                        </div>
                    </div><!-- prt-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- prt-fid -->
                    <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                        <div class="prt-fid-icon-wrapper">
                            <i class="flaticon-process"></i>
                        </div>
                        <div class="prt-fid-contents">
                            <h4 class="prt-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="100" 
                                        data-interval="1" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">100
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Business Setups</h3>
                        <div class="prt-fid-desc">
                            <p>Helping entrepreneurs bring their vision to life with successful business setups in Different Countries including USA, UK, UAE, Canada Etc..</p>
                        </div>
                    </div><!-- prt-fid end -->
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- prt-fid -->
                    <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                        <div class="prt-fid-icon-wrapper">
                            <i class="flaticon-office-building"></i>
                        </div>
                        <div class="prt-fid-contents">
                            <h4 class="prt-fid-inner">
                                <span   data-appear-animation="animateDigits" 
                                        data-from="0" 
                                        data-to="20" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">20
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Satisfied Clients</h3>
                        <div class="prt-fid-desc">
                            <p>A dedicated team of experts working together to provide you with personalized and
                            efficient solutions.</p>
                        </div>
                    </div><!-- prt-fid end -->
                </div>
            </div>
        </div>
    </section>
    <!--fid-section-end-->

    <!-- testimonial-section -->
    <section class="prt-row about01-testimonial-section bg-base-white clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--section-title-->
                    <div class="section-title title-style-center_text">
                        <div class="title-header">
                            <h3>Testimonials</h3>
                            <h2 class="title">What our clients say <span>About us</span></h2>
                        </div>
                    </div><!--section-title end-->
                </div>
            </div>
            <div class="row slick_slider" data-slick='{"slidesToShow": 2, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 2}} , {"breakpoint":992,"settings":{"slidesToShow": 1}}, {"breakpoint":768,"settings":{"slidesToShow": 1}}]}'>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/testimonial/testimonial-4-150x150.jpg')); ?>" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Peter Daniels</h3>
                                    <label>Engineer</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Keep up the good work Truvik and keep helping others to make their dreams be fulfilled! Very thankful to the team.....</blockquote>
                            </div>  
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/testimonial/testimonial-5-150x150.jpg')); ?>" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Alex Sam Martin</h3>
                                    <label>Manager</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Travellers from countries categorized under the high-risk list who are eligible to enter Germany, aged 12 and older, are obliged to present certificates.</blockquote>
                            </div>  
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/testimonial/testimonial-6-150x150.jpg')); ?>" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Aemy Doe</h3>
                                    <label>Director</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">We have helps students business persons tourists clients with medical needs to acquire U.s visas. Besides we also help with other family and provide.</blockquote>
                            </div>  
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonials style2 bg-grey">
                        <div class="testimonial-wrapper">
                            <div class="testimonial-info">
                                <div class="testimonial-avatar">
                                    <div class="testimonial-img">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/testimonial/testimonial-7-150x150.jpg')); ?>" alt="testimonial-img" width="72" height="72">
                                    </div>
                                </div>
                                <div class="testimonial-caption">
                                    <h3>Sofia Dylan</h3>
                                    <label>Officer</label>
                                    <div class="star-ratings prt-section-wrapper-cell">
                                        <div class="star-ratings">
                                            <ul class="rating">
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <blockquote class="testimonial-text">Truly knowledgeable, skilled and has empathy throughout the process. No doubt, the company’s success & the recommendations.</blockquote>
                            </div>  
                        </div>                          
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-section-end -->


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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/accounting-solution.blade.php ENDPATH**/ ?>