

<?php $__env->startSection('pagetitle'); ?>
require documents
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="mobile-top-index-banner-freezone" style=" background-image: url('<?php echo e(asset('assets/images/spc-freezone-mobile.png')); ?>');">

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
        <h1 class="animated-heading">Learn More About the <span> Documents </span>Required in Mainland?</h1>

                          <p>Registering a Company in Dubai Mainland? connect with our Expert Advisor to get your documentation done in few easy steps</p>

        <button class="cost-calculate-banner animated-button" data-bs-toggle="offcanvas" href="#offcanvasExample">
           Connect with Advisor
        </button>
    </div>

</div>
<!-- page-title -->
        <div class="top-banner-dubai-mainland-required">
            <div class="top-banner-title">
                <h1>Learn More About the <br>Documents <span>Required in<br> Mainland? 
                    </span></h1>
                <p>Registering a Company in Dubai Mainland? connect with our Expert Advisor to<br> get your documentation done in few easy steps
                </p>

                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">
                    Connect with Advisor</button>



            </div>

        </div>
<!--<div class="top-banner-bank-it p-15">-->
<!--            <div class="top-banner-title" style=" width:61%;">-->
<!--                <h1 style="color: #003760;"><span>Learn More About the Documents    <span-->
<!--                            style="color: #f36f27;">Required in Mainland?  </span> </span> </h1>-->
<!--                <p style="color: #003760;">Registering a Company in Dubai Mainland? connect with our Expert Advisor to get your documentation done in few easy steps-->
<!--                </p>-->

<!--                <button class="cost-calculate-banner" data-bs-toggle="offcanvas" href="#offcanvasExample">-->
<!--                    Connect with Advisor</button>-->



<!--            </div>-->
<!--            <div class="design-wrapper">-->
<!--  <div class="circle-border"></div>-->
<!--  <img src="<?php echo e(asset('assets/images/required-doc.png')); ?>" class="main-image" alt="Website Image" width="220px">-->
<!--  <div class="small-dot"></div>-->
<!--</div>-->


<!--        </div>-->
      

        <!--site-main start-->
        <div class="site-main">

           <?php echo $__env->make('front.layouts.includes.package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <section class="prt-row home03-process-section clearfix right-side-form-card1">
                <div class="container">
                    <div class="row p-0">
                        <div class="col-lg-12 p-0">
                            <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                                <div class="prt-processbox processbox-03" style="width: 57%; height: 600px; overflow: scroll;">
                                    <div class="">
                                        <h2 class="title m-0" style="font-size: 26px;">Process of Business  <span>Setup in  </span>  Dubai Mainland
                                        </h2>
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
                                                <h3>Consultation & Activity Selection</h3>
                                            </div>
                                            <div class="prt-box-description"> Meet with our experts to choose the right business activity and legal structure that fits your vision.</div>
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
                                                <h3>Trade Name Reservation
                                                </h3>
                                            </div>
                                            <div class="prt-box-description"> Submit preferred trade names to DED for approval and reservation.</div>
                                            
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
                                                <h3>Initial Approval
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">Get the initial approval from DED to proceed with the company formation process.</div>
                                           
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
                                                <h3>Draft MOA & Secure Office Space</h3>
                                            </div>
                                            <div class="prt-box-description">Prepare and notarize the Memorandum of Association (MOA) and secure a commercial office space.</div>
                                           
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
                                                <h3>Submit Documents & Pay Fees</h3>
                                            </div>
                                            <div class="prt-box-description"> Submit all required documents to DED and pay the necessary government fees.</div>
                                           
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
                                                <h3>Collect Trade License
                                                </h3>
                                            </div>
                                            <div class="prt-box-description">Once approved, you’ll receive your business license and can officially begin operations.</div>
                                           
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
                                                <h3>Apply for Visas & Open a Bank Account</h3>
                                            </div>
                                            <div class="prt-box-description"> Apply for investor or employee visas and open your corporate bank account to start full-scale operations.</div>
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
            <!-- testimonial-section -->
            <?php echo $__env->make('front.layouts.includes.testimonials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- testimonial-section-end -->

            <!-- inquiry-section -->
            <section class="prt-row padding_zero-section service02-inquiry-section bg-base-skin clearfix">
                <div class="container">
                    <div class="row prt-vertical_sep">
                        <div class="col-md-6">
                            <div class="featured-icon-box style8">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="flaticon-travel-agency"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Connect with Experts</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Get personalized guidance from our business setup specialists to start your journey with confidence.</p>
                                    </div>
                                    <!--<button class="cost-calculate-btn1 mt-2" >-->
                                    <!--    Get a Callback</button>-->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="featured-icon-box style8 pl-30 res-767-pl-0">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="flaticon-call"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Call us for Any Query?</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We're here to help—reach out anytime for quick answers and expert advice on your business setup needs.</p>
                                    </div>
                                    <!--<button class="cost-calculate-btn1 mt-2">-->
                                    <!--    Call Us Now</button>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- inquiry-section-end -->

            <!-- blog-section -->
            <?php echo $__env->make('front.layouts.includes.blog-secton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- blog-section-end -->
<?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div><!-- site-main end-->
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
<?php echo $__env->make('front.layouts.app-common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/require-document.blade.php ENDPATH**/ ?>