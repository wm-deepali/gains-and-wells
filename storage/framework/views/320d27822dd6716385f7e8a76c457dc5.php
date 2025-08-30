<style>
  .press-card {
  height: 170px;
  overflow: hidden;
  position: relative;
  border-radius: 10px;
}

.press-card img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}


</style>

<?php $__env->startSection('title'); ?>
Success Stories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
  Success Stories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Add this style inside <head> or in your blade file -->
<style>
    .tab-pane {
        background-color: #1f2235 !important;
        color: #fff;
        padding: 20px;
        border-radius: 8px;
    }

    .tab-pane img {
        height: 220px;
        object-fit: cover;
        object-position: center;
        width: 100%;
    }

    .nav-tabs .nav-link.active {
        border:none;
        border-bottom: 3px solid #ffc107 !important;
        background-color: transparent !important;
        color: #000 !important;
    }

    .nav-tabs .nav-link {
        color: #000 !important;
    }
</style>
<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        top: 117%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.7);
        /*border-radius: 50%;*/
        z-index: 2;
    }

    .carousel-control-prev {
        right: 60px;
        left: auto;
    }

    .carousel-control-next {
        right: -24px;
    }

    .carousel-inner {
        position: relative;
    }

    .carousel .carousel-control-prev-icon,
    .carousel .carousel-control-next-icon {
        background-size: 60% 60%;
    }
</style>


<!--site-main start-->
<div class="site-main">
    <!-- about-us-section -->
<section class="prt-row py-5" style="background-color: #ffffff; color: #000; margin-bottom:150px;">
    <div class="container">

        <!-- Tabs -->
        <ul class="nav nav-tabs border-0 justify-content-start mb-4" id="storyTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active text-white bg-transparent border-0 border-bottom border-3 border-warning" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">Accounts & Finance</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-white" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">Advisory Services</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-white" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab">HRMS</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link text-white" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab">Business Abroad</button>
            </li>
        </ul>

        <!-- Tab Contents with Carousel -->
        <div class="tab-content" id="storyTabsContent">

            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                <div id="carouselTab1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/accounts.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                            Reviving a Manufacturing Firm’s Financial Structure
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A mid-sized manufacturing company in Mumbai was struggling with disorganized books and delayed filings, risking compliance penalties. IndCorp stepped in with a complete overhaul of their accounting system, digitized financial records, streamlined invoicing, and ensured timely GST filings. Within 6 months, the firm became financially stable, compliant, and saw improved cash flow management.</p>
                                        <p class="text-end"><strong>Virat Singh</strong><br>(Founder)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/accounts.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                            Scaling a Retail Business with Smart Accounting
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A fast-growing retail chain lacked the internal bandwidth to manage multi-location financials. IndCorp implemented cloud-based accounting software and trained their team. With monthly reporting, forecasting tools, and real-time insights, the business expanded to three more cities in one year, with full financial visibility and control.</p>
                                       <p class="text-end"><strong>Vijay Singhania</strong><br>(Founder)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTab1" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTab1" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Copy-Paste similar carousel structure for Tab 2, 3, 4 -->
            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab2" role="tabpanel">
                <div id="carouselTab2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/advisory.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                            Strategic Restructuring for a Family-Owned Business
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A 15-year-old family-run textile business faced internal management issues and falling profits. IndCorp conducted a deep business audit, proposed a new shareholding and operational structure, and guided them in aligning vision across generations. The restructuring led to clear responsibilities, better governance, and a 40% increase in operational efficiency.</p>
                                        <p class="text-end"><strong>Neha Sharma</strong><br>(Manager)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/advisory.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                           Financial Turnaround for a Tech Startup
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A SaaS-based startup was burning cash and unable to secure investors due to poor financial planning. IndCorp analyzed their financials, optimized expenses, and presented investor-ready reports. Within 4 months, the startup secured funding and shifted from survival mode to scaling mode, with structured financial oversight.</p>
                                        <p class="text-end"><strong>Deepak Kumar</strong><br>(Founder)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTab2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTab2" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            
            <div class="tab-pane fade" id="tab3" role="tabpanel">
                <div id="carouselTab3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/hrms.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                            Automating HR for a 300+ Staff Logistics Company
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A logistics company was facing difficulties with attendance, payroll, and compliance due to a manual HR process. IndCorp implemented a complete HRMS system covering employee records, leave tracking, automated payroll, and compliance modules. It saved 70% of administrative time and ensured 100% statutory compliance.</p>
                                        <p class="text-end"><strong>Pooja Gupta</strong><br>(HR)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/hrms.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                           Building HR Processes for a Startup
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>A fast-growing design studio had no formal HR setup, leading to high attrition and inconsistent hiring. IndCorp introduced a performance management system, created an HR policy manual, and integrated a recruitment pipeline into their HRMS. This led to stronger retention, smoother onboarding, and a 25% increase in team satisfaction.</p>
                                        <p class="text-end"><strong>Sophia Khan</strong><br>(HR)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTab3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTab3" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel">
                <div id="carouselTab4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/accounts.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                            Expanding to the USA: Tech Firm Goes Global
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>An Indian IT services firm wanted to enter the US market. IndCorp advised on the best legal entity, registered their Delaware LLC, assisted in opening a US bank account, and ensured IRS compliance. Within 4 months, the client had an operational presence in the US and signed its first international client.</p>
                                        <p class="text-end"><strong>Avinash Garg</strong><br>(Startup)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="bg-dark p-4 rounded shadow">
                                        <img src="<?php echo e(asset('assets/images/accounts.jpg')); ?>" class="img-fluid rounded mb-3" style="height:220px; object-fit:cover;">
                                        <blockquote class="fs-5 fst-italic text-light">
                                            <span style="font-size: 30px; color: #00e676;">“</span>
                                          UAE Setup with Golden Visa Assistance
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3">
                                        <p>An Indian entrepreneur wanted to expand his business to Dubai but was unsure of the legal and immigration process. IndCorp facilitated mainland business setup, handled VAT registration, and helped him apply for a Golden Visa. Today, he runs a successful services firm in Dubai with full residency status and a growing clientele.</p>
                                        <p class="text-end"><strong>Jameel Mustufa</strong><br>(Startup)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTab4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTab4" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Similarly for Tab 3 and Tab 4 -->
            <!-- You can replicate above structure with 2 slides for each -->
        </div>
    </div>
</section>









    <!-- about-us-section-end -->

   

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
                                        data-to="25" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">25
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Expert Team Members</h3>
                        <div class="prt-fid-desc">
                            <p>A dedicated team of professionals with deep knowledge in UAE business setup and consulting..</p>
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
                                        data-to="10" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">10
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Years of Excellence</h3>
                        <div class="prt-fid-desc">
                            <p>A decade of delivering trusted and efficient business solutions across the UAE.</p>
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
                        <h3 class="prt-fid-title">Services Delivered</h3>
                        <div class="prt-fid-desc">
                            <p>Comprehensive support covering everything from setup to scaling your business.</p>
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
                                        data-to="100" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">100
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Satisfied Clients</h3>
                        <div class="prt-fid-desc">
                            <p>We’ve built lasting partnerships through reliability, transparency, and results.

.</p>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/success-stories.blade.php ENDPATH**/ ?>