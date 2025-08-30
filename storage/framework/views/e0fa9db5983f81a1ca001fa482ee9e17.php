

<?php $__env->startSection('pagetitle'); ?>
Canada Startup and Investors Golden Visa
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
        <h1 class="animated-heading">Startup & Investor Visa <span> for Canada</span> – Your Gateway to Business & Residency</h1>
<button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style="width:61%;">
    <h1 style="color: #000;">
        <span>Startup & Investor Visa for<span style="color: #b12e5f;"> Canada</span> <span style="color: #000;"> – Your Gateway to Business & Residency</span></span>
    </h1>
    <p style="color: #000;">
        Launch your business and secure a future in Canada with the Startup & Investor Visa Programme. 
        We guide entrepreneurs and investors through every step— from developing a qualifying business plan 
        to securing government-approved endorsements and completing immigration formalities. 
        With our expertise, you can navigate requirements smoothly and establish a strong presence in one of 
        the world’s most business-friendly and innovative economies.
    </p>
    
    <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
        Get Started
    </button>
</div>

           
           
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/canada-startup.png')); ?>" class="main-image" alt="Website Image" width="220px">
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
        <h2 class="title text-center">
            Canada Startup & Investor <span>Visa Programme</span>
        </h2>
    </div>
    <div class="title-desc text-center">
        <p>
            The Canada Startup & Investor Visa Programme offers a unique pathway for entrepreneurs and investors 
            to obtain permanent residency while building and growing innovative businesses in one of the world’s most 
            stable and thriving economies. Designed to attract talented business minds, the programme connects applicants 
            with designated Canadian venture capital funds, angel investor groups, or business incubators who provide 
            the necessary support and endorsement.  
        </p>
        <p>
            Our expert team assists you throughout the process—from refining your business concept and securing 
            government-approved endorsements, to preparing all immigration documents and meeting eligibility requirements.  
            Whether your goal is to launch a groundbreaking startup or make a strategic investment, we help you navigate 
            every step efficiently, ensuring your application meets Canada’s strict standards and maximises your 
            chances of success.
        </p>
    </div>
</div>

            
                        </div>
                    </div>
                </div>
            </section>
            <!-- section title end -->
            
            <div class="b-page-card">
    <div class="title-page col-10 border-bottom pb-3 mb-15">
        <h2>Compliance Services for Your Canada </br>Startup & Investor Visa Journey</h2>
        <p class="text-center" style="color: #abafb5;">
            Stay compliant with Canadian business laws and immigration requirements. We handle the paperwork so you can focus on building your venture.
        </p>
    </div>
    <div class="row col-10">

        <!-- Card 1 -->
        <div class="col-md-6 res-767-mb-30">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-8"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Business Registration</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Support with registering your Canadian corporation or startup.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 res-767-mb-30">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Tax & Accounting</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Ensure accurate CRA filings and corporate tax compliance.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 res-767-mb-30">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-7"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Immigration Compliance</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Stay aligned with IRCC requirements throughout your visa process.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-3"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Ongoing Regulatory Updates</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Get timely alerts on any changes in Canadian business and visa laws.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

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
                                <h2 class="title">Our Streamlined 3-Step Process <span>for Canada’s Start-up & Investor Visa</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>At <strong>IndCorp Advisory Services</strong>, we simplify Canada’s Start-up & Investor Visa process by guiding you from the first consultation to your successful landing.  
                                Whether you’re an entrepreneur with an innovative business idea or an investor looking for global opportunities, our experts handle every stage—planning, documentation, and submission—ensuring you meet all IRCC requirements with confidence and ease.</p>
                            </div>
                        </div><!--section-title-end -->
                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                href="<?php echo e(route('contact-us')); ?>">Start Your Canada Visa Journey</a>
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
                                    <h3>Initial Consultation & Eligibility Assessment</h3>
                                </div>
                                <div class="prt-box-description">
                                    We start by evaluating your business idea, investment goals, and eligibility for Canada’s Start-up & Investor Visa.  
                                    Our team identifies the best pathway—whether through an approved incubator, angel investor, or venture capital fund.
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
                                    <h3>Business Plan & Documentation</h3>
                                </div>
                                <div class="prt-box-description">
                                    We craft a strong business plan aligned with Canadian market requirements, secure a Letter of Support from a designated organization,  
                                    and compile all necessary application forms, financial proofs, and compliance documents for submission to IRCC.
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
                                    <h3>Submission, Approval & Landing</h3>
                                </div>
                                <div class="prt-box-description">
                                    We submit your application to IRCC, handle queries, and track progress until approval.  
                                    Once your visa is granted, we assist with settlement planning—covering housing, banking, and initial business operations in Canada.
                                </div>
                            </div>
                        </div>
                    </div>

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
                                            <h3>Begin Your Canada <span>Start-up & Investor Visa Application</span></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Secure your place in one of the world’s most business-friendly countries.  
                                            Fill in our quick enquiry form today, and our experts will contact you within 24 hours to start your application process.</p>
                                        </div> </br>
                                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                                href="<?php echo e(route('contact-us')); ?>">Get Started Now</a>
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
<!-- Our Process Ends -->

           <!-- Features and Highlight Starts -->
           
           <section class="prt-row home03-process-section clearfix right-side-form-card1">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                    
                    <!-- Features & Highlights -->
                    <div class="prt-processbox processbox-03" style="width: 57%; height: auto; overflow: scroll;">
                        <div class="">
                            <h2 class="title m-0" style="font-size: 26px;">Some of Our <span>Highlights & </span> Features</h2>
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
                                    <h3>Complete Regulatory Coverage</h3>
                                </div>
                                <div class="prt-box-description">
                                    From financial compliance to corporate secretarial and beyond—get every regulatory need managed under one trusted partner.
                                </div>
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
                                    <h3>Timely Reminders & Hassle-Free Filing</h3>
                                </div>
                                <div class="prt-box-description">
                                    Forget missed deadlines—our automated tracking and expert team ensure every return and report is filed right on time.
                                </div>
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
                                    <h3>Expert-Led Compliance Management</h3>
                                </div>
                                <div class="prt-box-description">
                                    Work with seasoned professionals who stay ahead of evolving regulations and apply them effectively to your business.
                                </div>
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
                                    <h3>Tailored Compliance Solutions</h3>
                                </div>
                                <div class="prt-box-description">
                                    Custom plans designed for your sector, entity type, and operational scale—so you get exactly what you need, nothing extra.
                                </div>
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
                                    <h3>Full Documentation & Record Management</h3>
                                </div>
                                <div class="prt-box-description">
                                    From resolutions to registers—every document is prepared, maintained, and filed with precision and legal accuracy.
                                </div>
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
                                    <h3>Seamless Government Liaisoning</h3>
                                </div>
                                <div class="prt-box-description">
                                    Direct coordination with GST, Income Tax, MCA, RBI, Labour departments, and other authorities—so you never have to chase paperwork.
                                </div>
                            </div>
                        </div>

                        <!-- Feature 7 -->
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Always Audit-Ready</h3>
                                </div>
                                <div class="prt-box-description">
                                    Stay prepared year-round for any inspection or audit with clean, compliant, and well-documented financial records.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Enquiry Form -->
                    <div class="prt-processbox processbox-01 right-side-form-card" style="width: 36%;">
                        <?php echo $__env->make('front.layouts.includes.package-enquiry-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

          <!-- Our Features Ends -->
          
          <!-- Required Documents Starts -->
          <section class="prt-row service02-about-section">
    <div class="container">
        <div class="row">

            <!-- Individual Applicant Documents -->
            <div class="col-lg-6">
                <h3>Required Documents for Individual Applicants</h3>
                <table class="document-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Document Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Valid Passport (Minimum 6 months validity)</td></tr>
                        <tr><td>2</td><td>Recent Passport Size Photographs (White Background)</td></tr>
                        <tr><td>3</td><td>Proof of Funds (Bank Statements for last 6 months)</td></tr>
                        <tr><td>4</td><td>Police Clearance Certificate</td></tr>
                        <tr><td>5</td><td>Medical Examination Report (IRCC approved)</td></tr>
                        <tr><td>6</td><td>Educational Credentials Assessment (ECA Report)</td></tr>
                        <tr><td>7</td><td>Language Test Results (IELTS / CELPIP)</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Business Entity Documents -->
            <div class="col-lg-6">
                <h3>Required Documents for Business Entity</h3>
                <table class="document-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Document Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Detailed Business Plan (Aligned with Canadian market)</td></tr>
                        <tr><td>2</td><td>Letter of Support from a Designated Organization (Angel Investor / VC / Incubator)</td></tr>
                        <tr><td>3</td><td>Shareholder / Partner Passport Copies</td></tr>
                        <tr><td>4</td><td>Incorporation Documents of the Business (if applicable)</td></tr>
                        <tr><td>5</td><td>Financial Projections & Funding Proof</td></tr>
                        <tr><td>6</td><td>Application Forms (Duly Completed & Signed)</td></tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

           <!-- Required Documents Starts -->

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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/canada-startup-investor-visa.blade.php ENDPATH**/ ?>