

<?php $__env->startSection('pagetitle'); ?>
UAE & Dubai Startup and Investors Golden Visa
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
.document-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
    border: 1px solid #ddd;
}

.document-table th {
    background-color: #b12e5f; /* brand color */
    color: #fff;
    padding: 10px;
    text-align: left;
}

.document-table td {
    border: 1px solid #ddd;
    padding: 10px;
}

.document-table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.document-table tbody tr:hover {
    background-color: #ffe9e4;
    transition: background 0.3s ease;
}
    </style>

    <div class="top-banner-title">
        <h1 class="animated-heading">Golden Visa <span> Opportunity</span> for Startups & Investors in UAE & Dubai</h1>
<button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style="width:61%;">
    <h1 style="color: #000;">
        <span>Golden Visa for <span style="color: #b12e5f;;">Investors & Startups</span> in <span style="color: #b12e5f;;">UAE & Dubai</span></span>
    </h1>
    <p style="color: #000;">
        Fast-track long-term residency and scale your venture in one of the world's top business hubs. Secure 5–10 year Golden Visa benefits — family sponsorship, wider market access, and business-friendly regulations. 
        We offer end-to-end support for Indian investors and founders: eligibility assessment, company setup, documentation, visa application, and post-approval assistance.
    </p>

    <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
        Get Started
    </button>
</div>

           
           
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/uae-golden.png')); ?>" class="main-image" alt="Website Image" width="220px">
  <div class="small-dot"></div>
</div>
       </div>
 
        <!-- about-section -->
           <section class=" service02-about-section mb-30" style="margin-top:30px;">
                <div class="" style="padding: 0px 30px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                               <div class="section-title" style="margin-top:30px;">
    <div class="title-header">
        <h2 class="title text-center">Golden Visa <span>for Investors & Startups </span> </br> in UAE & Dubai with Hassle Free Process</h2>
    </div>
    <div class="title-desc text-center">
        <p>The UAE Golden Visa is a long-term residency program designed to attract visionary entrepreneurs, high-net-worth investors, and innovative startup founders to the region. This exclusive visa offers a secure and stable environment to grow your wealth, expand your business, and enjoy unparalleled access to one of the world’s fastest-growing economies. Whether you’re investing in established ventures or launching your own startup, the Golden Visa provides a gateway to live, work, and thrive in the UAE without the need for a local sponsor.</p>
    </div>
</div>

            
                        </div>
                    </div>
                </div>
            </section>
            <!-- section title end -->
            
   <div class="b-page-card">
    <div class="title-page col-10 border-bottom pb-3 mb-15">
        <h2>Golden Visa Solutions<br>for Investors & Startup Founders in UAE & Dubai</h2>
        <p class="text-center" style="color: #abafb5;">
            Secure your long-term residency in the UAE with our end-to-end Golden Visa support. 
            From investment planning and business setup to documentation and approvals, we guide you through 
            every step to ensure a smooth, hassle-free process.
        </p>
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
                        <h3 style="color: #fff;">Investor Golden Visa Assistance</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            End-to-end guidance for high-net-worth individuals and business investors—covering investment eligibility checks, 
                            government approvals, and streamlined application processing for your UAE Golden Visa.
                        </p>
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
                        <h3 style="color: #fff;">Startup Founder Visa Support</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            We help innovative entrepreneurs and startup owners meet the UAE Golden Visa criteria, 
                            prepare business plans, secure incubator endorsements, and submit applications with zero delays.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
            
            <!-- about-section -->
            
                <!-- Our Process Section Starts -->          
            <section class="prt-row home03-process-section clearfix">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper">
                    <div class="prt-processbox processbox-01">
                        <!--section-title -->
                        <div class="section-title style4">
                            <div class="title-header">
                                <h2 class="title">Our 3-Step Process <span>to Secure Your UAE Golden Visa</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    At <strong>IndCorp Advisory Services</strong>, we make obtaining your UAE Investor or Startup Golden Visa simple, fast, 
                                    and stress-free. Whether you’re an entrepreneur looking to establish a groundbreaking startup in Dubai 
                                    or an investor aiming to secure long-term residency, our team provides complete guidance—covering eligibility checks, 
                                    business setup, documentation, and application submission. We ensure every step is handled with accuracy, 
                                    transparency, and speed so you can focus on your business and future in the UAE.
                                </p>
                            </div>
                        </div><!--section-title-end -->
                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                href="<?php echo e(route('contact-us')); ?>">Start Your Application</a>
                        </div>
                    </div>

                    <!-- Step 1 -->
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
                                    <p>Step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Eligibility & Initial Consultation</h3>
                                </div>
                                <div class="prt-box-description">
                                    We begin with a personalized consultation to assess your eligibility for the UAE Golden Visa under the 
                                    investor or startup founder category. Our advisors explain the requirements, investment thresholds, and 
                                    necessary endorsements so you have a clear roadmap from day one.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="prt-processbox processbox-03">
                        <div class="prt-box-image">
                            <div class="prt-process-image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/Gemini_Generated_Image_assjnzassjnzassj.png')); ?>" alt="step-two">
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number"></span>
                                    <p>Step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Application Planning & Documentation</h3>
                                </div>
                                <div class="prt-box-description">
                                    We create a step-by-step application plan, help you structure your investment or prepare your 
                                    startup business plan, and compile all required documents—such as trade licenses, proof of investment, 
                                    or innovation certificates. Every detail is checked for compliance to avoid delays or rejections.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="prt-processbox processbox-04">
                        <div class="prt-box-image">
                            <div class="prt-process-image">
                                <img class="img-fluid" src="<?php echo e(asset('assets/images/Gemini_Generated_Image_226y0c226y0c226y.png')); ?>" alt="step-three">
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number"></span>
                                    <p>Step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Submission & Residency Approval</h3>
                                </div>
                                <div class="prt-box-description">
                                    We submit your Golden Visa application to the UAE authorities, monitor its progress, and keep you updated at 
                                    every stage. Once approved, we assist with Emirates ID registration and other post-visa formalities so you 
                                    can enjoy the full benefits of living and operating your business in Dubai or anywhere in the UAE.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


                    <!-- Call to Action Card -->
                    <div class="prt-processbox processbox-05">
                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-eight bg-base-grey">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                <div class="prt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="featured-icon-box style4">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <i class="flaticon-passport-8"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
    <div class="featured-title">
        <h3>Ready to Begin? <span>Start Your Global Journey with IndCorp</span></h3>
    </div>
    <div class="featured-desc">
        <p>Turn your business vision into reality—fast, easy, and hassle-free.  
        Complete our quick enquiry form and our experts will connect with you within 24 hours  
        to guide you through every step of your expansion.</p>
    </div> 
    <br/>
    <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
        <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
            href="<?php echo e(route('contact-us')); ?>">Get Started Now</a>
    </div>
</div>

                                </div>
                            </div>
                        </div>
                    </div>

           <!-- Our Process Starts -->
           
           <section class="prt-row home03-process-section clearfix right-side-form-card1">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                    <div class="prt-processbox processbox-03" style="width: 57%; height: auto; overflow: scroll;">
                        <div class="">
                            <h2 class="title m-0" style="font-size: 26px;">Key <span>Features & Benefits</span> of the UAE Golden Visa</h2>
                        </div>

                        <!-- Feature 1 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Long-Term Residency</h3>
                                </div>
                                <div class="prt-box-description">Enjoy 5 or 10 years of renewable residency in the UAE, providing stability for you and your family.</div>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>100% Business Ownership</h3>
                                </div>
                                <div class="prt-box-description">Set up and operate your business in Dubai or the UAE mainland without the need for a local sponsor.</div>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Family Sponsorship</h3>
                                </div>
                                <div class="prt-box-description">Sponsor your spouse, children, and even domestic staff under your Golden Visa benefits.</div>
                            </div>
                        </div>

                        <!-- Feature 4 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Global Mobility & Opportunities</h3>
                                </div>
                                <div class="prt-box-description">Benefit from UAE’s strategic location, strong business ecosystem, and visa-free travel to numerous countries.</div>
                            </div>
                        </div>

                        <!-- Feature 5 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>No Local Employer Requirement</h3>
                                </div>
                                <div class="prt-box-description">Work, invest, and live in the UAE without being tied to a specific company or employment contract.</div>
                            </div>
                        </div>

                        <!-- Feature 6 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Access to World-Class Infrastructure</h3>
                                </div>
                                <div class="prt-box-description">Leverage the UAE’s state-of-the-art healthcare, education, and lifestyle facilities for a premium standard of living.</div>
                            </div>
                        </div>

                    </div>
                    <div class="prt-processbox processbox-01 right-side-form-card" style="width: 36%;">
                        <?php echo $__env->make('front.layouts.includes.package-enquiry-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

          <!-- Our Process Ends -->
          
          <!-- Required Documents Starts -->
          <style>
    .document-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
        font-size: 14px;
    }

    .document-table thead th {
        background-color: #e74c3c; /* Red Header */
        color: white;
        padding: 10px;
        text-align: left;
    }

    .document-table tbody td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .document-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .document-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .document-table tbody td:first-child {
        width: 40px;
        text-align: center;
        font-weight: bold;
    }

    h3 {
        font-size: 20px;
        margin-bottom: 15px;
        color: #2c3e50;
    }
</style>

<section class="prt-row service02-about-section">
    <div class="container">
        <div class="row">

            <style>
    .document-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-family: Arial, sans-serif;
        font-size: 14px;
        table-layout: fixed;
    }

    .document-table thead th {
        background-color: #e74c3c;
        color: white;
        padding: 10px;
        text-align: left;
    }

    .document-table thead th:first-child {
        width: 50px;
        text-align: center;
    }

    .document-table tbody td {
        border: 1px solid #ddd;
        padding: 8px;
        vertical-align: middle;
        word-wrap: break-word;
    }

    .document-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .document-table tbody tr:hover {
        background-color: #f1f1f1;
    }

    .document-table tbody td:first-child {
        text-align: center;
        font-weight: bold;
    }
</style>

<!-- Individual Applicant Documents -->
<div class="col-lg-6">
    <h3>Required Documents for Individuals</h3>
    <table class="document-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Document Name</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Passport Copy (Valid for at least 6 months)</td></tr>
            <tr><td>2</td><td>UAE Residence Visa Copy (if applicable)</td></tr>
            <tr><td>3</td><td>Recent Passport Size Photograph (White Background)</td></tr>
            <tr><td>4</td><td>Proof of Current Address (Utility Bill / Tenancy Contract)</td></tr>
            <tr><td>5</td><td>Bank Reference Letter</td></tr>
            <tr><td>6</td><td>Trade Name Reservation / Approval Certificate</td></tr>
        </tbody>
    </table>
</div>

<!-- Business Entity Documents -->
<div class="col-lg-6">
    <h3>Required Documents for Businesses</h3>
    <table class="document-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Document Name</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Business Plan</td></tr>
            <tr><td>2</td><td>Memorandum of Association (MOA)</td></tr>
            <tr><td>3</td><td>Articles of Association (AOA)</td></tr>
            <tr><td>4</td><td>Shareholder / Partner Passport Copies</td></tr>
            <tr><td>5</td><td>Partnership Agreement (If applicable)</td></tr>
            <tr><td>6</td><td>Application Form (Duly Filled)</td></tr>
        </tbody>
    </table>
</div>


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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/uae-startup-investor-golden-visa.blade.php ENDPATH**/ ?>