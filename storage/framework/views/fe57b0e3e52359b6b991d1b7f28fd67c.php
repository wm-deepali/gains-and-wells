<?php $__env->startSection('title'); ?>
FAQ
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
faq
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--site-main start-->
<div class="site-main">

    <!-- faq-section -->
    <div class="prt-row faq-section bg-layer-equal-height clearfix">
        <div class="container">                    
            <div class="row">
                <div class="col-lg-6">
                    <div class="prt-bg prt-col-bgimage-yes col-bg-img-twenty-four z-index-2">
                        <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                        <div class="layer-content">
                        </div>
                    </div>
                    <img class="img-fluid prt-equal-height-image" src="<?php echo e(asset('assets/images/bg-image/col-bgimage-24.png')); ?>" alt="bg-image-24">
                </div>
                <div class="col-lg-6">
 
    <?php
    use App\Models\Faq;
    use App\Models\Page;
    
    $currentslug = Route::current()->getName();
    $faqs = collect();

    $page = Page::where('slug', $currentslug)->first();
    if ($page) {
        $faqs = Faq::where('page_id', $page->id)->get();
    }
?>

<div class="accordion res-991-mt-30">
    <?php if($faqs->isNotEmpty()): ?>
       <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="toggle prt-toggle_style_classic">
                <div class="toggle-title">
                    <a href="#" class="<?php echo e($index == 0 ? 'active' : ''); ?>"><?php echo e($faq->question); ?></a>
                </div>
                <div class="toggle-content <?php echo e($index == 0 ? 'show' : ''); ?>">
                      <?php echo $faq->answer; ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <div class="toggle prt-toggle_style_classic">
            <div class="toggle-title"><a href="#" class="active">How long does the application process take?</a></div>
            <div class="toggle-content show">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
        </div>
        <div class="toggle prt-toggle_style_classic">
            <div class="toggle-title"><a href="#">Why should I choose your company?</a></div>
            <div class="toggle-content">
                <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s.</p>
            </div>
        </div>
        <div class="toggle prt-toggle_style_classic">
            <div class="toggle-title"><a href="#">What types of systems do you support?</a></div>
            <div class="toggle-content">
                <p>We support a variety of modern and legacy systems tailored to your needs.</p>
            </div>
        </div>
        <div class="toggle prt-toggle_style_classic">
            <div class="toggle-title"><a href="#">What does having a managed services provider mean?</a></div>
            <div class="toggle-content">
                <p>It means we take care of your IT so you can focus on your business.</p>
            </div>
        </div>
    <?php endif; ?>
</div>

            </div><!-- row end -->
        </div>
    </div>
    <!-- faq-section-end -->

    <!-- client-section -->
    <div class="prt-row padding_zero-section faq-client-section bg-base-grey clearfix">
        <div class="container-fluid">
            <!-- row -->
            <div class="row text-center">
                <div class="col-md-12">
                    <!-- slick_slider -->
                    <div class="slick_slider row" data-slick='{"slidesToShow": 6, "slidesToScroll": 1, "arrows":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1200,"settings":{"slidesToShow": 5}}, {"breakpoint":1024,"settings":{"slidesToShow": 4}}, {"breakpoint":777,"settings":{"slidesToShow": 3}}, {"breakpoint":575,"settings":{"slidesToShow": 2}}, {"breakpoint":420,"settings":{"slidesToShow": 1}}]}'>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-1.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-2.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-3.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-4.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-5.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-6.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="client-box style1">
                                <div class="client-thumbnail">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/client/client-2.png')); ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    </div><!-- slick_slider end -->      
                </div>
            </div><!-- row end -->
        </div>
    </div>
    <!-- client-section-end -->

</div><!--site-main end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/faq.blade.php ENDPATH**/ ?>