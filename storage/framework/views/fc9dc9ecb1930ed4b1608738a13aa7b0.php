

<?php $__env->startSection('title'); ?>
IndCorp Advisory Services Pvt. Ltd
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<style>
    .flip-card-front h3{
        font-size:20px;
        font-weight:600;
    }
    .flip-card-back-index button{
        border-radius: 4px; 
        padding: 7px 15px; 
        background-color: #fff; 
        color: #000;
        border: 1px solid #000; 
        cursor: pointer !important;
    }
    .flip-card-back-index button:hover{
        background:#b12e5f !important;
        color:#fff !important;
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

.flip-card-back{
    background:#000 !important;
}
</style>


<style>
.marquee {
    width:100%;
    height: 50px;
    background: #f0f0f0;
    overflow: hidden;
    position: relative;
    padding: 0 20px;
    display: flex;
    align-items: center;
}

.marquee-content {
    display: flex;
    gap: 50px; /* content ke beech gap */
    white-space: nowrap;
    animation: scroll-left 30s linear infinite;
    font-size: 1.1rem;
}

@keyframes scroll-left {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
}
</style>
<style>
.tax-modal {
    display: none;
    position: fixed;
    z-index: 999999; /* sabse upar */
    left: 0;
    top: 44px;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.6);
}

.tax-modal-content {
    background: white;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 500px;
    z-index: 1000000;
    position: relative;
}



.tax-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
}

.tax-img-log .tax-image {
    width: 30% !important;
    height: auto;
}

.tax-popup-body {
    padding: 20px;
}

.tax-btn {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    background: #b12e5f;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background 0.3s ease;
}

.tax-btn:hover {
    background: #8f244c;
}

@media only screen and (max-width: 540px) {
 .tax-modal-content {
    background: white;
    margin: 10% auto;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
    z-index: 1000000;
    position: relative;
}
}

</style>

<!-- site-main start -->
<div class="site-main">
<div id="taxPopup" class="tax-modal">
    <div class="tax-modal-content">
        <span class="tax-close">&times;</span>
        <div class="tax-popup-body">
            <div class="d-flex gap-2 tax-img-logo mb-2">
                <img src="<?php echo e(asset('assets/images/income1.png')); ?>" alt="Income Tax" class="tax-image" style="width:30%;" >

            <h2 >Income Tax Return A.Y. 2025–2026</h2>
            </div>

            <p>Income Tax Return forms for A.Y. 2025–2026 (F.Y. 2024–2025) are now available for filing.</p>
            <p>Submit your return on time to avoid interest charges and penalties.</p>
            <p>Contact us today for a hassle-free filing experience.</p>
            <a href="/contact-us" class="tax-btn">Contact Now</a>
        </div>
    </div>
</div>
<!--about-section-->
<div class="marquee">
    <div class="marquee-content">
        <span>⭐ Welcome to IndCorp Advisory Services Pvt. Ltd - Your Startup Partner</span>
        <span>⭐ Income Tax Return forms for A.Y. 2025–2026 (F.Y. 2024–2025) are now available for filing. Submit your return on time to avoid interest charges and penalties. Contact us today for a hassle-free filing experience.</span>
       
    </div>
</div>
<section class="prt-row home03-welcome-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-12">
                <div class="res-1199-mb-30">
                    <!--section-title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>We Make A Difference</h3>
                            <h2 class="title">Welcome to <span>IndCorp Advisory Services
                                 </span> <br>Private Limited
                            </h2>
                        </div>
                        <div class="title-desc">
                            <p>At IndCorp Advisory Services, we are your reliable partner in Accounting, Finance, HRMS, Audits, and Strategic Advisory—helping you build a strong financial foundation and expand exponentially with confidence.
</p>
                        </div>
                    </div><!--section-title-end -->
                    <div class="row row-equal-height">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="position-relative text-start">
                                <div class="prt_single_image-wrapper">
                                    <img class="img-fluid img-new-card" width="372" height="364"
                                        src="<?php echo e(asset('assets/images/advisory-intro.png')); ?>" alt="single-img-6">
                                </div>
                                <div class="d-block d-sm-flex mt-30 res-991-mt-20">
                                    <div class="mr-30 res-575-mr-0 mb-3">
                                        <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                            href="<?php echo e(route('about-us')); ?>" style="white-space: nowrap;">Read More </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class=" text-start">
                                <h3>Over 15 Years of Expertise</h3>
                                <p class="mb-0">With a proven track record of enabling entrepreneurs to launch and scale their businesses in countries like India, UAE, USA, UK, and Canada—we manage everything from company formation and regulatory compliance to banking assistance and Startups & Investor Visa facilitation. Let us simplify your global business journey.
</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-12" style="margin: auto;">
                <!-- <div class="col-bg-img-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div> -->
                <img class="img-fluid " src="<?php echo e(asset('assets/images/intro1.png')); ?>" alt="col-bgimage-7"
                    style="margin: auto;">
            </div>
        </div>
    </div>
</section>
<!--about-section end-->
<section class="prt-row service02-service-section bg-layer-equal-height bg-base-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <!-- section title -->
                <div class="section-title style2 mb-15">
                    <div class="title-header">
                        <h3>Start Strong</h3>
                        <h2 class="title">Improve Your<br>Business Future with us <br> <span>Get Advisory Services from the Experts
.</span>
                        </h2></br>
                        <p class="mb-0">We specialize in delivering expert financial solutions, including Accounting, Taxation, Audits, and HRMS to streamline and strengthen your business operations. Backed by over a decade of experience, we also support entrepreneurs in setting up businesses abroad, offering complete assistance from company formation to compliance.

</p>
                    </div>
                </div><!-- section title end -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/Auditing.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:42px"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Financial Reporting & Audit Services </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Ensuring Transparency, Building Trust.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>
                                Our auditing services provide a detailed and independent review of your financial records to ensure accuracy and compliance.</p>
</p> We conduct internal, external, and statutory audits to uncover risks and strengthen controls, Enhance transparency and build stakeholder confidence with our audit expertise.
 </p>
                               <a href="<?php echo e(route('auditing')); ?>">
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/Taxation Planning.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:42px"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Tax Computation & Filing Services </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Plan Smart. Save More. Stay Compliant</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Minimize tax liabilities and maximize savings with our strategic tax planning services.
 We stay updated with evolving tax laws to keep your business compliant across local and international jurisdictions.</p>
<p>Let us help you plan smarter and save better.</p>
<a href="<?php echo e(route('taxation')); ?>">
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/Compliances.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:42px"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">GST, VAT & TDS Compliance Services </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Stay Compliant. Stay Confident.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                           
                            <p>Navigating legal and regulatory compliance can be complex—we simplify it for you.
 Our team ensures all your filings, licenses, and operational obligations are up to date and error-free.</p>
<p>Stay compliant, avoid penalties, and focus on running your business smoothly..</p>
                            <a href="<?php echo e(route('compliances')); ?>">
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/Advisory Services.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:42px"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Business & Financial Advisory Services </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Insight-Driven Strategies for Smarter Growth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Get expert advice on financial planning, restructuring, and risk mitigation tailored to your business.</p>
<p> We help you make data-driven decisions to navigate complex challenges and unlock growth.</p>
<p>Think of us as your strategic partner, not just your consultant.
.</p>
<a href="<?php echo e(route('financial-advisory-service')); ?>">
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/Business Abroad.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:42px"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Business Abroad </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Your Global Business Journey Starts Here</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Planning to expand globally? We provide end-to-end support for setting up your business in UAE, USA, UK, Canada, and more.</p>
<p>From company registration and bank account setup to legal and visa assistance—we handle it all.</p> 
<p>Start your international journey with ease and confidence.
.</p>
<a href="<?php echo e(route('business-setup-abroad')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
          <!--  <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/free6.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:35px;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Corporate Funding </a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Build your wealth</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Gain long-term residency in the UAE, with exclusive benefits for investors, professionals, and their families.
Open doors to growth, stability, and a world of opportunities in Dubai.</p>
<a href="">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div> -->
            
            <div class="col-lg-4 col-md-6">
                <div class="flip-card-index" tabIndex="0">
                    <div class="flip-card-inner-index">
                        <div class="flip-card-front-index">
                            <div class="featured-imagebox featured-imagebox-services style2">
                                <div class="prt-box-view-overlay prt-portfolio-box-view-overlay">
                                    <div class="featured-thumbnail1">
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/finance-accounts.jpg')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700;line-height:35px;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">Accounting & Bookkeeping Services</a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p> Precision in Numbers, Power in Decisions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>We offer complete financial and accounting solutions to help businesses maintain accurate records, manage cash flow, and make informed decisions.</p>
 <p>Our services ensure timely reporting, reconciliation, and financial clarity at every stage of your business.</p>
<p>Let us take care of your books, so you can focus on growth.
</p>
<a href="<?php echo e(route('accounts-and-book-keeping')); ?>">
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
                                        <img class="img-fluid" src="<?php echo e(asset('assets/images/HRMS.png')); ?>" alt="">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3 class="text-center"
                                                style="font-size: 35px; font-weight: 700; line-height:35px;"><a
                                                    href="#"
                                                    tabindex="0" class="text-center">HR & Payroll Management Solutions</a></h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Smarter HR. Streamlined Workforce.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back-index">
                            
                            <p>Streamline your HR operations with our advanced Human Resource Management System.</p>
 <p>From payroll processing and attendance tracking to employee onboarding and compliance, we’ve got it covered.</p>
<p>Improve productivity and reduce manual errors with our smart HRMS solutions.</p>
<a href="<?php echo e(route('hrms')); ?>">
                                <button class="flip-card-button" >Get Started Now </button>
                                </a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="prt-bg prt-col-bgimage-yes1 col-bg-img-fourteen bg-base-dark spacing-10">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                        <div class="prt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <div class="position-relative">
                            <h3>What More?</h3>
                            <ul class="prt-list style2">
                                <li>
                                 <i class="fa fa-check" aria-hidden="true"></i>
                                 <a href="<?php echo e(route('accounts-and-finance-main')); ?>">
                                    <span class="prt-list-li-content1" style="color:#fff"> Accounts & Finance Services</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('commercial-license-services')); ?>">
                                    <span class="prt-list-li-content1">Business, Commercial & Trade Licensing Services</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('startups-investor-visa')); ?>">
                                    <span class="prt-list-li-content1">Startup & Investor Visa</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('trademark-and-copyrights')); ?>">
                                    <span class="prt-list-li-content1">Trademarks & Copyrights</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('permanent-residency-visa')); ?>">
                                    <span class="prt-list-li-content1">Long Term Residency Visa</span>
                                    </a>
                                </li>
                              <!--  <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="#">
                                    <span class="prt-list-li-content1">Long Term Residency Visa</span>
                                    </a>
</span>
                                </li> -->
                                
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('bank-account-assistance')); ?>">
                                    <span class="prt-list-li-content1">Opening a Bank Account</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="#">
                                    <span class="prt-list-li-content1">Knowledge Centre</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="<?php echo e(route('blogs')); ?>">
                                    <span class="prt-list-li-content1">Recent Blogs</span>
                                    </a>
                                </li>
                                <li>
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <a href="#">
                                    <span class="prt-list-li-content1">Help & Support</span>
                                    </a>
                                </li>
                                
                            </ul>
                            <button class="mt-5" style="border-radius: 4px; padding: 7px 15px; background-color: #fff; color: #000;border: 1px solid #000; cursor: pointer;" data-bs-toggle="offcanvas" href="#offcanvasExample">Get Free Consultation </button>
                            
                            <div class="prt-image-plane">
                                <img width="182" height="199" class="img-fluid" src="<?php echo e(asset('assets/images/plane.png')); ?>"
                                    alt="image">
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--services-section-->

<!--services-section end-->
<section class="prt-row home03-process-section clearfix">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper">
                    <div class="prt-processbox processbox-01">
                        <!--section-title -->
                        <div class="section-title style4">
                            <div class="title-header">
                                <h2 class="title">Our Simple & Streamlined Process <span> at IndCorp</span> Advisory Services 
                                </h2>
                            </div>
                            <div class="title-desc">
                                <p>we make complex financial and business setup processes simple, clear, and stress-free.
 Whether you're looking for expert financial management or planning to set up a business abroad, our proven approach ensures a smooth journey from consultation to execution.</p>
                            </div>
                        </div><!--section-title-end -->
                        <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                href="<?php echo e(route('contact-us')); ?>">Explore More</a>
                        </div>
                    </div>
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
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Consultation & Requirement Gathering</h3>
                                </div>
                                <div class="prt-box-description">We begin with a detailed discussion to understand your financial needs or business goals.
 Our experts analyze your situation and suggest the best-fit solutions tailored to your objectives, and help you in getting started the most simple way
</div>
                            </div>
                        </div>
                    </div>
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
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Planning & Documentation
</h3>
                                </div>
                                <div class="prt-box-description">Once aligned, we prepare a customized plan and handle all required documentation—be it for accounting, compliance, or company formation.
 We ensure accuracy, legal compliance, and complete transparency at this stage.</div>
                            </div>
                        </div>
                    </div>
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
                                    <p>step</p>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Execution & Ongoing Support
</h3>
                                </div>
                                <div class="prt-box-description"> We execute the process efficiently and keep you updated throughout.
 Post-completion, we continue to provide support, whether it's for financial reporting, tax planning, or international business operations. <p>Our team is always available to assist you, adapting to your evolving business needs and goals.
With IndCorp, you gain a long-term partner, not just a service provider.</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="prt-processbox processbox-05">
                        <div class="prt-bg prt-col-bgimage-yes col-bg-img-eight bg-base-grey">
                            <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                <div class="prt-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <div class="featured-icon-box style4">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <i class="flaticon-passport-8"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Ready to Start ?<span>Get Quickest response</span> from IndCorp
                                            </h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Get in touch with us today—fill out the enquiry form and our
                                                experts call you back.</p>
                                        </div>
                                        <!-- <div class="mr-30 mb-25 res-991-mr-0 res-991-mb-0">
                                            <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor"
                                                href="#">Get a Callback</a>
                                        </div> -->
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
   <?php echo $__env->make('front.layouts.includes.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            

<!-- broken-section -->
<section class="prt-row padding_zero-section home03-why-us-section clearfix">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pb-70 res-991-pb-0">
                <div class="col-bg-img-nine prt-bg prt-col-bgimage-yes prt-left-span spacing-5 z-index-1">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-9.png')); ?>"
                    alt="col-bgimage-9">
            </div>
            <div class="col-lg-6">
                <div class="prt-bg prt-col-bgcolor-yes prt-right-span bg-base-dark spacing-6 z-index-2">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content">
                        <!--section-title -->
                        <div class="section-title style2">
                            <div class="title-header">
                                <h3>Why Choose IndCorp Advisory Services?
</h3>
                                <h2 class="title"
                                    style="font-size: 24px; line-height: 34px;text-align: justify;">With over a decade of industry experience, IndCorp combines financial expertise with global business insight to deliver reliable, result-driven solutions.
 Our client-centric approach, transparent processes, and commitment to compliance ensure you receive personalized support every step of the way.
 From managing your books to setting up your business abroad, we bring the professionalism and precision your business deserves.

                                </h2>
                            </div>
                        </div><!--section-title-end -->
                        <div class="row g-0 prt-vertical_sep res-991-mt_15">
                            <div class="col-md-6">
                                <div class="featured-icon-box style5">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <img src="<?php echo e(asset('assets/images/united.png')); ?>" alt="" width="80px">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Expert Team</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="text-base-white mb-0">Our team provides in-depth,
                                                personalized advice to help you in managing your accounts, finance, audits, HRMS or Business formation for startups in India or abroad.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-50 res-767-pl-0">
                                <div class="featured-icon-box style5">
                                    <div class="featured-icon">
                                        <div
                                            class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                            <img src="<?php echo e(asset('assets/images/iteration.png')); ?>" alt="" width="80px">
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Hassle-Free Process</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="text-base-white mb-0">From paperwork to approvals, we
                                                manage every aspect of your business, ensuring a
                                                smooth and efficient journey with no hidden costs.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div
                                class="d-block d-sm-flex text-start bg-base-dark text-base-white spacing-7">
                                <div class="align-self-start">
                                    <img class="mr-30" src="<?php echo e(asset('assets/images/star-rating.png')); ?>" width="88" height="15"
                                        alt="rating">
                                </div>
                                <div class="align-self-start res-575-mt-10">
                                    <span class="mr-10 fs-15 fw-700"><label
                                            class="underline text-white">99.9% Customer Satisfaction based
                                            on 200+ reviews and almost 100+ Business Setups</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- broken-section-end -->

<!-- Our-services-section -->
<section class="prt-row home01-immigration-and-services-section clearfix">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <!--section-title-->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>Corporate Services</h3>
                        <h2 class="title">More Than Just Consulting Services –<span> Other Corporate Services for
                                Your Success</span>
                        </h2>
                    </div>
                </div><!--section-title end-->
            </div>
        </div>
        <div class="row mt_15 p-3">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-15">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/information-technology.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('commercial-license-services')); ?>">
                                <h3>Business, Commercial & Trade Licensing Services</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>We assist in obtaining the right business, commercial & trade license based on your business activity and location.
                            </p>
                            <a href="<?php echo e(route('commercial-license-services')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/settings.png')); ?>"
                                alt="" width="50px">
                                 <a href="<?php echo e(route('compliances')); ?>">
                                <h3>GST, VAT & TDS Compliance Services</h3>
                                 </a>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Stay tax compliant with hassle-free GST and VAT registration services.
                            </p>
                        <a href="<?php echo e(route('compliances')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/communication.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('trademark-and-copyrights')); ?>">
                                <h3>Trademark & Copyrights</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Protect your brand identity with our trademark and copyright registration services.
                            </p>
                            <a href="<?php echo e(route('trademark-and-copyrights')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/resident.png')); ?>"
                                 alt=""  width="50px">
                            <a href="<?php echo e(route('startups-investor-visa')); ?>">
                                <h3>Startup & Investor Visa</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Secure long-term residency in the UAE, USA, UK, Canada & Singapore through our Startup & Investor facilitation.
                            </p>
                            <a href="<?php echo e(route('startups-investor-visa')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/free-of-charge.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('bank-account-assistance')); ?>">
                                <h3>Bank Account Assistance</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Open your business or personal bank account with ease, locally or internationally.
                            </p>
                            <a href="<?php echo e(route('bank-account-assistance')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/vat.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('hrms')); ?>">
                                <h3>HR & Payroll Management Solutions</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Get assistance with Payroll management & employee taxation consultiing services only from the Industry Experts.</p>
                            <a href="<?php echo e(route('hrms')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/attestation.png')); ?>"
                                alt="" width="50px">
                            <a href="<?php echo e(route('financial-advisory-service')); ?>">
                                <h3>Business & Financial Advisory Services</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Make informed decisions with our expert financial and business advisory services.
                            </p>
                            <a href="<?php echo e(route('financial-advisory-service')); ?>">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="featured-imagebox-wrapper-page">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="<?php echo e(asset('assets/images/taxes (1).png')); ?>"
                                alt="" width="50px">
                            <a href="#">
                                <h3>Cash Flow, Budgeting & MIS Reporting</h3>
                            </a>
                        </div>
                        <div class="flip-card-back">
                            <p>Get Complete Support on your Business Cash Flow Plannnig, Budgeting & MIS Reports preparation from the team of Experts.
                            </p>
                            <a href="#">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Our-services-section-end -->

<!-- testimonial-section -->
<?php echo $__env->make('front.layouts.includes.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- testimonial-section-end -->

<!--fid-section-->
<section class="prt-row home03-fid-section bg-base-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-office-building"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="100"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">100
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
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-teamwork"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="200"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">200
                            </span>
                            <span class="fid-prefix">+</span>
                        </h4>
                    </div>
                    <h3 class="prt-fid-title">Satisfied Clients
                    </h3>
                    <div class="prt-fid-desc">
                        <p>A proven track record of delivering exceptional results and exceeding client
                            expectations.</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-process"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="30"
                                data-interval="1" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">30
                            </span>
                            <span class="fid-prefix">+</span>
                            <!-- <span class="fid-prefix">K</span> -->
                        </h4>
                    </div>
                    <h3 class="prt-fid-title">Services</h3>
                    <div class="prt-fid-desc">
                        <p>Offering a wide range of services, from business formaiton to Accounts & Financial Management,
                            ensuring all your needs are covered.</p>
                    </div>
                </div><!-- prt-fid end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <!-- prt-fid -->
                <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style4">
                    <div class="prt-fid-icon-wrapper">
                        <i class="flaticon-office-building"></i>
                    </div>
                    <div class="prt-fid-contents">
                        <h4 class="prt-fid-inner">
                            <span data-appear-animation="animateDigits" data-from="0" data-to="20"
                                data-interval="5" data-before="" data-before-style="sup" data-after="+"
                                data-after-style="sub" class="numinate">20
                            </span>
                            <span class="fid-prefix">+</span>
                        </h4>
                    </div>
                    <h3 class="prt-fid-title"> Team Members</h3>
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

<!-- blog-section -->
<?php echo $__env->make('front.layouts.includes.blog-secton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- blog-section-end -->

<?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
    var modal = document.getElementById("taxPopup");
    var closeBtn = document.querySelector(".tax-close");

    // Auto open on page load
    setTimeout(function(){
        modal.style.display = "block";
    }, 1000);

    // Close on click
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Close if clicked outside content
    window.onclick = function(e) {
        if (e.target == modal) {
            modal.style.display = "none";
        }
    }
});
</script>
<!-- site-main end-->
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
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/index.blade.php ENDPATH**/ ?>