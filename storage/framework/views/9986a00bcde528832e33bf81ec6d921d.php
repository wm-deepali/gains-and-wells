<!doctype html>
<html lang="en">


<!-- Mirrored from www.indonez.com/html-demo/wave/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Aug 2025 04:30:43 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <!-- meta tags -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Premium HTML5 Template by Indonez">
  <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, javascript">
  <meta name="author" content="Indonez">
  <meta name="theme-color" content="#FCB42D">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <?php echo $__env->yieldPushContent('before-styles'); ?>
  <title><?php echo $__env->yieldContent('title'); ?></title>


  <!-- preload assets -->
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/fonts/rubik-v9-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/fonts/rubik-v9-latin-500.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/fonts/rubik-v9-latin-300.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/css/style.css" as="style">
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/js/vendors/uikit.min.js" as="script">
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/js/utilities.min.js" as="script">
  <link rel="preload" href="<?php echo e(asset('front_assets')); ?>/js/config-theme.js" as="script">
  <!-- stylesheet -->
  <link rel="stylesheet" href="<?php echo e(asset('front_assets')); ?>/css/style.css">
  <!-- uikit -->
  <script src="<?php echo e(asset('front_assets')); ?>/js/vendors/uikit.min.js"></script>
  <!-- favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('front_assets')); ?>/img/favicon.ico" type="image/x-icon">
  <!-- touch icon -->
  <link rel="apple-touch-icon-precomposed" href="<?php echo e(asset('front_assets')); ?>/img/apple-touch-icon.png">
  <!-- <link href="https://bootstrapmade.com/content/demo/LeadPage/assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="https://bootstrapmade.com/content/demo/LeadPage/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/" rel="preconnect">
  <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://bootstrapmade.com/content/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://bootstrapmade.com/content/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <!-- <link href="https://bootstrapmade.com/content/vendors/aos/aos.css" rel="stylesheet"> -->
  <link href="https://bootstrapmade.com/content/vendors/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://bootstrapmade.com/content/vendors/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="https://bootstrapmade.com/content/demo/LeadPage/assets/css/main.css" rel="stylesheet">
  <?php echo $__env->yieldPushContent('after-styles'); ?>

</head>

<body>
  <!-- page loader begin -->
  <div class="page-loader">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <!-- page loader end -->
  <!-- header begin -->
  <header>
    <div class="uk-section uk-padding-remove-vertical in-header-inverse ">
      <nav class="uk-navbar-container uk-navbar-transparent"
        data-uk-sticky="show-on-up: true; top: 80; animation: uk-animation-fade"
        style="height: 80px;background-color: black;">
        <div class="uk-container" data-uk-navbar>
          <div class="uk-navbar-left uk-width-expand uk-flex uk-flex-between">
            <a class="uk-navbar-item uk-logo" href="<?php echo e(Route('index-2')); ?>">
              <img src="<?php echo e(asset('front_assets')); ?>/img/gainsandwells-logo1.png" alt="logo" width="134" height="23">
            </a>
            <ul class="uk-navbar-nav uk-visible@m">
              <li><a href="<?php echo e(Route('index-2')); ?>">Home<span data-uk-navbar-parent-icon></span></a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="<?php echo e(Route('homepage2')); ?>">Homepage 2</a></li>
                    <li><a href="<?php echo e(Route('homepage3')); ?>">Homepage 3</a></li>
                    <li><a href="<?php echo e(Route('homepage4')); ?>">Homepage 4</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="<?php echo e(Route('markets')); ?>">Markets</a>
              </li>
              <li><a href="#">Company<span data-uk-navbar-parent-icon></span></a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="<?php echo e(Route('about-us')); ?>">About</a></li>
                    <li><a href="<?php echo e(Route('blogs')); ?>">Blog</a></li>
                    <li><a href="<?php echo e(Route('career')); ?>">Careers</a></li>
                    <li><a href="<?php echo e(Route('contact-us')); ?>">Contact</a></li>
                  </ul>
                </div>
              </li>
              <li><a href="<?php echo e(Route('education')); ?>">Education</a>
              </li>
              <li><a href="#">Resources<span data-uk-navbar-parent-icon></span></a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                  <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                    <div>
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="https://getuikit.com/docs/introduction">Documentation<i
                              class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                        <li><a href="<?php echo e(Route('help-center')); ?>">Help Center</a></li>
                        <li><a href="<?php echo e(Route('customers')); ?>">Customers</a></li>
                        <li><a href="<?php echo e(Route('roadmap')); ?>">Roadmap</a></li>
                        <li><a href="<?php echo e(Route('legal-docs')); ?>">Legal Docs<i class="fas fa-gavel fa-sm"></i></a></li>
                      </ul>
                    </div>
                    <div>
                      <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod incididunt ut labore dolore
                            magna lorem ipsum sit dolor amet consectetur</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="uk-navbar-right uk-width-auto">
            <div class="uk-navbar-item uk-visible@m">
              <div class="in-optional-nav">
                <a href="<?php echo e(Route('signin')); ?>" class="uk-button uk-button-text"><i
                    class="fas fa-user-circle uk-margin-small-right"></i>Log in</a>
                <a href="#" class="uk-button uk-button-primary uk-button-small uk-border-pill">Sign up</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="uk-container" style="margin-top: 30px;">
        <div class="uk-grid">
          <div class="uk-width-1-1">
            <div class="uk-card uk-card-secondary uk-card-small uk-card-body uk-border-rounded">
              <div class="uk-grid uk-text-small" data-uk-grid>
                <div class="uk-width-3-4@m uk-visible@m">
                  <p>Trading involves substantial risk and may result in the loss of your invested/greater that your
                    invested capital, respectively.</p>
                </div>
                <div class="uk-width-expand@m uk-text-center uk-text-right@m">
                  <a class="uk-margin-right" href="#"><i class="fas fa-comment-alt uk-margin-small-right"></i>Live
                    Chat</a>
                  <a href="#"><i
                      class="fas fa-phone-alt uk-margin-small-right uk-margin-small-left"></i>1-800-123-4567</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <?php echo $__env->yieldContent('content'); ?>


  <!-- footer begin -->
  <footer>
    <div class="uk-section uk-section-muted uk-padding-large uk-padding-remove-horizontal uk-margin-medium-top">
      <div class="uk-container">
        <div class="uk-grid-medium" data-uk-grid="">
          <div class="uk-width-expand@m">
            <div class="footer-logo">
              <img class="uk-display-block" src="<?php echo e(asset('front_assets')); ?>/img/gainsandwells-logo1.png" alt="footer-logo" width="134" height="23"
                data-uk-img="">
            </div>
            <p class="uk-text-large uk-margin-small-top">Trade with financial thinking.</p>
            <p class="uk-visible@m">Imperium Tower (Headquarters)<br>
              Jl. Prof Dr Satrio, Kuningan<br>
              12920<br>
              Jakarta - Indonesia
            </p>
          </div>
          <div class="uk-width-3-5@m">
            <div class="uk-child-width-1-3@s uk-child-width-1-3@m" data-uk-grid="">
              <div>
                <h4><span>Markets</span></h4>
                <ul class="uk-list uk-link-text">
                  <li><a href="#">Forex</a></li>
                  <li><a href="#">Synthetic indices</a></li>
                  <li><a href="#">Stock indices</a></li>
                  <li><a href="#">Commodities</a></li>
                </ul>
              </div>
              <div>
                <h4><span>Resources</span></h4>
                <ul class="uk-list uk-link-text">
                  <li><a href="#">Help Centre</a></li>
                  <li><a href="#">Payment methods</a></li>
                </ul>
              </div>
              <div>
                <h4><span>Company</span></h4>
                <ul class="uk-list uk-link-text">
                  <li><a href="#">Our story</a></li>
                  <li><a href="#">Our leadership</a></li>
                  <li><a href="#">Contact us</a></li>
                  <li><a href="#">Partners</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="uk-width-1-1 uk-margin-large-top in-offset-bottom-10">
            <h6><i class="fas fa-exclamation-triangle uk-text-danger uk-margin-small-right"></i>Risk warning</h6>
            <p class="uk-text-small">The financial products offered via this website include digitals, contracts for
              difference (CFDs), and other complex derivatives and financial products. Trading options may not be
              suitable for everyone. Trading CFDs carries a high level of risk since leverage can work both to your
              advantage and disadvantage. As a result, the products offered on this website may not be suitable for all
              investors because of the risk of losing all of your invested capital. You should never invest money that
              you cannot afford to lose, and never trade with borrowed money. Before trading in the complex financial
              products offered, please be sure to understand the risks involved and learn about <a href="#">Secure and
                responsible trading.</a></p>
            <hr>
            <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid="">
              <div class="uk-width-1-2@m">
                <div
                  class="uk-grid-small uk-flex uk-child-width-1-4@s uk-flex uk-child-width-1-5@m in-payment-method uk-text-center"
                  data-uk-grid="">
                  <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                      <img src="<?php echo e(asset('front_assets')); ?>/img/in-lazy.gif" data-src="<?php echo e(asset('front_assets')); ?>/img/in-wave-visa.svg" alt="wave-payment" width="59"
                        height="22" data-uk-img="">
                    </div>
                  </div>
                  <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                      <img src="<?php echo e(asset('front_assets')); ?>/img/in-lazy.gif" data-src="<?php echo e(asset('front_assets')); ?>/img/in-wave-mastercard.svg" alt="wave-payment" width="59"
                        height="22" data-uk-img="">
                    </div>
                  </div>
                  <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                      <img src="<?php echo e(asset('front_assets')); ?>/img/in-lazy.gif" data-src="<?php echo e(asset('front_assets')); ?>/img/in-wave-skrill.svg" alt="wave-payment" width="59"
                        height="22" data-uk-img="">
                    </div>
                  </div>
                  <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-body">
                      <img src="<?php echo e(asset('front_assets')); ?>/img/in-lazy.gif" data-src="<?php echo e(asset('front_assets')); ?>/img/in-wave-paypal.svg" alt="wave-payment" width="59"
                        height="22" data-uk-img="">
                    </div>
                  </div>
                  <div>
                    <div class="uk-card uk-card-default uk-card-small uk-card-body uk-visible@m">
                      <img src="<?php echo e(asset('front_assets')); ?>/img/in-lazy.gif" data-src="<?php echo e(asset('front_assets')); ?>/img/in-wave-neteller.svg" alt="wave-payment" width="59"
                        height="22" data-uk-img="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="uk-width-1-2@m uk-flex uk-flex-right@m">
                <!-- social media begin -->
                <div class="uk-flex social-media-list">
                  <div><a href="https://www.facebook.com/indonez" class="color-facebook text-decoration-none"><i
                        class="fab fa-facebook-square"></i> Facebook</a></div>
                  <div><a href="https://twitter.com/indonez_tw" class="color-twitter text-decoration-none"><i
                        class="fab fa-twitter"></i> Twitter</a></div>
                  <div><a href="https://www.instagram.com/indonez_ig" class="color-instagram text-decoration-none"><i
                        class="fab fa-instagram"></i> Instagram</a></div>
                  <div><a href="#some-link" class="color-youtube text-decoration-none"><i class="fab fa-youtube"></i>
                      Youtube</a></div>
                </div>
                <!-- social media end -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="uk-section uk-section-secondary uk-padding-remove-vertical">
      <div class="uk-container">
        <div class="uk-grid">
          <div class="uk-width-3-4@m uk-visible@m">
            <ul class="uk-subnav uk-subnav-divider">
              <li><a href="#">Regulations</a></li>
              <li><a href="#">Legal documents</a></li>
              <li><a href="#">Important information</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Public relations</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </div>
          <div class="uk-width-expand@m uk-text-right@m">
            <p class="copyright-text">© 2020 Wave Capital Inc.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer end -->
  <!-- to top begin -->
  <a href="#" class="to-top uk-visible@m" data-uk-scroll>
    Top<i class="fas fa-chevron-up"></i>
  </a>
  <!-- to top end -->
  <!-- javascript -->
  <script src="<?php echo e(asset('front_assets')); ?>/js/utilities.min.js"></script>
  <script src="<?php echo e(asset('front_assets')); ?>/js/config-theme.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/wave/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Aug 2025 04:30:58 GMT -->

</html><?php /**PATH D:\web-mingo-project\new\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>