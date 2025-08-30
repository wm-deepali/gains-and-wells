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
                                <h3>Low-Cost Business</h3>
                                <h2 class="title">Business Setup in Dubai Mainland, & Freezone Across the
                                    UAE</h2>
                            </div>
                        </div><!-- section title end -->
                        <div class="row ">
                            <div class="col-lg-12">
                                <!-- testimonials -->
                                <div class="business-setup">

                                    <p><b>Seamless Company Formation:</b> <br>We handle every step of your
                                        business setup, ensuring a smooth and hassle-free process in Dubai
                                        and across the UAE.</p>

                                </div>
                                <div class="business-setup">

                                    <p><b>Expert Local Knowledge:</b> <br>Our deep understanding of UAE laws
                                        and regulations ensures your business complies with all legal
                                        requirements, no matter where you choose to set up.</p>

                                </div>
                                <div class="business-setup">

                                    <p><b>Wide Range of Services:</b> <br>From licensing and office space to
                                        bank accounts and visas, we offer a comprehensive suite of services
                                        to support your business across the UAE.</p>

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
                <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-2.png')); ?>"
                    alt="col-bgimage-6.png">
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/testimonials.blade.php ENDPATH**/ ?>