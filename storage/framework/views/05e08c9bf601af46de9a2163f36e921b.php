<?php
$currentslug = Route::current()->getName();
$testimonial = App\Helpers\Helper::isTestimonialShow($currentslug);
?>
<?php if($testimonial == "yes"): ?>
<section class="prt-row padding_zero-section home01-testimonial-section clearfix">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 mb_80 res-991-mb-0">
                <div
                    class="prt-bg prt-col-bgimage-yes prt-col-bgcolor-yes prt-left-span bg-base-dark spacing-2">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                        <div class="prt-col-wrapper-bg-layer-inner"></div>
                    </div>
                    <div class="layer-content">
                        <!-- section title -->
                        <div class="section-title style2">
                            <div class="title-header">
                                <h3>Low-Cost Financial Solution</h3>
                                <h2 class="title">Comprehensive Financial & Global Business Solutions Under One Roof</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <!-- testimonials -->
                                <div class="business-setup">

                                    <p><b>Integrated Financial Services:</b> <br>We offer complete solutions in accounting, auditing, taxation, HRMS, and compliance.
Our expertise ensures your finances are accurate, optimized, and fully compliant with regulatory standards.</p>

                                </div>
                                <div class="business-setup">

                                    <p><b>Global Business Setup Expertise</b> <br>From company formation to residency and banking assistance, we handle every step of international business setup.
Whether in the UAE, USA, UK, or Canada, we simplify expansion with expert legal and strategic support.</p>

                                </div>
                                <div class="business-setup">

                                    <p><b>Strategic Advisory & Long-Term Support:</b> <br>Our advisory services are tailored to your business goals and evolving needs.
We don’t just consult—we partner with you to enable growth, manage risks, and sustain success over time.</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="prt-bg prt-col-bgimage-yes prt-right-span col-bg-img-two">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                    <div class="layer-content"></div>
                </div>
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/Corporate Services.png')); ?>"
                    alt="col-bgimage-6.png">
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH D:\web-mingo-project\new\resources\views/front/layouts/includes/testimonials.blade.php ENDPATH**/ ?>