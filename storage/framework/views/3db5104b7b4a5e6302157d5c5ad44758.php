<?php
$currentslug = Route::current()->getName();
$faqs = App\Helpers\Helper::getpagefaq($currentslug);

?>
<?php if(isset($faqs) && !empty($faqs)): ?>
<section class="wptb-faq-one pd-top-more " style="margin-bottom:70px;">
    <div class="container" style="max-width: 1300px;">
        <!-- FAQ's -->
        <div class="wptb-faq--inner" style="padding-bottom: 100px;">
            <div class="wptb-heading">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wptb-item--inner">
                            <h6 class="wptb-item--subtitle">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                                    </svg>
                                </span>
                                FREQUENTLY ASKED QUESTIONS
                            </h6>
                            <!--<h1 class="wptb-item--title"> <span>Questions & Answer</span></h1>-->
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <p class="wptb-item--description" style="padding-left:105px">
We are here to provide uniquely designed premium services to our customers accros the globe, please fill in the form to get a call back from us
</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="custom-accordion">
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="accordion-item">
                            <div class="accordion-title">
                                <span>Q<?php echo e($i++); ?>. <?php echo $faq->question; ?></span>
                                <i class="bi bi-chevron-down"></i>
                            </div>
                            <div class="accordion-content">
                                <?php echo $faq->answer; ?>

                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                        
                
                
                        
                
                    </div>
                </div>
                

<?php echo $__env->make('front.layouts.includes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </div>
</section>

<?php endif; ?><?php /**PATH D:\web-mingo-project\new\resources\views/front/layouts/includes/faq-form.blade.php ENDPATH**/ ?>