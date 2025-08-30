<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 <?php
$currentslug = Route::current()->getName();

$seodata = App\Helpers\Helper::getSEOData($currentslug);
?>       
    <meta charset="UTF-8">

  <meta name="keywords" content="<?php echo $seodata->meta_keyword ??  'Overseas'; ?>">
    <meta name="description" content="<?php echo $seodata->meta_description ??  'Overseas'; ?>">



    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>
      <?php echo $seodata->meta_title ??  ''; ?> | <?php echo e(config('app.name', 'Overseas Consultant')); ?>

    </title>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php echo $__env->yieldPushContent('before-styles'); ?>
    <?php echo $__env->make('front.layouts.includes.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-styles'); ?>
    <style>
       .btn-refresh{
        background-color:  #222222;
       }
       .btn-refresh i
       {
        color: #fff;
       }
    </style>
    

    <!--=====================================
                CSS LINK PART END
    =======================================-->
     <?php echo $seodata->scripts_text ??  ''; ?>

</head>
<body>
    <!-- page start -->
    <div class="page">
   
        <?php echo $__env->make('front.layouts.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- START decfoxSlider 1 REVOLUTION SLIDER 6.5.9 -->
        <?php echo $__env->make('front.layouts.includes.revolution-slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->make('front.layouts.includes.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('front.layouts.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->
    <?php echo $__env->make('front.layouts.includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('after-scripts'); ?>  
    
</body>


</html?>






<?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/layouts/app.blade.php ENDPATH**/ ?>