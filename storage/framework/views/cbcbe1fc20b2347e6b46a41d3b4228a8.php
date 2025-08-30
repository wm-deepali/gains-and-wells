
<?php $__env->startSection('pagetitle'); ?>
Accounts & Finance Info
<?php $__env->stopSection(); ?>

<?php $__env->startPush('require-script'); ?>
<!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
<?php $__env->stopPush(); ?>
<?php $__env->startPush('require-body-script'); ?>
<!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
 

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

        .accordion-item:first-of-type {
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
            stroke-dasharray: 219.911;
            /* 2πr = 2 * π * 35 */
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
       .testimonial-section {
      padding: 60px 20px;
      background-color: #f0f5fb;
    }

    .testimonial-slider-wrapper {
        
      max-width: 1240px;
      margin: auto;
      position: relative;
      overflow: hidden;
    }

    .testimonial-slider {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .testimonial-card {
      min-width: 100%;
      box-sizing: border-box;
      padding: 40px;
      background: #fff;
      border-radius: 20px;
      /*box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);*/
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .testimonial-content {
      flex: 1 1 60%;
      padding-right: 20px;
    }

    .testimonial-content h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }

    .testimonial-text {
      font-size: 18px;
      line-height: 1.6;
      color: #555;
    }

    .testimonial-client {
      display: flex;
      align-items: center;
      margin-top: 20px;
      gap: 10px;
    }

    .testimonial-client img {
      width: 70px;
      height: 70px;
      border-radius: 50%;
    }

    .testimonial-client h4 {
      margin: 0;
      font-size:16px;
      font-weight:600;
    }

    .testimonial-image {
      flex: 1 1 35%;
      text-align: center;
    }

    .testimonial-image img {
      width: 100%;
      max-width: 300px;
      border-radius: 15px;
    }

    .testimonial-nav {
      text-align: center;
      margin-top: 30px;
    }

    .testimonial-nav button {
      background-color: #3e68d1;
      border: none;
      padding: 10px 15px;
      font-size: 20px;
      margin: 0 8px;
      border-radius: 50%;
      cursor: pointer;
      transition: background 0.3s ease;
     
    }

    .testimonial-nav button:hover {
      background-color: #d1d5db;
    }
 .icon-box-col {
  border-right: 1px solid #fff;
  border-bottom: 1px solid #fff;
  padding: 2rem;
}

/* Remove right border from every 2nd column (assuming 2 columns per row) */
.icon-box-col:nth-child(2n) {
  border-right: none;
}

/* Remove bottom border from last row */
.icon-box-col:nth-last-child(-n+2) {
  border-bottom: none;
}

@media (max-width: 576px) {
  .icon-box-col {
    border-right: none;
    border-bottom: 1px solid red;
  }
  .icon-box-col:last-child {
    border-bottom: none;
  }
}


    </style>
    
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
/* 1. General Style */
body {
font-family: 'Poppins';
overflow-x: hidden;
}
p
{
font-size: 16px;
line-height: 30px;
color: #555;
margin: 0;
font-weight: 400;
}
*{
margin: 0;
padding: 0;
}
h2,h3,h4,h5{
color: #04004d;
}
a{
text-decoration: none;
}

h2{
font-size: 50px;
line-height: 60px;
}
h3{
font-size:24px;
}
h4{
font-size: 30px;
}
h5{
font-size: 26px;
}
h6{
font-size: 20px;
}
p{
font-size: 18px;
color: #444;
}
img{
object-fit: cover;
}
.gap {
padding: 120px 0;
}
.no-top{
padding-top: 0;
}
.no-bottom{
padding-bottom: 0;
}
ul{
padding: 0;
margin: 0;
}
li{
display: block;
}
figure {
overflow: hidden;
}

/* 3. hero-section */
.hero-section:before {
background-color: #5800a0;
height: 1556px;
content: "";
position: absolute;
width: 2300px;
border-radius: 666px;
transform: rotate(331deg);
top: -93%;
left: -10%;
z-index: -11;
box-shadow: 94px 0px 0px 88px rgb(237 237 237);
-webkit-box-shadow: 94px 0px 0px 88px rgb(237 237 237);
-moz-box-shadow: 94px 0px 0px 88px rgb(237 237 237);
}
.hero-section {
overflow: hidden;
position: relative;
padding-top: 160px;
}
.hero-section:after {
height: 1556px;
content: "";
position: absolute;
width: 2300px;
border-radius: 666px;
transform: rotate(331deg);
top: -93%;
left: -10%;
z-index: -11;
opacity: .1;
background-repeat: no-repeat;
background-image: url(../img/hero.jpg);
background-size: cover;
background-position: center;
}
.hero-section-text{
position: relative;
}
.hero-section-text h1 {
color: white;
font-weight: 700;
/* font-size: 49px; */
}
.hero-section-text p {
color: #e3e2e2;
padding-bottom: 40px;
width: 84%;
}
.play-button svg {
width: 25px;
height: 25px;
}
.play-button i {
background-color: white;
width: 75px;
height: 75px;
position: relative;
display: flex;
align-items: center;
justify-content: center;
border-radius: 50%;
margin-right: 20px;
}
.play-button i:before{
position: absolute;
content: "";
width: 90px;
height: 90px;
border: 3px solid #fff;
border-radius: 50%;

}
.play-button a {
color: white;
display: flex;
align-items: center;
}
.play-button a span{
border-bottom: 1px solid #fff;
line-height: 16px;
}
/*Start Seo section */
.image-banner-rights img {
width: 100%;
}

.pab-seo {
position: absolute;
font-size: 22px;
font-weight: 600;
text-align: center;
line-height: 22px;
top: 50px;
color: #000;
width: 100%;
}

.batton.x {
padding: 10px 40px !important;
}

.batton:before {
content: "";
width: 20%;
height: 100%;
background-color: rgb(0 0 0 / 25%);
opacity: 0.5;
position: absolute;
top: 0;
left: 0;
opacity: 0;
visibility: hidden;
z-index: -1;
}

.btn-deals {
margin-top: 10px;
}

.btn-deals a {
background: linear-gradient(to right, #e8e7ec, #e8e7ec, #e8e7ec);
color: #000;
}
.image-banner-rights {
position:relative;
}

.col-sm-12.col-md-6.p00 {
margin: 0px !important;
padding: 0px !important;
}
.right-section-service {
font-size: 24px;
font-weight: 600;
padding: 65px 40px;
text-align: center;
color:#fff;
}

.btn-deals a {
padding: 5px 40px !important;
}
.btn-deals {
margin-top: 10px;
}

.bg01 {
background-color: #54C5CD;
}
.bg02 {
background-color: #EF718D;
}
.bg03 {
background-color: #A74FF7;
}
.bg04 {
background-color: #F5A540;
}

/*End Seo section */



/* 4. get-a-quote */
form.get-a-quote i svg{
fill: #00c389;
}
form.get-a-quote i {
width: 90px;
height: 90px;
display: flex;
align-items: center;
justify-content: center;
background-color: #e5f9f3;
border-radius: 50%;
padding: 22px;
border-bottom-left-radius: 0;
margin-right: 30px;
}
.get-a-quote h2 {
font-weight: 40px;
font-weight: 800;
}
.get-a-quote span {
font-size: 16px;
font-weight: bold;
color: #858585;
}
.get-a-quote {
background-color: white;
padding: 60px;
border-radius: 30px;
margin-left: 30px;
box-shadow: -1px 0px 44px 15px rgb(0 0 0 / 4%);
-webkit-box-shadow: -1px 0px 44px 15px rgb(0 0 0 / 4%);
-moz-box-shadow: -1px 0px 44px 15px rgba(0,0,0,0.4);
position: relative;
margin-bottom: 50px;
}
.get-a-quote:after {
right: -6%;
position: absolute;
width: 100px;
height: 100px;
border-radius: 50%;
border: 14px solid #fed73e;
content: "";
z-index: -1;
bottom: -6%;
}
.get-a-quote:before {
position: absolute;
width: 90%;
top: -21px;
height: 45px;
content: "";
left: 5%;
border-radius: 26px;
z-index: -1;
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
}
.get-a-quote input[type="text"],.get-a-quote input[type="number"] {
width: 100%;
height: 60px;
border: 0;
border-radius: 12px;
outline: 0;
margin-bottom: 20px;
padding-left: 30px;
color: #444;
font-size: 16px;
padding-right: 86px;
box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
-webkit-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
-moz-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
border: 1px solid #d3d3d3;
}
.group-img:before {
content: "";
background-color: #d9d9d9;
width: 1px;
height: 35px;
position: absolute;
right: 70px;
top: 15px;
}
.get-a-quote p {
font-weight: bold;
padding-bottom: 10px;
padding-top: 10px;
}
.radio-button {
padding: 15px;
background-color: #edf4ff;
margin-right: 15px;
border-radius: 50px;
font-size: 16px;
font-weight: 700;
align-items: center;
display: flex;
margin-bottom: 35px;
}
.radio-button label {
padding-left: 10px;
}
.radio-button input{
width: 22px;
height: 22px;
}
.group-img{
position: relative;
}
.group-img svg {
position: absolute;
right: 30px;
width: 24px;
height: auto;
top: 21px;
}
/* 5. heading span */
.heading span {
font-weight: 800;
letter-spacing: 2px;
text-transform: uppercase;
}
.heading{
padding-bottom: 40px;
}
.heading h2 {
font-weight: bold;
width: 90%;
margin-bottom: 0;
text-transform: capitalize;
}
.headingline {
display: block;
margin-top: 10px;
background-color: #9a9a9a;
width: 40px;
height: 1px;
margin-bottom: 20px;
}
.we-are p {
width: 84%;
padding-bottom: 45px;
}
.we-are span {
font-weight: bold;
border-bottom: 1px solid;
}
.we-are span.bolo {
border-radius: 50%;
display: inline-block;
border: 7px solid #00c389;
height: 20px;
width: 20px;
margin-right: 10px;
}
.we-are ul li {
font-weight: 600;
padding-bottom: 20px;
align-items: center;
display: flex;
}


/* 20. hero-section.three */
.hero-section.three .hero-section-text {
margin-bottom: 256px;
padding-top: 30px;
}
.hero-section.three .video {
display: flex;
justify-content: center;
}
.hero-section.three form {
display: flex;
justify-content: center;
}
.hero-section.three img.landing-slider {
bottom: -64%;
left: 69%;
transform: rotate(49deg);
}
.hero-section.three:before, .hero-section.three:after {
width: 2258px;
height: 1153px;
top: -80%;
left: -7%;
}
.hero-section.three img.dots {
bottom: 48%;
right: 31%;
}
.hero-section.three form input {
width: 71%;
height: 60px;
border-radius: 40px;
border: 0;
outline: 0;
margin-right: 10px;
padding-left: 30px;
}
.hero-section-text.three > h3,.hero-section-text.three > h6{
color: white;
}
.hero-section-text.three > h3 {
padding-bottom: 30px;
font-size: 26px;
}
/* 21. hero-section-text two */
.hero-section.two .hero-section-text h4{
color: white;
}
.hero-section.two .video {
display: flex;
justify-content: end;
}
.hero-section.two .review {
margin-bottom: 124px;
}
.hero-section.two .hero-section-text p{
width: 100%;
padding-bottom: 0;
}
.hero-section.two .hero-section-text {
position: relative;
margin-top: 40px;
}
.hero-section.two .hero-section-text p {
width: 100%;
padding-bottom: 21px;
}
.hero-section.two:before, .hero-section.two:after {
top: -81%;
height: 1088px;
width: 2248px;
}
.hero-section.two img.landing-slider {
bottom: 11%;
left: 118%;
transform: rotate(76deg);
}
.hero-section.three .hero-section-text p {
color: #e3e2e2;
padding-bottom: 25px;
width: 84%;
padding-top: 10px;
}
/* 22. video hero-section-4 */
.o-video {
width: 100%;
height: 0;
position: relative;
padding-top: 56.25%;
}

.o-video > iframe {
width: 100%;
height: 100%;
position: absolute;
top: 0;
left: 0;
border: 0;
}
.hero-section-text.for h1 {
width: 80%;
margin: auto;
}

/* 24. hero-section.for */
.hero-section.two img.dots {
position: absolute;
z-index: 0;
bottom: 52%;
right: 19%;
}
.hero-section.three .hero-section-text h1 {
width: 86%;
}
.hero-section.two .hero-section-text h1{
font-size: 52px;
}
.hero-section.three.for .hero-section-text h1 {
width: 100%;
}
.hero-section.three.for img.dots {
bottom: 46%;
right: 34%;
}
.hero-section.three.for img.landing-slider {
bottom: -50%;
left: 25%;
transform: rotate(283deg);
}
/* 25. back to top button */
#button {
display: inline-block;
width: 40px;
height: 40px;
text-align: center;
border-radius: 4px;
position: fixed;
bottom: 30px;
right: 30px;
transition: background-color 0.3s, opacity 0.5s, visibility 0.5s;
opacity: 0;
visibility: hidden;
z-index: 1000;
background-color: #00c389;
}
#contact-form {
padding: 22px 30px 22px 20px;
}
#button::after {
content: "\f077";
font-family: FontAwesome;
font-weight: normal;
font-style: normal;
font-size: 20px;
line-height: 44px;
color: #fff;
}
#button:hover {
cursor: pointer;
background-color: #333;
}
#button:active {
background-color: #555;
}
#button.show {
opacity: 1;
visibility: visible;
}
.call-ico img {
width: 25px;
}
.group-img select {
width: 100%;
height: 60px;
border: 0;
border-radius: 12px;
outline: 0;
margin-bottom: 20px;
padding-left: 30px;
color: #444;
font-size: 16px;
padding-right: 86px;
box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
-webkit-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
border: 1px solid #d3d3d3;
background-color: #fff;
}


select {


padding: 0.5em 3.5em 0.5em 1em;

/* reset */

margin: 0;      
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
-webkit-appearance: none;
-moz-appearance: none;
}
.group-img img {
position: absolute;
right: 30px;
width: 24px;
height: auto;
top: 21px;
}
.modal-body form {
margin: 0;
padding: 20px;
}
.modal-content {
background: transparent;
border: none;
box-shadow: none !important;
}
.btn-close {
float: right;
margin-left: 40px;
font-size: 22px;
color: #04004d !important;
opacity: 1;
}
.btn.batton.b {
float: right;
}
.state img {
width: 60px;
height: 60px;
}
@media only screen and (max-width: 768px) {
#home {
padding-top: 190px !important;
}
}
.batton.x {
padding: 8px 20px;
}
.float.x{
position:fixed;
width:60px;
height:60px;
bottom:75px;
right:40px;
background-color:#25d366;
color:#FFF;
border-radius:50px;
text-align:center;
font-size:30px;
box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.1);
z-index:100;
}

.my-float{
margin-top:16px;
}
.float.x img {
margin-top: 6px;
margin-left: 3px;
}
.partner-logo img {
width: 100%;
/*height: 65px;*/
}
.d-flax.partners {
padding: 90px 0;
}
.ch-t {
margin-left: 15px;
color: #fff;
font-weight: 600;
}

.hero-section {
padding-bottom: 30px;
}
@media (max-width: 990px) {
.btn-wh {
margin: auto; 
}
}
.btn-wh img {
width: 100%;
}
@media (max-width: 504px) {
.desk-v {
display: none; 
}
}
.mobile-v{
display: none; 
}
@media (max-width: 504px) {
.mobile-v {
display: flex;
}
}
.bg-t {
display: flex;
background-color: #51049c !important;
border-radius: 100px;
margin: 0;
}
/*.bttn.w {*/
/*	padding: 0;*/
/*}*/
/*.bttn.w a {*/
/*	padding: 0;*/
/*	background-color:transparent !important;*/
/*}*/
.bttn.w img {
width:100% !important;
}
/*.bttn.w {*/
/*	background-color: #00be85;*/
/*}*/
/*.bttn {*/
/*	background-color: #00be85;*/
/*}*/
/*thankyou page*/

.m-a .col-xl-6 {
margin: auto;
}
.row.mobile-v.b {
display: flex !important;
}
.sucess {
padding-top: 180px;
/*margin-bottom: 100px;*/
}
.bth {
text-align: center;
margin-top: 10px;
}
.text-desc {
font-weight: 400 !important;
text-align: center;
}
.thy-h {
background-color: #6415a6f7;
padding-bottom: 22px;
}
.row.mobile-v.b img {
width: 280px;
}
@media (max-width: 990px) {
.row.mobile-v.b img {
width: 100%;
}

}

/*.modal-backdrop fade show {*/
/*    display: none !important;*/
/*}*/
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

.offer-card-design {
    width: 100% !important;
    height: 600px;
    border-radius: 10px;
    overflow: hidden;
    background: #fff;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    position: relative;
}
.select-contry-code select {
    
    height: 60px;
    border: 0;
    border-radius: 12px;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 10px;
    color: #444;
    font-size: 14px;
    padding-right: 10px;
    box-shadow: 0px 0px 20px 7px rgba(0, 0, 0, 0.08);
    -webkit-box-shadow: 0px 0px 20px 7px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: 0px 0px 20px 7px rgba(0,0,0,0.08);
    border: 1px solid #d3d3d3;
}
</style>
<div class="top-banner-bank-website-offer">
     
            <div class="top-banner-title">
                <h1 class="banner-title-top-wesite"> Simplify Your Business </br> <span style="color:#b12e5f;">Accounts & Finance</span>
                    <br> Solutions with the Experts
                    
                </h1>
                <div class="position-relative mb-15" style="width: 100%;color: gray;">

                    <p style="width: 100%;color: #fff;">Stay compliant, optimize your cash flow, and make confident financial decisions with our end-to-end accounting, tax compliance, payroll, and advisory services—designed for businesses in India and abroad. </p>
                    <p>Get a free consultation today and take control of your finances! </p>
</p>

                </div>
                
                <button class="cost-calculate-banner1" data-bs-toggle="offcanvas" href="#offcanvasExample"> Book Free consultation</button>


            </div>
            <div class="banner-form mt-4">
               <form role="form" class="get-a-quote" id="contact-form" method="post" action="<?php echo e(route('submit.package')); ?>" >
                   <?php echo csrf_field(); ?>
                   
                   <input type="hidden" id="contact-formres" value="0">
            <div class="mb-lg-3 mb-3 d-flex align-items-center">
                <i>
                <svg enable-background="new 0 0 124 124" height="52" viewbox="0 0 124 124" width="52" xmlns="http://www.w3.org/2000/svg"><path d="m82.899 50.646c-6.059 0-10.988-4.918-10.988-10.963s4.929-10.963 10.988-10.963 10.988 4.918 10.988 10.963-4.929 10.963-10.988 10.963zm0-17.979c-3.877 0-7.031 3.147-7.031 7.015s3.154 7.015 7.031 7.015 7.031-3.147 7.031-7.015-3.154-7.015-7.031-7.015z"></path><path d="m122.558 2.183c-.069-.986-.853-1.773-1.841-1.848-14.728-1.125-41.975-.347-58.941 17.482-.002.002-.005.004-.007.007-2.3 2.441-4.418 5.209-6.382 8.136-24.65 8.882-35.589 25.07-38.168 33.298-.376 1.202.496 2.487 1.756 2.582l17.94 1.359c-1.478 3.901-2.824 7.823-4.017 11.748-.215.706-.02 1.472.504 1.992l11.995 11.891c.513.508 1.288.703 1.98.495 4-1.194 7.996-2.545 11.97-4.027l1.381 17.923c.097 1.253 1.377 2.122 2.581 1.752 7.562-2.328 24.216-13.247 33.545-37.919 2.953-1.954 5.73-4.064 8.153-6.359 17.668-16.682 18.58-43.82 17.551-58.512-.07-.987 1.029 14.692 0 0zm-3.878 2.008c.413 7.551.219 17.908-2.38 28.202l-26.124-25.897c10.42-2.625 20.888-2.767 28.504-2.305zm-96.722 53.877c3.21-7.053 12.265-18.732 29.892-26.418-2.945 5.084-5.502 10.331-7.777 15.002-2.04 4.172-3.917 8.403-5.638 12.665zm42.549 42.183-1.267-16.452c4.264-1.695 8.496-3.541 12.668-5.545 4.732-2.244 10.045-4.763 15.169-7.669-7.959 17.563-19.588 26.513-26.57 29.666zm37.752-42.448c-7.489 7.094-18.422 12.277-28.076 16.854-8.762 4.212-17.778 7.744-26.816 10.507l-10.293-10.205c2.785-8.95 6.346-17.879 10.592-26.562 4.394-9.022 9.862-20.251 17.01-27.839 5.992-6.295 13.426-10.299 21.11-12.794l29.252 28.998c-2.497 7.687-6.497 15.108-12.779 21.041z"></path><path d="m4.185 122.808c-1.728 0-2.631-2.145-1.437-3.378l27.357-28.26c1.788-1.841 4.666.918 2.874 2.77l-27.357 28.259c-.392.405-.914.609-1.437.609z"></path><path d="m23.435 124c-1.688 0-2.609-2.063-1.493-3.318l17.73-19.91c1.71-1.913 4.7.723 2.987 2.648l-17.73 19.91c-.394.444-.943.67-1.494.67z"></path><path d="m2.982 104.917c-1.688 0-2.609-2.063-1.493-3.318l17.731-19.91c1.709-1.914 4.7.724 2.987 2.648l-17.731 19.91c-.395.444-.943.67-1.494.67z"></path></svg>
                </i>
                <div>
                    
                    
                    <p class="p-0">Consult the Experts Today!</p>
                    <h2>Get a Quote</h2>
                </div>
            </div>
            <div class="col-12" style="display: flex;gap:10px;">
                <div class="col-6 group-img">
                    <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.364 11.636C14.3837 10.6558 13.217 9.93013 11.9439 9.49085C13.3074 8.55179 14.2031 6.9802 14.2031 5.20312C14.2031 2.33413 11.869 0 9 0C6.131 0 3.79688 2.33413 3.79688 5.20312C3.79688 6.9802 4.69262 8.55179 6.05609 9.49085C4.78308 9.93013 3.61631 10.6558 2.63605 11.636C0.936176 13.3359 0 15.596 0 18H1.40625C1.40625 13.8128 4.81279 10.4062 9 10.4062C13.1872 10.4062 16.5938 13.8128 16.5938 18H18C18 15.596 17.0638 13.3359 15.364 11.636ZM9 9C6.90641 9 5.20312 7.29675 5.20312 5.20312C5.20312 3.1095 6.90641 1.40625 9 1.40625C11.0936 1.40625 12.7969 3.1095 12.7969 5.20312C12.7969 7.29675 11.0936 9 9 9Z" fill="#555555"></path>
                </svg>
                    <input type="text" name="full_name" placeholder="Full Name" required="">
                    <input type="hidden" name="page_id" value="<?php echo e($page->id ?? 'NA'); ?>">
                </div>
                <div class="col-6 group-img">
                     <img src="https://overseasconsultant.online/overseas/public/assets/img/dropdown.svg"/>
               <select name="service_id" class="form-control" required>
        <option value="">Select Services</option>
        <?php $__currentLoopData = App\Helpers\Helper::getServices(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($service->id); ?>"><?php echo e($service->service); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
                 
                </div>
            </div>
            <div class="group-img" style="width:102%">
              <svg width="22" height="18" viewbox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.8649 18H6.13513C2.58377 18 0.540527 15.9568 0.540527 12.4054V5.5946C0.540527 2.04324 2.58377 0 6.13513 0H15.8649C19.4162 0 21.4595 2.04324 21.4595 5.5946V12.4054C21.4595 15.9568 19.4162 18 15.8649 18ZM6.13513 1.45946C3.35242 1.45946 1.99999 2.81189 1.99999 5.5946V12.4054C1.99999 15.1881 3.35242 16.5406 6.13513 16.5406H15.8649C18.6476 16.5406 20 15.1881 20 12.4054V5.5946C20 2.81189 18.6476 1.45946 15.8649 1.45946H6.13513Z" fill="#444444"></path>
                  <path d="M10.9988 9.8465C10.1815 9.8465 9.35452 9.59352 8.72208 9.07785L5.67668 6.64539C5.36532 6.39241 5.30696 5.93511 5.55992 5.62376C5.8129 5.31241 6.2702 5.25403 6.58155 5.50701L9.62695 7.93947C10.3664 8.53298 11.6215 8.53298 12.361 7.93947L15.4064 5.50701C15.7178 5.25403 16.1848 5.30268 16.428 5.62376C16.681 5.93511 16.6324 6.40214 16.3113 6.64539L13.2659 9.07785C12.6432 9.59352 11.8161 9.8465 10.9988 9.8465Z" fill="#444444"></path>
                    </svg>
                    <input type="text" name="email" placeholder="Email Address" required="">
            </div>
            <div class="col-12" style="display: flex;gap:10px;">
                <div class="col-md-4 select-contry-code">
                    <?php $phonecodes = App\Helpers\Helper::getCountryPhoneCode(); ?>
                      <select id="quote_country_code" name="country_code" class="form-control codecountry" required>
                        <option value="">Select Country Code</option>
                        <?php if(isset($phonecodes) && count($phonecodes)>0): ?>
                        <?php $__currentLoopData = $phonecodes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $phonecode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($phonecode->phonecode); ?>"><?php echo e($phonecode->name." (+".$phonecode->phonecode.")"); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                      </select>
                    </div>
                <div class="col-8 group-img">
              <svg fill="none" height="112" viewbox="0 0 24 24" width="112" xmlns="http://www.w3.org/2000/svg"><g clip-rule="evenodd" fill="rgb(0,0,0)" fill-rule="evenodd"><path d="m7 2.75c-.41421 0-.75.33579-.75.75v17c0 .4142.33579.75.75.75h10c.4142 0 .75-.3358.75-.75v-17c0-.41421-.3358-.75-.75-.75zm-2.25.75c0-1.24264 1.00736-2.25 2.25-2.25h10c1.2426 0 2.25 1.00736 2.25 2.25v17c0 1.2426-1.0074 2.25-2.25 2.25h-10c-1.24264 0-2.25-1.0074-2.25-2.25z"></path><path d="m10.25 5c0-.41421.3358-.75.75-.75h2c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-2c-.4142 0-.75-.33579-.75-.75z"></path><path d="m9.25 19c0-.4142.33579-.75.75-.75h4c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-4c-.41421 0-.75-.3358-.75-.75z"></path></g></svg>
                <input type="text" name="mobile" placeholder="Mobile Number" required="" oninput="validatePhone(this)" id="quote_phone_number">
                   <div class="mobile-error" style="color: red; font-size: 14px;"></div>
                    <p id="quote_verified_badge" style="color:green;display:none;">Verified</p>      
                    
                  </div>  
                  
                 
           </div>
           <div class="col-12">
                <input type="tel" name="mobile" id="quote_mob_in" class="form-control" style="display:none;"/>
                <input type="text" name="isValid" id="quote_is_valid_number" value="1" class="form-control" style="display:none;"/>
                <div class="form-group mb-2" id="quote_otp_field" style="display: none;">
                    <input
                        type="text"
                        class="form-control"
                        id="quote_otp"
                        name="otp"
                        placeholder="Enter OTP"
                        maxlength="6"
                    />
                </div>
                <button type="button" class="btn btn-primary mb-2" id="quote-send-otp-bt" onclick="sendquoteOTP()" style="display:none;">Send OTP</button>
                <button type="button" class="btn btn-primary mb-2" id="quote-verify-otp-bt" style="display: none;" onclick="verifyquoteOTP()">Verify</button>
                <button type="button" class="btn btn-primary mb-2" id="quote-resend-otp-bt" onclick="sendquoteOTP()" style="display: none;">Resend OTP</button>
                
            </div>   
             <div class="col-12" style="display: flex; gap:2px; flex-direction:column;">
           <div class="col-md-12">
                        <div class="form-group" style="width:102%">
                            <input type="text" name="location" id="location"
                             class="form-control" placeholder="Location" required>
                        </div>
                        <div class="text-danger" id="email-err"></div>
                    </div>
           <div class="col-md-12">
                        <div class="form-group" style="width:102%">
                            <!-- details -->
    <input type="text" name="details" placeholder="Enter Detail" required>
                        </div>
                        <div class="text-danger" id="email-err"></div>
                    </div>
                    </div>
   <div class="col-md-12" style="display:flex;gap:15px;">
                           
                            <div class="g-recaptcha mt-4" data-sitekey=<?php echo e(config('services.recaptcha.key')); ?>></div>
                             <button class="cost-calculate-banner" type="submit" name="submit" class="btn batton" style="height:75px; margin-top:24px">Submit</button>
                        </div>
         
        </form>
               
            </div>

        </div>

        <div class="site-main mt-30">
            
            <!-- about-section -->
           <section class=" service02-about-section mb-30" style="margin-top:30px;">
                <div class="" style="padding: 0px 30px;">
                    <div class="row">

                        <div class="col-lg-12 align-self-center">
    <div class="pl-15 res-1199-pl-0 res-991-mt-30">
        <!-- section title -->
        <div class="section-title" style="margin-top:30px;">
            <div class="title-header">
                <h2 class="title text-center">
                    Comprehensive <span>Accounts & Finance Solutions</span></br> Tailored for Your Business
                </h2>
            </div>
            <div class="title-desc text-center">
                <p>Manage your finances with confidence using our complete suite of accounting and bookkeeping services designed for businesses operating in India and overseas.  
                From GST, VAT, and TDS compliance to payroll setup and employee taxation, we ensure your business stays compliant and efficient.</p>
                <p>Benefit from expert financial reporting, audit support, cash flow planning, and strategic advisory to drive growth and maximize profitability.  
                Partner with us for transparent, reliable, and customized finance solutions that align perfectly with your business goals.</p>
            </div>
        </div><!-- section title end -->
    </div>
</div>

                </div>
            </section>
            
            
            <!-- Blue Card Section Starts -->
            <div class="b-page-card">
    <div class="row col-10">
        <div class="col-md-6 res-767-mb-30 residency-key-points">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-8"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Accurate & Compliant Accounting</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Maintain flawless books with our complete accounting and bookkeeping solutions, ensuring compliance with local and international financial regulations.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 residency-key-points">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">GST, VAT & TDS Compliance</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Expert handling of GST, VAT, and TDS compliance for India and overseas operations to keep your business fully compliant and audit-ready.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 ">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Payroll Setup & Employee Taxation</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Seamless payroll processing and accurate employee tax computations, ensuring timely statutory filings and compliance with labor laws.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 ">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Financial Reporting & Audit Support</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Detailed financial reporting and reliable audit assistance to help you meet regulatory requirements and make informed decisions.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 ">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Cash Flow Planning & Budgeting</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Optimize your cash flow and plan budgets effectively with customized MIS reporting to support your business growth.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 ">
            <div class="featured-icon-box icon-align-before-content icon-ver_align-top style7">
                <div class="featured-icon">
                    <div class="prt-icon prt-icon_element-color-skincolor">
                        <i class="flaticon-passport-4"></i>
                    </div>
                </div>
                <div class="featured-content">
                    <div class="featured-title">
                        <h3 style="color: #fff;">Strategic Financial Advisory</h3>
                    </div>
                    <div class="featured-desc">
                        <p>Get expert advice on business expansion, restructuring, capital raising, and financial forecasting to make smarter business decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Blue Card Section Ends -->
            
            <!-- Our-services-section -->
<section class="prt-row home01-immigration-and-services-section clearfix">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <!--section-title-->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>Our Services</h3>
                        <h2 class="title">More Than Just Consulting –<span> We offer services to drive the success of your business</span>
                        </h2>
                    </div>
                </div><!--section-title end-->
            </div>
        </div>
     <div class="row mt_15 p-3">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-15">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/information-technology.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Accounts & Book Keeping</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Comprehensive accounting and bookkeeping services that keep your financial records accurate and up-to-date.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/settings.png')); ?>" alt="" width="50px">
                    <h3>GST, VAT & TDS Complinaces (India & International)</h3>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Efficient management of GST, VAT, and TDS compliance for seamless tax adherence locally and globally.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/communication.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Payroll Setup, Computations & Employee Taxation</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Accurate payroll management and employee tax calculations to ensure timely statutory compliance.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/resident.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Financial Reportings & Audits</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Comprehensive financial reporting and audit support to help you maintain transparency and compliance.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/free-of-charge.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Cash Flow, Budgeting & MIS Reporting</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Optimize your business finances with detailed cash flow management, budgeting, and MIS reporting.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/vat.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Financial Advisory Services</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Strategic financial advice to help your business expand, restructure, and maximize profitability.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/attestation.png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Business Structuring & Re-Modelling</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Tailored business structuring and remodeling solutions to enhance operational efficiency and growth.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="featured-imagebox-wrapper-page">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?php echo e(asset('assets/images/taxes (1).png')); ?>" alt="" width="50px">
                    <a href="#">
                        <h3>Commercial & Trade License</h3>
                    </a>
                </div>
                <div class="flip-card-back">
                    <p style="color:#fff;">Get assistance with obtaining and renewing commercial and trade licenses to keep your business compliant.</p>
                    <a href="#">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</section>
<!-- immigration-and-services-section-end -->
            <div class="prt-service-single-content-area " style="padding:0px 40px 80px 40px;">

                                    <div class="bg-base-grey">
                                        <div class="featured-icon-box style13">
                                            <div class="featured-icon">
                                                <div
                                                    class="prt-icon prt-icon_element-onlytxt prt-icon_element-color-skincolor">
                                                    <i class="flaticon-passport-8"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
    <div class="featured-title">
        <h3>Expert Accounting & Financial Services Tailored for Your Business</h3>
    </div>
    <div class="featured-desc">
        <p>From bookkeeping and tax compliance to payroll and financial advisory, we deliver precise, customized solutions to help your business thrive financially.  
        Trust our experts to handle your accounts with accuracy and care, so you can focus on growth.</p>
    </div>
    <button class="cost-calculate-banner1 mt-25"> Free Consultation</button>
</div>

                                        </div>
                                    </div>

                                </div>
                                
   <section class="prt-row service02-about-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center ">
                            <div class="bg-base-grey text-center text-lg-start res-991-pt-20">
                                <div class="prt_single_image-wrapper res-991-ml-20 res-991-mr-20">
                                    <img class="img-fluid" src="<?php echo e(asset('assets/images/accout-finance.png')); ?>" alt="single-img-9">
                                </div>
                                <div class="spacing-18">
                                    <h3 class="fs-20 mb-0">One Stop Solution for <strong class="text-base-skin"> Accounts & Finance </strong> Solution</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="pl-15 res-1199-pl-0 res-991-mt-30">
                                <!-- section title -->
                                <div class="section-title">
    <div class="title-header">
        <h3>Account & Finance</h3>
        <h2 class="title">We understand the need of our client <span> Businesses</span></h2>
    </div>
    <div class="title-desc">
        <p>At <b>IndCorp Advisory Services</b>, we go beyond traditional accounting — we partner with your business to fuel growth and ensure financial health. Our comprehensive services cover everything from meticulous bookkeeping to complex tax compliance, designed to simplify your financial journey.</p>
        
        <p>Our team leverages cutting-edge technology and deep expertise to deliver timely insights, streamline your cash flow, and safeguard your business against regulatory risks. Whether launching a startup or scaling a well-established company, we provide customized financial strategies that empower you to make confident, data-driven decisions.</p>
        
        <p>Trust us to be your extended financial arm — providing clarity, compliance, and control — so you can focus on what matters most: growing your business.</p>
    </div>
</div>              
                            </div>
                        </div>
                    </div>
                </div>
            </section>                             
                                
                                
  <!-- section title end -->                                
            
             <section class="prt-row wptb-why-choose-one">
    <div class="container" style="max-width:1300px;">
        <div class="wptb-heading">
            <div class="wptb-item--inner text-center mb-5">
                <h6 class="wptb-item--subtitle">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M14.9119 2.10726L0.787131 7.08487C0.559931 7.16487 0.509531 7.36087 0.779131 7.46806L3.81593 8.68486L5.61593 9.40566L14.4031 2.95286C14.5215 2.86646 14.6575 3.02886 14.5719 3.12166L8.27513 9.93207V9.93366L7.91353 10.3361L8.39273 10.5937L12.3783 12.7393C12.6111 12.8641 12.9127 12.7609 12.9799 12.4721L15.3047 2.45206C15.3679 2.17766 15.1863 2.01046 14.9119 2.10726ZM5.59993 13.7297C5.59993 13.9265 5.71113 13.9817 5.86473 13.8425C6.06553 13.6593 8.14473 11.7937 8.14473 11.7937L5.59993 10.4785V13.7297Z" fill="#E13833"/>
                        </svg>
                    </span>
                    Why Choose Us
                </h6>
                <h1 class="wptb-item--title">
                    <span>Expert Financial Services & Trusted Advisory </br>for Your Business Success</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 pe-md-5">
                <div class="wptb-client-review bg-white wow skewIn card-review-card">
                    <div class="wptb-item--inner">
                        <div class="wptb-heading">
                            <div class="wptb-item--inner text-center">
                                <h6 class="wptb-item--subtitle">BUSINESS GROWTH</h6>
                                <h1 class="wptb-item--title" style="font-family: 'fontello';">
                                    <span>Partner with us for reliable, data-driven financial guidance.</span>
                                </h1>
                            </div>
                        </div>

                        <div class="wptb-item--images">
                            <div class="wptb-counter1">
                                <div class="wptb-item--inner">
                                    <div class="wptb-item--value">4.9</div>
                                </div>
                            </div>

                            <div class="wptb-avatar avatar-group">
                                <span class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/1.jpg')); ?>" alt="Avatar">
                                </span>
                                <span class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/2.jpg')); ?>" alt="Avatar">
                                </span>
                                <span class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="<?php echo e(asset('assets/images/3.jpg')); ?>" alt="Avatar">
                                </span>
                                <span class="avatar rounded-circle">
                                    <span class="avatar-initials rounded-circle"><a href="#">50+</a></span>
                                </span>
                            </div>
                        </div>
                        <div class="wptb--rating-label">Driving Financial Clarity & Control</div>
                        <div class="wptb-item--star">
                            <div class="item-star">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                            </div>
                            <button style="background:#162842"> Get in Touch</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="wptb-why-choose--inner">
                    <div class="row g-0">
                        <div class="col-sm-6 icon-box-col">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title" style="font-family: 'fontello';">Tailored Financial Solutions</h3>
                                    <p class="wptb-item--description mb-0">Customized accounting and advisory services designed to fit your unique business model and growth objectives.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 icon-box-col">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title" style="font-family: 'fontello';">Efficient & Transparent Process</h3>
                                    <p class="wptb-item--description mb-0">Seamless and timely handling of your financial compliance, reporting, and advisory needs with clear communication at every step.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 icon-box-col">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title" style="font-family: 'fontello';">Competitive & Honest Pricing</h3>
                                    <p class="wptb-item--description mb-0">Affordable service packages with no hidden costs, providing excellent value for expert financial management.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 icon-box-col">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title" style="font-family: 'fontello';">Comprehensive Financial Services</h3>
                                    <p class="wptb-item--description mb-0">From bookkeeping and tax compliance to payroll management and financial advisory, we cover all aspects of your financial needs.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 icon-box-col">
                            <div class="wptb-item--inner">
                                <div class="wptb-item--holder">
                                    <h3 class="wptb-item--title" style="font-family: 'fontello';">Industry & Regulatory Expertise</h3>
                                    <p class="wptb-item--description mb-0">Our thorough understanding of global financial regulations ensures your business remains compliant and competitive.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        
        
        
             <!-- Feature-section -->
           
           <section class="prt-row home03-process-section clearfix " style="background:#fff;">
    <div class="container">
        <div class="row p-0">
            <div class="col-lg-12 p-0">
                <div class="prt-processbox-wrapper" style="display: flex; justify-content: space-between;">
                    <div class="prt-processbox processbox-03" style="width: 57%; height: auto; overflow: scroll;">
                        <div class="">
                            <h2 class="title m-0" style="font-size: 26px;">Some of our Business <span>Highlights & </span> Features
                            </h2>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>GST & VAT Compliance Made Easy</h3>
                                </div>
                                <div class="prt-box-description">We manage your GST, VAT, and TDS compliance seamlessly across India and international markets, ensuring accurate filings and on-time submissions to keep your business audit-ready.</div>
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Real-Time Bookkeeping & Ledger Maintenance
                                    </h3>
                                </div>
                                <div class="prt-box-description">Maintain up-to-date financial records with our meticulous bookkeeping services, ensuring transparency and ease during audits and financial reviews.</div>
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Payroll & Employee Tax Management
                                    </h3>
                                </div>
                                <div class="prt-box-description">Simplify your payroll processing and employee taxation with accurate computations, statutory deductions, and timely filings for EPF, ESI, and TDS.</div>
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Dynamic MIS & Financial Reporting</h3>
                                </div>
                                <div class="prt-box-description">Access insightful monthly or quarterly MIS reports that help you monitor cash flow, revenue, and profitability for smarter business decisions.</div>
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>International Taxation Support</h3>
                                </div>
                                <div class="prt-box-description">Expand globally with confidence — we provide expert guidance on cross-border tax planning, international VAT/GST compliance, and multi-country accounting standards.</div>
                            </div>
                        </div>
                        <div class="processbox-content">
                            <div class="prt-number-box">
                                <div class="process-num">
                                    <span class="number1"><i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </div>
                            <div class="processbox-info">
                                <div class="featured-title">
                                    <h3>Strategic Financial Advisory & Budgeting
                                    </h3>
                                </div>
                                <div class="prt-box-description">Whether raising capital, optimizing costs, or planning for growth, our experts assist with budgeting, forecasting, and comprehensive financial strategies tailored for your success.</div>
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

          
          <!--Feature Section Ends -->
           

            <div class="connect-section">
    <h3 class="title">Book a Free Appointment</h3>
    <p class="text-center" style="color:#fff;">We are just a call or text away.</br> Reach out to us and our expert Visa Consultants will get back to you to counsel you at every step of your Business needs </br> from Business formation to Visa Assistance to Accounts & Financial Solution, all under one roof. </p>
  <div class="d-flex justify-content-between connect-section-btn">
    <a href="https://wa.me/62910 33761" target="_blank" style="text-decoration: none;">
        <button>What'sApp Us <i class="fa-brands fa-whatsapp"></i></button>
    </a>
    <a href="tel:+9162910 33761" style="text-decoration: none;">
        <button>Call Us Now <i class="fa-solid fa-phone-volume"></i></button>
    </a>
</div>

</div>
            
            
            <?php echo $__env->make('front.layouts.includes.faq-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                       <?php echo $__env->make('front.layouts.includes.marque', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           
        
        
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
                                        data-to="30" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">30
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Services We offer</h3>
                        <div class="prt-fid-desc">
                            <p>Offering a wide range of services, from business formaiton to Accounts & Financial Management,
                            ensuring all your needs are covered.</p>
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
                                        data-to="15" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">15
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Years of Excellence</h3>
                        <div class="prt-fid-desc">
                            <p>A decade of delivering trusted and efficient business solutions across the globe in Accounting & Finance along with Business Formation.</p>
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
                        <h3 class="prt-fid-title">Business Setups</h3>
                        <div class="prt-fid-desc">
                            <p>Helping entrepreneurs bring their vision to life with successful business setups in Different Countries including USA, UK, UAE, Canada Etc..</p>
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
                                        data-to="20" 
                                        data-interval="5" 
                                        data-before="" 
                                        data-before-style="sup" 
                                        data-after="+" 
                                        data-after-style="sub" 
                                        class="numinate">20
                                </span>
                                <span class="fid-prefix">+</span>
                            </h4>
                        </div>
                        <h3 class="prt-fid-title">Satisfied Clients</h3>
                        <div class="prt-fid-desc">
                            <p>A dedicated team of experts working together to provide you with personalized and
                            efficient solutions.</p>
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
        <script>
    const slider = document.querySelector('.testimonial-slider');
    const cards = document.querySelectorAll('.testimonial-card');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let index = 0;

    function updateSlider() {
      const cardWidth = cards[0].offsetWidth;
      slider.style.transform = `translateX(-${index * cardWidth}px)`;
    }

    prevBtn.addEventListener('click', () => {
      if (index > 0) {
        index--;
        updateSlider();
      }
    });

    nextBtn.addEventListener('click', () => {
      if (index < cards.length - 1) {
        index++;
        updateSlider();
      }
    });

    window.addEventListener('resize', updateSlider);
  </script>
<script>
  function openModal(id) {
    document.getElementById(`modal-${id}`).style.display = 'block';
  }

  function closeModal(id) {
    document.getElementById(`modal-${id}`).style.display = 'none';
  }

  // Close when clicking outside modal
  window.addEventListener('click', function(event) {
    document.querySelectorAll('.custom-modal').forEach(modal => {
      if (event.target === modal) modal.style.display = 'none';
    });
  });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/accounts-and-finance-main.blade.php ENDPATH**/ ?>