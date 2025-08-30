

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
    
    <div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/bank-account-mobile.png')); ?>');">

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
        <h1 class="animated-heading">Simplify Your<span> UAE Business </span>  Banking Experienc</h1>

         <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">Hassle Free Documentation</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> 100% Remote Application Process</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Corporate & Personal Bank Account</span>
                        </li>
                        
                    </ul>
                   
                </div>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
           Open Account Now
        </button>
    </div>

</div>
     <!-- page-title end -->
         <div class="top-banner-bank-freezone-bank">
            <div class="top-banner-title">
                <h1 style="font-size: 44px; font-weight: 600;"><span style="color: rgb(0, 60, 255);">Simplify Your  </span> <span style="color: rgb(255, 123, 0);"> UAE Business  <br/></span><span style="color: rgb(0, 60, 255);"> Banking Experience</span></h1>
                <h4 style="color: rgb(255, 123, 0);">Premium Business Bank Account Services, Just a Step Away</h4>
                <p style="color: rgb(128, 128, 128); margin-top: 0px;">Easily open your business or personal bank account in the UAE with seamless<br> support from our Expert Advisors.</p>
                <div class="position-relative mb-15">
                 
                    <ul class="prt-list style2" style="color: rgb(0, 60, 255);">
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);">Hassle Free Documentation</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> 100% Remote Application Process</span>
                        </li>
                        <li style="color: rgb(0, 60, 255);">
                            <i class="fa fa-check" aria-hidden="true" style="color: rgb(0, 60, 255);"></i>
                            <span class="prt-list-li-content" style="color: rgb(0, 60, 255);"> Corporate & Personal Bank Account</span>
                        </li>
                        
                    </ul>
                   
                </div>
                

                <button class="cost-calculate-banner1" data-bs-toggle="offcanvas" href="#offcanvasExample"> Open Account Now</button>
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
                                        
                                        <h2 class="title">Why You Need a Bank Account?</h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>Having a UAE bank account is essential for managing both personal and business finances efficiently. For businesses, it enables smooth transactions, access to credit facilities, and builds credibility with clients and partners. For individuals, it ensures secure money management, easy salary deposits, and access to various banking services.<br><br>
                                            Whether you're setting up a company or relocating to the UAE, a bank account is the foundation of your financial operations and long-term stability.
                                            </p>
                                    </div>
                                </div><!-- section title end -->                            
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="prt-row home03-process-section clearfix right-side-form-card1 mt-0">
                <div class="container">
                    <div class="row p-0">
                        <div class="col-lg-12 p-0">
                            <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                                <div class="prt-processbox processbox-03" style="width: 57%; height: auto; ">
                                    <div class="">
                                        <h2 class="title m-0 mb-3" style="font-size: 26px; font-weight:600;">How to Open a Bank Account in Dubai Mainland or a Free Zone?
                                        </h2>
                                        <p>Opening a bank account in Dubai is a straightforward process, whether your business is registered in the mainland or a free zone. The key difference lies in documentation and the type of company license you hold.</p>
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
                                                <h3>Choose the Right Bank</h3>
                                            </div>
                                            <div class="prt-box-description"> Select a UAE bank that suits your business needs and offers relevant services.</div>
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
                                                <h3>Choose Account Type
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">Select If you want to open a Corporate Account, Personal Banking, or a Free Zone Bank Account</div>
                                            
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
                                                <h3>Prepare Required Documents
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">Submit company license, share certificates, passport copies, proof of address, and a business plan (if required).</div>
                                           
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
                                                <h3>Meet Compliance Requirements</h3>
                                            </div>
                                            <div class="prt-box-description"> Banks may conduct due diligence, including background checks and proof of business activity.</div>
                                           
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
                                                <h3>Account Approval & Activation</h3>
                                            </div>
                                            <div class="prt-box-description"> Once verified, your account will be opened and ready to use—often within a few working days</div>
                                           
                                        </div>
                                    </div>
                                   
                                   <p class="border-top mt-4 pt-3" style="color:#f36f27;">Whether you're in a Mainland setup or a Free Zone like RAKEZ, DMCC, or IFZA, we simplify the process and handle the coordination for faster approvals and fewer delays.</p>
                                    
                                </div>
                              <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4">
        <div class="prt-pricing-plan pricing-recommended-plan">
            
            <div class="prt-p_table-head">
                <div class="prt-icon prt-icon_element-onlytxt">
                    <i class="flaticon-teamwork"></i>
                </div>
                <div class="prt-p_table-title">
                    <h3 style="line-height: 35px;">
                        <span style="font-size: 22px;"><?php echo e($package->name); ?></span><br>
                        <span style="font-size: 15px;">AED</span>
                        <span style="font-size: 34px; font-weight: 800; color: #f36f27;">
                            <?php echo e(number_format($package->offered_price, 2)); ?>

                        </span>
                    </h3>
                </div>
            </div>
            <div class="prt-p_table-body">
                <ul class="prt-p_table-features">
                    <?php $__currentLoopData = json_decode($package->services, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($service); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="prt-p_table-footer1">
                <a class="home-page-price-btn" href="<?php echo e(route('contact-us')); ?>">Register Now</a>
                <a class="home-page-price-btn1" href="<?php echo e(route('contact-us')); ?>"><i class="fa-solid fa-phone-volume"></i></a>
                <a class="home-page-price-btn1" href="<?php echo e(route('contact-us')); ?>"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p style="color: red; padding-left: 20px; font-size: 12px;margin-top: -10px;">*Terms & Conditions Apply</p>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="connect-section">
                <h3 class="title">Need Assitance? Book a Free Appointment</h3>
                <p class="text-center">We are just a call or text away. Reach out to us and our expert business setup
                    consultants will<br> get back to you to
                    counsel you at every step of your company formation journey. </p>
                <div class="d-flex justify-content-between connect-section-btn">
                    <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
                    <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
                </div>
            </div>
             <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <div id="modal-<?php echo e($package->id); ?>" class="custom-modal">
  <div class="custom-modal-content">
    <span class="close-btn" onclick="closeModal('<?php echo e($package->id); ?>')">&times;</span>
    <section class="prt-row contact-us-contact-form-section clearfix">
          <div class="container-fluid">
            <div class="row g-0">
              
              <div class="col-lg-12">
                <div class="bg-base-grey spacing-25">
                  <div class="section-title style7">
                    <div class="title-header">
                      <h2 class="title" style="font-size:20px;line-height:27px">Have any question? Feel free to <span>Contact</span></h2>
                    </div>
                  </div>
                 <form action="<?php echo e(route('mobileAppDevelopment.submit_mobileAppDevelopment')); ?>" method="POST" class="contact_form clearfix">
                  
                   <div class="row">
                      <div class="col-md-12">  
                        <input type="hidden" name="offer_id" id="contactFormModal"  value="<?php echo e($package->id); ?>">                
                        <input name="name" type="text" placeholder="Your Full Name" required>
                      </div>
                      <div class="col-md-12">
                        <input name="email" type="email" placeholder="Email Address" required>
                      </div>
                       <div class="col-md-12">
                        <input name="mobile" type="text" placeholder="Mobile Number" required>
                      </div>
                       <div class="col-md-12">
                        <input name="location" type="text" placeholder="Location " required>
                      </div>
                              
                      <div class="col-md-12">
                        <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
                      </div>
                      <div class="mt-4">
                        <button class="submit 
                        prt-btn prt-btn-size-md prt-btn-shape-round
                         prt-btn-style-fill prt-btn-color-skincolor" type="submit">Submit Here</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>                        
            </div>
          </div>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<section class="bank-documents-two-columns" style="padding: 0px 0px 40px 0px;margin-top:-30px; font-family: Arial, sans-serif;">
 

  <div class="container">
    
    <div class="section-heading">
      <h2>Bank Account Required Documents</h2>
      <p>Below are the essential documents required for opening both personal and corporate bank accounts in the UAE.</p>
    </div>

    <div class="documents-wrapper">
      
      <!-- Personal Documents Table -->
      <div class="document-box">
        <h3>Personal Bank Account Documents</h3>
        <table class="documents-table">
          <tr><td>Original Emirates ID</td></tr>
          <tr><td>Clear Passport copy</td></tr>
          <tr><td>Residential Ejari</td></tr>
          <tr><td>Last 3 Months Bank Statement</td></tr>
          <!-- Extra Empty Rows to Match Corporate -->
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
          <tr><td class="empty">&nbsp;</td></tr>
        </table>
      </div>

      <!-- Corporate Documents Table -->
      <div class="document-box">
        <h3>Corporate Bank Account Documents</h3>
        <table class="documents-table">
          <tr><td>Valid Trade License</td></tr>
          <tr><td>Memorandum of Association</td></tr>
          <tr><td>Share Certificate (for Freezone licenses)</td></tr>
          <tr><td>Certificate of Incorporation / Formation (for Freezone licenses)</td></tr>
          <tr><td>Business Ejari (for mainland licenses)</td></tr>
          <tr><td>Office Lease Agreement (for freezone licenses)</td></tr>
          <tr><td>All Shareholders Passport copy</td></tr>
          <tr><td>All Shareholders Visa copy (if UAE residents)</td></tr>
          <tr><td>All Shareholders Emirates ID (if UAE residents)</td></tr>
          <tr><td>Proper Business Profile</td></tr>
          <tr><td>List of 3 Suppliers and Clients</td></tr>
          <tr><td>List of Countries dealing with</td></tr>
        </table>
      </div>

    </div>
  </div>
</section>

          
        	<!--sidebar-->
         
            <!--sidebar end-->
            <?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div><!--site-main end-->
         <script>
function openModal(id) {
  document.getElementById('modal-' + id).style.display = 'flex';
}

function closeModal(id) {
  document.getElementById('modal-' + id).style.display = 'none';
}

window.addEventListener('click', function (e) {
  document.querySelectorAll('.custom-modal').forEach(modal => {
    if (e.target === modal) {
      modal.style.display = 'none';
    }
  });
});
</script>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/bank-account.blade.php ENDPATH**/ ?>