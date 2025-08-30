<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

<head>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Overseas">
    <meta name="keywords" content="Overseas">
    <meta name="author" content="Webmingo">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />

    <title>  Gains And Wells LLC | India | indcorp</title>
    <!--  <title>Krishna Chikan | <?php echo $__env->yieldContent('title'); ?></title> -->
  
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>"/>
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- END VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('admin/css/datatable.css')); ?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- END Custom CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.css" >
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('admin/custom/css/header.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('admin/custom/css/style.css')); ?>">
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
<script src ="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script> 
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="<?php echo e(URL::asset('admin/js/jquery-ui.min.js')); ?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.10.4/sweetalert2.min.js"></script>
<script src="<?php echo e(URL::asset('admin/js/datatable.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(URL::asset('admin/custom/js/header.js')); ?>" type="text/javascript"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  
</script>

</head>
<body>
    

<div class="top-header-sec py-1 bg-light border-bottom mb-2">
  <div class="container-fluid">
      <div class="top-main-header d-flex align-items-center">
          <div class="admin-logo">
            <img src="https://overseasconsultant.online/indcorp/public/assets/img/indcorp.png" style="height:40px;">
          </div>
          <div class="ml-auto">
                   <div class="btn-group">
            <button class="btn  bg-transparent p-0 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-light fa-circle-user"></i> Admin
            </button>
            <div class="dropdown-menu keep-open header-dropdown">
                <a href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa-light fa-power-off ml-4"></i> Logout</a>
													 
								
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                    
                
            </div>
        </div>
      </div>
  </div>
</div>
</div>

<style>
  #for_all
  {
    width:100% !important;
  }
</style>
<script type="text/javascript">
    jQuery('.dropdown-menu.keep-open').on('click', function (e) {
  e.stopPropagation();
});

if(1) {
  $('body').attr('tabindex', '0');
}
else {
  alertify.confirm().set({'reverseButtons': true});
  alertify.prompt().set({'reverseButtons': true});
}
</script><?php /**PATH /home/tpmhelpinghand/public_html/gains-and-well.tpmhelpinghand.com/resources/views/admin/top-header.blade.php ENDPATH**/ ?>