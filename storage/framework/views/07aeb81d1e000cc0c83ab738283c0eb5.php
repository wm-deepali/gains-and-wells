<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/aos.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/font-awesome.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/fontello.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/flag-icon.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prettyPhoto.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/twentytwenty.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/shortcodes.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/main.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/megamenu.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
<!-- REVOLUTION LAYERS STYLES --> 
<link rel='stylesheet' id='rs-plugin-settings-css' href="<?php echo e(asset('assets/revolution/css/rs6.css')); ?>">
<link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.min.css
    " rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>


<style>
    .featured-imagebox-wrapper-page {
        perspective: 1000px;
    }

    .featured-imagebox-wrapper-page .flip-card-inner {
        position: relative;
        width: 100%;
        height: 300px;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .featured-imagebox-wrapper-page:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .featured-imagebox-wrapper-page .flip-card-front,
    .featured-imagebox-wrapper-page .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
    }

    .flip-card-front {
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
        align-items: center;
        background: #fff;
        z-index: 2;
    }

    .flip-card-front img {
        /* width: 66%;
            height: 122px; */
        /* object-fit: cover; */
    }

    .flip-card-front h3 {
        padding: 10px;
        font-size: 18px;
    }

    .flip-card-back {
        background: #115599;
        color: #fff;
        transform: rotateY(180deg);
        display: flex;
        flex-direction: column;

        align-items: center;
        justify-content: center;
        padding: 15px;
    }

    .flip-card-back a {
        color: #f36f27;
        font-weight: 600;
    }
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
</style><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/layouts/includes/style.blade.php ENDPATH**/ ?>