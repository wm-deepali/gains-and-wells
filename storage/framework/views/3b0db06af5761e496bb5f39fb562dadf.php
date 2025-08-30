

<?php $__env->startSection('pagetitle'); ?>
USA Startup and Investors Visa
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
        <h1 class="animated-heading">Startup & Investor Visas for <span> Entrepreneurs & Investors</span> in the United States</h1>
<button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
            Contact Now
        </button>
    </div>

</div>
    
    <div class="top-banner-bank-it p-15">
            <div class="top-banner-title" style="width:61%;">
    <h1 style="color: #000;">
        <span>Startup & Investor Visas for <span style="color: #b12e5f;">Entrepreneurs & Investors</span> in the United States</span></span>
    </h1>
    <p style="color: #000;">
        Launch, expand, or invest in the U.S. market with pathways such as the <strong>EB-5 Immigrant Investor Visa</strong> and the <strong>International Entrepreneur Parole (IEP)</strong>.  
        Enjoy opportunities for permanent residency, family inclusion, and business growth in the world’s largest economy.  
        Our expert team guides you through eligibility assessment, investment structuring, document preparation, application submission, and ongoing compliance — so you can focus on building your American success story.
    </p>

    <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
        Get Started
    </button>
</div>


           
           
            <div class="design-wrapper">
  <div class="circle-border"></div>
  <img src="<?php echo e(asset('assets/images/startup-visa.png')); ?>" class="main-image" alt="Website Image" width="220px">
  <div class="small-dot"></div>
</div>
       </div>
 
        <!-- about-section -->
           <section class="service02-about-section mb-30" style="margin-top:30px;">
    <div class="" style="padding: 0px 30px;">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                    <!-- section title -->
                    <div class="section-title" style="margin-top:30px;">
                        <div class="title-header">
                            <h2 class="title text-center">Startup & Investor Visas <span>for Entrepreneurs & Investors</span> </br> in the United States with a Smooth Application Process</h2>
                        </div>
                        <div class="title-desc text-center">
                            <p>
                                The U.S. offers powerful immigration pathways like the <strong>EB-5 Immigrant Investor Visa</strong> and the <strong>International Entrepreneur Parole (IEP)</strong>, designed to attract global entrepreneurs and high-net-worth investors. These programs open doors to permanent residency, access to the U.S. market, and the ability to include your family in the journey. Whether you are investing in qualifying projects or building a high-potential startup, these visas provide a secure route to live, work, and grow in the world’s largest economy — all without the need for a traditional employer sponsor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

            <!-- section title end -->
            
   <div class="b-page-card">
    <div class="title-page col-10 border-bottom pb-3 mb-15">
        <h2>Startup & Investor Visa Solutions<br>for Entrepreneurs & Investors in the United States</h2>
        <p class="text-center" style="color: #abafb5;">
            Unlock your pathway to live, work, and grow in the United States with our expert visa services. 
            From EB-5 investment planning to startup founder support, we provide complete guidance on eligibility, 
            documentation, compliance, and successful application submission for a hassle-free immigration process.
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
                        <h3 style="color: #fff;">EB-5 Investor Visa Assistance</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            Full support for high-net-worth individuals investing $800,000+ in qualifying U.S. projects. 
                            We handle investment verification, USCIS filings, and documentation for your EB-5 Green Card.
                        </p>
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
                        <h3 style="color: #fff;">E-2 Treaty Investor Visa Guidance</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            Assistance for entrepreneurs from treaty countries to invest and operate a U.S. business. 
                            We help with business plan preparation, investment structuring, and interview readiness.
                        </p>
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
                        <h3 style="color: #fff;">International Entrepreneur Parole (IEP) Support</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            Tailored solutions for startup founders with innovative, high-growth potential businesses. 
                            We assist in meeting capital requirements, securing investor endorsements, and preparing USCIS submissions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-md-6">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-5"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">O-1 Visa for Exceptional Talent</h3>
                    </div>
                    <div class="featured-desc">
                        <p>
                            Guidance for entrepreneurs and professionals with extraordinary achievements to secure the O-1 Visa. 
                            From portfolio documentation to legal filings, we ensure a strong case for approval.
                        </p>
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
                                <h2 class="title">Our 3-Step Process <span>to Secure Your U.S. Investor or Startup Visa</span></h2>
                            </div>
                            <div class="title-desc">
                                <p>
                                    At <strong>IndCorp Advisory Services</strong>, we simplify the path to obtaining your U.S. Investor (EB-5, E-2) or Startup Founder visa.  
                                    Whether you are an entrepreneur planning to establish your company in the United States or an investor seeking residency through 
                                    capital investment, we provide complete guidance — from eligibility assessment to application approval.  
                                    Our U.S. immigration specialists ensure accuracy, compliance, and speed at every stage so you can focus on building your business and future in America.
                                </p>
                            </div>
                        </div><!--section-title-end -->
                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                href="<?php echo e(route('contact-us')); ?>">Start Your U.S. Visa Application</a>
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
                                    <h3>Eligibility & Strategy Session</h3>
                                </div>
                                <div class="prt-box-description">
                                    We start with a one-on-one consultation to determine your eligibility under U.S. visa categories such as EB-5, E-2, or the International Entrepreneur Parole Program.  
                                    Our experts outline investment requirements, timelines, and potential pathways so you have a clear and achievable plan from the beginning.
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
                                    <h3>Investment Planning & Documentation</h3>
                                </div>
                                <div class="prt-box-description">
                                    We guide you in structuring your U.S. investment or preparing your startup pitch deck,  
                                    compile all supporting documents — such as business incorporation papers, investment proofs, or project job creation plans —  
                                    and ensure every submission meets U.S. immigration standards to avoid costly delays.
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
                                    <h3>Submission & Visa Approval</h3>
                                </div>
                                <div class="prt-box-description">
                                    We submit your application to the relevant U.S. authorities, track progress, and keep you informed at each milestone.  
                                    Once approved, we assist with entry formalities, work authorization, and settlement guidance so you can start living, working, and growing in the United States with confidence.
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
                        <h3>Ready to Move to the U.S.? <span>Let IndCorp Handle the Process</span></h3>
                    </div>
                    <div class="featured-desc">
                        <p>Transform your American dream into reality with expert visa guidance.  
                        Fill out our quick enquiry form, and a U.S. immigration consultant will connect with you within 24 hours  
                        to map out your fastest route to residency or business expansion in the United States.</p>
                    </div> 
                    <br/>
                    <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                        <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                            href="<?php echo e(route('contact-us')); ?>">Get Started Today</a>
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
                            <h2 class="title m-0" style="font-size: 26px;">Key <span>Features & Benefits</span> of the USA EB-5 Investor Visa</h2>
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
                                    <h3>Permanent U.S. Residency</h3>
                                </div>
                                <div class="prt-box-description">Secure a U.S. Green Card for yourself, your spouse, and unmarried children under 21, offering a direct path to permanent residency.</div>
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
                                    <h3>Pathway to U.S. Citizenship</h3>
                                </div>
                                <div class="prt-box-description">After maintaining residency for the required period, EB-5 investors can apply for full U.S. citizenship and a U.S. passport.</div>
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
                                    <h3>Freedom to Live & Work Anywhere</h3>
                                </div>
                                <div class="prt-box-description">Reside in any U.S. state and work, start a business, or retire without restrictions tied to a specific location or employer.</div>
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
                                    <h3>Educational Advantages</h3>
                                </div>
                                <div class="prt-box-description">Gain access to top U.S. universities and schools with potential in-state tuition benefits for your children.</div>
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
                                    <h3>Business & Investment Freedom</h3>
                                </div>
                                <div class="prt-box-description">Own and operate businesses in the U.S., invest in real estate, or diversify into multiple industries with full legal rights.</div>
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
                                    <h3>World-Class Lifestyle</h3>
                                </div>
                                <div class="prt-box-description">Enjoy high-quality healthcare, infrastructure, and a globally recognized standard of living for you and your family.</div>
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
            <tr><td>1</td><td>Valid Passport (with at least 6 months validity)</td></tr>
            <tr><td>2</td><td>Completed Form I-526 (Immigrant Petition by Alien Investor)</td></tr>
            <tr><td>3</td><td>Recent Passport Size Photographs (per U.S. visa photo specifications)</td></tr>
            <tr><td>4</td><td>Proof of Lawful Source of Investment Funds (Bank Statements, Tax Returns, etc.)</td></tr>
            <tr><td>5</td><td>Evidence of Investment (Escrow Agreement or Transfer Receipts)</td></tr>
            <tr><td>6</td><td>Personal Financial Statement</td></tr>
            <tr><td>7</td><td>Proof of Current Address (Utility Bill or Lease Agreement)</td></tr>
        </tbody>
    </table>
</div>

<!-- Business Entity Documents -->
<div class="col-lg-6">
    <h3>Required Documents for Business Entities</h3>
    <table class="document-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Document Name</th>
            </tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>Detailed Business Plan Meeting USCIS Requirements</td></tr>
            <tr><td>2</td><td>Proof of Job Creation Potential (Economic Analysis or Projections)</td></tr>
            <tr><td>3</td><td>Corporate Formation Documents (Articles of Incorporation / Partnership Agreement)</td></tr>
            <tr><td>4</td><td>Operating Agreements & Shareholder Details</td></tr>
            <tr><td>5</td><td>Evidence of Capital Investment (Bank Transfers, Purchase Agreements, etc.)</td></tr>
            <tr><td>6</td><td>Business Licenses or Permits (if applicable)</td></tr>
        </tbody>
    </table>
</div>

        </div>
    </div>
</section>
<!-- Required Documents Ends -->


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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/usa-startup-investor-visa.blade.php ENDPATH**/ ?>