@extends('front.layouts.app')

@section('title')
    Home
@endsection
 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- Bootstrap Icons (required for bi bi-*) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

@section('content')

    <main>
<!--        <div class="background-image-section">-->
 
<!--</div>-->

        <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div id="particles-js" class="uk-light in-slideshow uk-background-contain" data-src=""
                data-uk-img data-uk-slideshow>
                <hr>
                <ul class="uk-slideshow-items" >
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>Trade the markets
                                        directly with
                                        leading trading platforms.</p>
                                    <h1 class="uk-heading-small">The world's most <span class="">powerful</span> trade app.
                                    </h1>
                                    <p class="uk-text-lead uk-visible@m">Get the most accurate market data, alerts,
                                        conversions, tools and more — all within the same app.</p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                        data-uk-grid>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-tesla.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-tesla.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">TSLA<span
                                                            class="uk-text-small">-1.47%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$113.06</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-google.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-google.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">GOOGL<span
                                                            class="uk-text-small">1.32%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$87.34</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-apple.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-apple.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">AAPL<span
                                                            class="uk-text-small">3.68%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$129.62</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="https://gains-and-well.tpmhelpinghand.com/public/front_assets/img/slide-top.png" data-src="https://gains-and-well.tpmhelpinghand.com/public/front_assets/img/slide-top.png" alt="image-slide"
                                        width="400" height="" data-uk-img style="margin-top:-100px" >
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>Trade the markets
                                        directly with
                                        leading trading platforms.</p>
                                    <h1 class="uk-heading-small">Reach out to new trading <span class="">experience</span>.
                                    </h1>
                                    <p class="uk-text-lead uk-visible@m">Bring your trading ventures go around the world,
                                        way beyond the space of your trading account.</p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                        data-uk-grid>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-mcdonalds.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-mcdonalds.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">MCD<span
                                                            class="uk-text-small">-1.29%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$269.47</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-mcdonalds.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-mcdonalds.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">AMZN<span
                                                            class="uk-text-small">3.56%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$86.08</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="https://www.indonez.com/html-demo/equity/img/in-symbol-microsoft.svg"
                                                        data-src="https://www.indonez.com/html-demo/equity/img/in-symbol-microsoft.svg"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">MSFT<span
                                                            class="uk-text-small">-1.18%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="https://gains-and-well.tpmhelpinghand.com/public/front_assets/img/slide-top.png" data-src="https://gains-and-well.tpmhelpinghand.com/public/front_assets/img/slide-top.png" alt="image-slide"
                                        width="400" height="" data-uk-img style="margin-top:-100px">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container">
                    <div class="uk-position-relative" data-uk-grid>
                        <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1">
                        <h4>Popular products</h4>
                    </div>
                </div>
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom"
                    data-uk-grid>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name red">EQ</span>
                                <h5 class="uk-margin-remove">Stocks</h5>
                            </div>
                            <p>Access 19,000+ stocks across core and emerging markets on 40+ exchanges worldwide.</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name green">LQ</span>
                                <h5 class="uk-margin-remove">Listed Options</h5>
                            </div>
                            <p>Access 1,200+ listed options across equities, indices, interest rates, energy, metals and
                                more.</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name blue">FU</span>
                                <h5 class="uk-margin-remove">Futures</h5>
                            </div>
                            <p>Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                            <div class="uk-flex uk-flex-middle">
                                <span class="in-product-name"><i class="fas fa-ellipsis-h fa-xs"></i></span>
                                <h5 class="uk-margin-remove">More products</h5>
                            </div>
                            <p>Explore the full range of cash and leveraged products</p>
                            <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i
                                    class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section content begin -->
        <div class="uk-section in-wave-2">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-3-4@m">
                        <h1 class="uk-margin-remove-bottom">Industry-<span class="in-highlight">leading</span> prices</h1>
                        <p class="uk-text-lead uk-text-muted uk-margin-small-top uk-margin-bottom">Get ultra-competitive
                            spreads and commissions across all asset classes. Receive even better rates as your volume
                            increases.</p>
                    </div>
                </div>
                <div class="uk-grid-medium uk-grid-match" data-uk-grid>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-1.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">FX <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Spread as low as</p>
                            <h1 class="uk-margin-top">0.2</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">pip</p>
                            <p>Trade 182 FX spot pairs and 140 forwards across majors, minors, exotics and metals.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-2.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">CFDs <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Spread from</p>
                            <h1 class="uk-margin-top">0.4</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US500</p>
                            <p>Go long or short on 9,000+ instruments with tight spreads & low commissions.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-3.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Stocks <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Commissions from</p>
                            <h1 class="uk-margin-top">$3</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">on US stocks</p>
                            <p>Access 19,000+ stocks across core and emerging markets on 36 exchanges worldwide.</p>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-width-1-4@m">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-background-contain uk-background-bottom-center"
                            style="background-image: url(img/in-wave-card-bg-4.png);">
                            <h5 class="uk-margin-remove">
                                <a href="#">Commodities <i class="fas fa-chevron-right fa-xs"></i></a>
                            </h5>
                            <p class="uk-margin-remove">Commission as low as</p>
                            <h1 class="uk-margin-top">$1.25</h1>
                            <p class="uk-margin-remove-top uk-margin-bottom">per lot</p>
                            <p>Trade a wide range of commodities as CFDs, futures, options, spot pairs, & more.</p>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-3-5@m">
                        <div
                            class="uk-card uk-card-default uk-card-body uk-text-center uk-border-rounded uk-box-shadow-small in-wave-2-card">
                            <span class="uk-label in-label-small uk-text-uppercase uk-margin-small-right">Start trade</span>
                            Lorem ipsum dolor sit amet consectetur adipisicing reprehen elit. <a href="#">Join now!</a>
                        </div>
                        <div class="uk-grid-collapse uk-grid-divider uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top uk-margin-small-bottom"
                            data-uk-grid>
                            <div>
                                <i class="fas fa-headset fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Award-winning support</p>
                            </div>
                            <div>
                                <i class="fas fa-university fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">Trusted and credible</p>
                            </div>
                            <div>
                                <i class="fas fa-history fa-lg uk-margin-small-right uk-text-primary"></i>
                                <p class="uk-margin-remove uk-text-small uk-text-uppercase">30 years experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-muted uk-background-contain uk-background-center in-wave-3"
            style="background-image: url(img/in-wave-background-1.png);" data-uk-parallax="bgy: -200">
            <div class="uk-container">
                <div class="uk-grid-large uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-2@m">
                        <img class="uk-margin-bottom" src="https://www.indonez.com/html-demo/wave/img/in-wave-icon-5.svg" data-src="https://www.indonez.com/html-demo/wave/img/in-wave-icon-5.svg"
                            alt="wave-icon" width="64" height="64" data-uk-img>
                        <h1 class="uk-margin-remove">Market <span class="in-highlight">analysis</span> and<br>trade
                            inspiration</h1>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur excepteur sint occaecat cupidatat non proident dolorem eum fugiat voluptas nulla
                            pariatur.</p>
                        <div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-text-center uk-margin-medium-top"
                            data-uk-grid>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <img class="uk-margin-remove-bottom" src="{{ asset('front_assets') }}/img/in-lazy.gif"
                                        data-src="https://www.indonez.com/html-demo/wave/img/in-wave-icon-6.svg" alt="wave-icon" width="52" height="52"
                                        data-uk-img>
                                    <h5 class="uk-margin-small-top">Strategies & Discussions</h5>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                                    <img class="uk-margin-remove-bottom" src="{{ asset('front_assets') }}/img/in-lazy.gif"
                                        data-src="https://www.indonez.com/html-demo/wave/img/in-wave-icon-7.svg" alt="wave-icon" width="52" height="52"
                                        data-uk-img>
                                    <h5 class="uk-margin-small-top">Forecasts & Educations</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="uk-inline uk-dark in-wave-video uk-margin-small-bottom">
                            <img class="uk-border-rounded uk-width-1-1" src="{{ asset('front_assets') }}/img/in-lazy.gif"
                                data-src="https://www.indonez.com/html-demo/wave/img/in-wave-image-1.jpg" alt="wave-video" width="533" height="355" data-uk-img>
                            <div class="uk-position-center" data-uk-lightbox="video-autoplay: true;">
                                <a href="https://www.youtube.com/watch?v=F3QpgXBtDeo" data-attrs="width: 920; height: 517;">
                                    <div class="in-play-button"></div>
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                            <div class="uk-flex-top" data-uk-modal>
                                <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical in-iframe">
                                    <button class="uk-modal-close-outside" type="button" data-uk-close></button>
                                </div>
                            </div>
                        </div>
                        <p class="uk-text-small uk-text-muted mt-4">Explore the markets at your own pace with short online
                            courses. <span class="uk-label in-label-small">Sign up</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <section class="main-card p-0">
<!--<div class="container section-title" data-aos="fade-up">-->
<!--                <span class="subtitle">FEATURED PROPOSALS</span>-->
<!--                <h2>FEATURED PROPOSALS</h2>-->
<!--                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis-->
<!--                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>-->
<!--            </div>-->
<!--            <div class="container" -->
<!--     style="background-image: url('https://investouae.com/main_assets/img/all_proposals/village_new_img.jpg'); -->
<!--            width: 100%; -->
<!--            height: 500px; -->
<!--            background-size: cover; -->
<!--            background-position: center;-->
<!--            padding:0px;-->
<!--            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);-->
<!--            ">-->
                
                
<!--                 <div class="card-content" data-aos="fade-right" data-aos-delay="500">-->
<!--                     <div class="main-card-content">-->
<!--                                     <h1>Invest in Leasehold Commercial Projects</h1>-->
<!--            <p class="border-bottom pb-2"><strong>Minimum Investment:</strong> AED 250,000</p>-->
<!--            <p class="border-bottom pb-2"><strong>Return on Investment:</strong> Upto 20%</p>-->
<!--            <p><strong>Period of Investment:</strong> 2 year onwards</p>-->
<!--            <div class="d-flex gap-3">-->
<!--                <a href="#" class="btn">Enquire</a>-->
<!--            <a href="#" class="btn">View Proposal</a>-->
<!--            </div>-->
            
<!--                     </div>-->

<!--        </div>-->
<!--</div>-->

<div class="container mt-5 ">


<!--<div class="swiper proposal-slider slider-card-list">-->
<!--  <div class="swiper-wrapper">-->

    <!-- Card 1 -->
<!--    <div class="swiper-slide">-->
<!--      <div class="proposal-card">-->
<!--        <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">-->
<!--        <div class="proposal-body">-->
<!--          <h5>Be a Partner in Car Leasing Business</h5>-->
<!--          <p>Invest in Car Leasing & Get upto 25% ROI</p>-->
<!--          <table class="proposal-table">-->
<!--            <tr>-->
<!--              <td><strong>Investment Amount</strong></td>-->
<!--              <td>AED 150,000</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>ROI</strong></td>-->
<!--              <td>Upto 21% – 25%</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Period of Investment</strong></td>-->
<!--              <td>2 years</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Verified</strong></td>-->
<!--              <td>Yes</td>-->
<!--            </tr>-->
<!--          </table>-->
<!--          <div class="d-flex gap-2 mt-2">-->
<!--            <a href="#" class="btn">Enquire</a>-->
<!--            <a href="#" class="btn">View Proposal</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <!-- Card 2 -->
<!--    <div class="swiper-slide">-->
<!--      <div class="proposal-card">-->
<!--        <img src="https://investouae.com/main_assets/img/all_proposals/63a30849ad554.webp" alt="">-->
<!--        <div class="proposal-body">-->
<!--          <h5>Invest in Al Tay Commercial Properties</h5>-->
<!--          <p>Get Upto 12 – 15% ROI</p>-->
<!--          <table class="proposal-table">-->
<!--            <tr>-->
<!--              <td><strong>Investment Amount</strong></td>-->
<!--              <td>AED 450,000</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>ROI</strong></td>-->
<!--              <td>Upto 12% – 15%</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Period of Investment</strong></td>-->
<!--              <td>2 years</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Verified</strong></td>-->
<!--              <td>Yes</td>-->
<!--            </tr>-->
<!--          </table>-->
<!--          <div class="d-flex gap-2 mt-2">-->
<!--            <a href="#" class="btn">Enquire</a>-->
<!--            <a href="#" class="btn">View Proposal</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <!-- Card 3 -->
<!--    <div class="swiper-slide">-->
<!--      <div class="proposal-card">-->
<!--        <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">-->
<!--        <div class="proposal-body">-->
<!--          <h5>Be a Partner in Perfume Business</h5>-->
<!--          <p>Get upto 30% ROI</p>-->
<!--          <table class="proposal-table">-->
<!--            <tr>-->
<!--              <td><strong>Investment Amount</strong></td>-->
<!--              <td>AED 200,000</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>ROI</strong></td>-->
<!--              <td>Upto 30%</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Period of Investment</strong></td>-->
<!--              <td>2 years</td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--              <td><strong>Verified</strong></td>-->
<!--              <td>Yes</td>-->
<!--            </tr>-->
<!--          </table>-->
<!--          <div class="d-flex gap-2 mt-2">-->
<!--            <a href="#" class="btn">Enquire</a>-->
<!--            <a href="#" class="btn">View Proposal</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

<!--  </div>-->

  <!-- Navigation -->
<!--  <div class="swiper-button-next"></div>-->
<!--  <div class="swiper-button-prev"></div>-->
<!--  <div class="swiper-pagination"></div>-->
<!--</div>-->
<section class="main-card p-0">
  <!-- Hero Card (Dynamic) -->
  <div class="container section-title" data-aos="fade-up">
    <span class="subtitle">FEATURED PROPOSALS</span>
    <h2>FEATURED PROPOSALS</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit...</p>
  </div>

  <div id="hero-card" class="container hero-card"
    style="background-image: url('https://investouae.com/main_assets/img/all_proposals/village_new_img.jpg'); 
           width: 100%; 
           height: 500px; 
           background-size: cover; 
           background-position: center;
           padding:0px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <div class="card-content" data-aos="fade-right" data-aos-delay="500">
      <div class="main-card-content">
        <h1 id="hero-title">Invest in Leasehold Commercial Projects</h1>
        <p id="hero-investment" class="border-bottom pb-2"><strong>Minimum Investment:</strong> AED 250,000</p>
        <p id="hero-roi" class="border-bottom pb-2"><strong>Return on Investment:</strong> Upto 20%</p>
        <p id="hero-period"><strong>Period of Investment:</strong> 2 year onwards</p>
        <div class="d-flex gap-3">
          <a id="hero-enquire" href="#" class="btn">Enquire</a>
          <a id="hero-view" href="#" class="btn">View Proposal</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider -->
  <div class="container mt-5 p-0 px-2" style="">
    <div class="swiper proposal-slider slider-card-list">
      <div class="swiper-wrapper">

        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="proposal-card"
               data-title="Be a Partner in Car Leasing Business"
               data-bg="https://investouae.com/main_assets/img/all_proposals/carsnow.png"
               data-investment="AED 150,000"
               data-roi="Upto 21% – 25%"
               data-period="2 years">
            <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">
            <div class="proposal-body">
              <h5>Be a Partner in Car Leasing Business</h5>
              <p>Invest in Car Leasing & Get upto 25% ROI</p>
              <div class="pro-table">
                     <p class="text-center" style="width:49%">Investment Amount <br>AED 450,000</p>           
                  <div class="line-ver"></div>
                   
                   <p class="text-center" style="width:49%">ROI <br>12% - 15%</p>
              </div>
              <table class="proposal-table">
                <tr><td><strong>Investment Amount</strong></td><td class="text-end">AED 150,000</td></tr>
                <tr><td><strong>ROI</strong></td><td class="text-end">Upto 21% – 25%</td></tr>
                <tr><td><strong>Period</strong></td><td class="text-end">2 years</td></tr>
                <tr><td><strong>Verified</strong></td><td class="text-end">Yes</td></tr>
              </table>
              <div class="d-flex gap-2 mt-2">
            <a href="#" class="btn">Enquire</a>
            <a href="#" class="btn">View Proposal</a>
          </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="proposal-card"
               data-title="Invest in Al Tay Commercial Properties"
               data-bg="https://investouae.com/main_assets/img/all_proposals/63a30849ad554.webp"
               data-investment="AED 450,000"
               data-roi="Upto 12% – 15%"
               data-period="2 years">
            <img src="https://investouae.com/main_assets/img/all_proposals/63a30849ad554.webp" alt="">
             <div class="proposal-body">
              <h5>Be a Partner in Car Leasing Business</h5>
              <p>Invest Get upto 25% ROI</p>
              <div class="pro-table">
                     <p class="text-center" style="width:49%">Investment Amount <br>AED 450,000</p>           
                  <div class="line-ver"></div>
                   
                   <p class="text-center" style="width:49%">ROI <br>12% - 15%</p>
              </div>
              <table class="proposal-table">
                <tr><td><strong>Investment Amount</strong></td><td class="text-end">AED 150,000</td></tr>
                <tr><td><strong>ROI</strong></td><td class="text-end">Upto 21% – 25%</td></tr>
                <tr><td><strong>Period</strong></td><td class="text-end">2 years</td></tr>
                <tr><td><strong>Verified</strong></td><td class="text-end">Yes</td></tr>
              </table>
              <div class="d-flex gap-2 mt-2">
            <a href="#" class="btn">Enquire</a>
            <a href="#" class="btn">View Proposal</a>
          </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="proposal-card"
               data-title="Be a Partner in Perfume Business"
               data-bg="https://investouae.com/main_assets/img/all_proposals/carsnow.png"
               data-investment="AED 200,000"
               data-roi="Upto 30%"
               data-period="2 years">
            <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">
             <div class="proposal-body">
              <h5>Be a Partner in Car Leasing Business</h5>
              <p>Invest in Car Leasing</p>
              <div class="pro-table">
                     <p class="text-center" style="width:49%">Investment Amount <br>AED 450,000</p>           
                  <div class="line-ver"></div>
                   
                   <p class="text-center" style="width:49%">ROI <br>12% - 15%</p>
              </div>
              <table class="proposal-table">
                <tr><td><strong>Investment Amount</strong></td><td class="text-end">AED 150,000</td></tr>
                <tr><td><strong>ROI</strong></td><td class="text-end">Upto 21% – 25%</td></tr>
                <tr><td><strong>Period</strong></td><td class="text-end">2 years</td></tr>
                <tr><td><strong>Verified</strong></td><td class="text-end">Yes</td></tr>
              </table>
              <div class="d-flex gap-2 mt-2">
            <a href="#" class="btn">Enquire</a>
            <a href="#" class="btn">View Proposal</a>
          </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- JS -->



<!-- Swiper JS -->


</div>


        </section>
        
<section id="features-cards" class="features-cards section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-app-indicator"></i>
              </div>
              <h3>Intuitive Dashboard Interface</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i> Real-time data visualization</li>
                <li><i class="bi bi-check-circle-fill"></i> Customizable widgets</li>
                <li><i class="bi bi-check-circle-fill"></i> Interactive reports</li>
              </ul>
              <div class="feature-image">
                <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-1.webp" alt="Dashboard Interface" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-card highlighted">
              <div class="feature-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3>Advanced Analytics Tools</h3>
              <p>Mauris blandit aliquet elit eget tincidunt nibh pulvinar a cras ultricies ligula sed magna dictum porta mauris blandit aliquet elit eget tincidunt.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i> Predictive analysis</li>
                <li><i class="bi bi-check-circle-fill"></i> Custom reporting</li>
                <li><i class="bi bi-check-circle-fill"></i> Data exploration</li>
              </ul>
              <div class="feature-image">
                <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-2.webp" alt="Analytics Tools" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="250">
            <div class="feature-card">
              <div class="feature-icon">
                <i class="bi bi-shield-check"></i>
              </div>
              <h3>Enterprise-Grade Security</h3>
              <p>Nulla porttitor accumsan tincidunt praesent sapien massa convallis a pellentesque nec egestas non nisi proin eget tortor risus donec sollicitudin.</p>
              <ul class="feature-benefits">
                <li><i class="bi bi-check-circle-fill"></i> End-to-end encryption</li>
                <li><i class="bi bi-check-circle-fill"></i> Advanced access control</li>
                <li><i class="bi bi-check-circle-fill"></i> Compliance monitoring</li>
              </ul>
              <div class="feature-image">
                <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-3.webp" alt="Security Features" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
        </div>

        <div class="feature-testimonial" data-aos="fade-up" data-aos-delay="300">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="zoom-in">
              <div class="testimonial-image">
                <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-4.webp" alt="Testimonial" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="testimonial-content">
                <div class="quote-icon">
                  <i class="bi bi-quote"></i>
                </div>
                <p>Curabitur arcu erat accumsan id imperdiet et porttitor at sem. Vivamus magna justo lacinia eget consectetur sed convallis at tellus. Curabitur aliquet quam id dui posuere blandit.</p>
                <div class="testimonial-author">
                  <h4>Jennifer Austin</h4>
                  <span>Product Director at TechCorp</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Features Cards Section -->

 <section class="main-card p-0" style="margin-top:-40px;">
  <div class="container section-title" data-aos="fade-up">
    <span class="subtitle">FEATURED PROPOSALS</span>
    <h2>FEATURED PROPOSALS</h2>
    <p>
      Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit.
      Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
      laudantium totam rem aperiam
    </p>
  </div>

  <div class="container mt-2">
    <div class="swiper proposal-slider slider-card-list">
      <div class="swiper-wrapper">

        <!-- Card 1 -->
        <div class="swiper-slide">
          <div class="proposal-card-overlay">
            <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">
           <div class="overlay">
              <h5>Be a Partner in Perfume Business</h5>
              <p>Expand into luxury perfumes with up to 30% ROI potential.</p>
              <a href="#" class="btn">View Proposal</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="swiper-slide">
          <div class="proposal-card-overlay">
            <img src="https://investouae.com/main_assets/img/all_proposals/63a30849ad554.webp" alt="">
            <div class="overlay">
              <h5>Be a Partner in Perfume Business</h5>
              <p>Expand into luxury perfumes with up to 30% ROI potential.</p>
              <a href="#" class="btn">View Proposal</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="swiper-slide">
          <div class="proposal-card-overlay">
            <img src="https://investouae.com/main_assets/img/all_proposals/carsnow.png" alt="">
           <div class="overlay">
              <h5>Be a Partner in Perfume Business</h5>
              <p>Expand into luxury perfumes with up to 30% ROI potential.</p>
              <a href="#" class="btn">View Proposal</a>
            </div>
          </div>
        </div>

      </div>

      <!-- Navigation -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>


        <!-- About Section -->
        <section class="about section p-0">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">About</span>
                <h2>About</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Sed ut perspiciatis
                    unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                        <div class="content">
                            <h2>Crafting meaningful experiences through thoughtful design and innovative solutions</h2>
                            <p class="lead">We believe in the power of purposeful creation, where every detail serves a
                                greater vision and every project becomes a testament to our commitment to excellence.</p>
                            <p>Our journey began with a simple philosophy: to transform ideas into reality through
                                meticulous attention to detail and an unwavering dedication to quality. Today, we continue
                                to push boundaries while staying true to our core values of authenticity, innovation, and
                                meaningful impact.</p>
                            <div class="stats-wrapper">
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="8"
                                        data-purecounter-duration="1"></span>
                                    <span class="label">Years of Excellence</span>
                                </div>
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="150"
                                        data-purecounter-duration="1"></span>
                                    <span class="label">Projects Completed</span>
                                </div>
                                <div class="stat-item">
                                    <span class="number purecounter" data-purecounter-start="0" data-purecounter-end="12"
                                        data-purecounter-duration="1"></span>
                                    <span class="label">Team Members</span>
                                </div>
                            </div>
                            <div class="cta-wrapper">
                                <a href="#" class="btn-link">
                                    Discover our story
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
                        <div class="image-wrapper">
                            <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/about/about-1.webp"
                                alt="About us" class="img-fluid">
                            <div class="floating-element">
                                <div class="quote-content">
                                    <blockquote>
                                        "Excellence is never an accident. It is always the result of high intention, sincere
                                        effort, and intelligent execution."
                                    </blockquote>
                                    <cite>— Aristotle</cite>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->
         <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span class="subtitle">Contact</span>
        <h2>Contact Us</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-stretch">
          <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-container">
              <div class="form-intro">
                <h2>Let's Start a Conversation</h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
              </div>

              <form action="https://bootstrapmade.com/content/demo/LeadPage/forms/contact.php" method="post" class="php-email-form contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5" placeholder="Tell us about your project" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-sidebar">
              <div class="contact-header">
                <h3>Get in Touch</h3>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
              </div>

              <div class="contact-methods">
                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>892 Park Avenue, Manhattan<br>New York, NY 10075</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p><a href="https://bootstrapmade.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="84ece1e8e8ebc4e6f1f7edeae1f7f7e0e1e9ebaae7ebe9">[email&#160;protected]</a></p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>+1 (555) 789-2468</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                  </div>
                </div>
              </div>

              <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                <span class="connect-label">Connect with us</span>
                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        <!-- Features Section -->
        <section class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Features</span>
                <h2>Great Features</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="tabs-wrapper">
                    <div class="tabs-header" data-aos="fade-up" data-aos-delay="200">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">01</span>
                                        <div class="tab-text">
                                            <h6>Innovation</h6>
                                            <small>Creative solutions</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">02</span>
                                        <div class="tab-text">
                                            <h6>Strategy</h6>
                                            <small>Business growth</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">03</span>
                                        <div class="tab-text">
                                            <h6>Performance</h6>
                                            <small>Optimal results</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                                    <div class="tab-content-preview">
                                        <span class="tab-number">04</span>
                                        <div class="tab-text">
                                            <h6>Integration</h6>
                                            <small>Seamless workflow</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

                        <div class="tab-pane fade active show" id="features-tab-1">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-lightbulb"></i>
                                            <span>Innovation Hub</span>
                                        </div>
                                        <h3>Revolutionary Design Thinking</h3>
                                        <p>Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque
                                            laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et
                                            quasi architecto beatae vitae dicta sunt explicabo.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">145%</span>
                                                <span class="stat-label">Innovation Rate</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">28K</span>
                                                <span class="stat-label">Ideas Generated</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Nemo enim ipsam voluptatem quia voluptas sit</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Aspernatur aut odit fugit sed quia consequuntur</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Magni dolores eos qui ratione voluptatem</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Explore Innovation <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-2.webp"
                                            alt="" class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-lightning-charge"></i>
                                                <div class="card-info">
                                                    <span>Speed</span>
                                                    <strong>3x Faster</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-2">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-compass"></i>
                                            <span>Strategic Planning</span>
                                        </div>
                                        <h3>Data-Driven Business Strategy</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                            praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                            excepturi sint occaecati cupiditate non provident.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">234%</span>
                                                <span class="stat-label">Growth Rate</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">156</span>
                                                <span class="stat-label">Strategies</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Similique sunt in culpa qui officia deserunt</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Mollitia animi id est laborum et dolorum fuga</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Et harum quidem rerum facilis est expedita</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            View Strategy <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-4.webp"
                                            alt="" class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-graph-up-arrow"></i>
                                                <div class="card-info">
                                                    <span>Growth</span>
                                                    <strong>+189% ROI</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-3">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-speedometer2"></i>
                                            <span>High Performance</span>
                                        </div>
                                        <h3>Optimized System Performance</h3>
                                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe
                                            eveniet voluptates repudiandae sint et molestiae non recusandae itaque earum
                                            rerum hic tenetur sapiente delectus.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">99.8%</span>
                                                <span class="stat-label">System Uptime</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">2.4s</span>
                                                <span class="stat-label">Load Time</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Ut aut reiciendis voluptatibus maiores alias</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Consequatur aut perferendis doloribus asperiores</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Repellat nam libero tempore cum soluta nobis</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Check Performance <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-1.webp"
                                            alt="" class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-cpu"></i>
                                                <div class="card-info">
                                                    <span>Power</span>
                                                    <strong>128 Cores</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="features-tab-4">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="content-area">
                                        <div class="content-badge">
                                            <i class="bi bi-puzzle"></i>
                                            <span>Smart Integration</span>
                                        </div>
                                        <h3>Seamless Workflow Integration</h3>
                                        <p>Eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere
                                            possimus omnis voluptas assumenda est omnis dolor repellendus temporibus autem
                                            quibusdam et aut officiis debitis.</p>

                                        <div class="highlight-stats">
                                            <div class="stat-item">
                                                <span class="stat-value">450+</span>
                                                <span class="stat-label">Integrations</span>
                                            </div>
                                            <div class="stat-item">
                                                <span class="stat-value">85%</span>
                                                <span class="stat-label">Automation</span>
                                            </div>
                                        </div>

                                        <div class="feature-points">
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Rerum necessitatibus saepe eveniet voluptates</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Repudiandae sint et molestiae non recusandae</span>
                                            </div>
                                            <div class="point-item">
                                                <i class="bi bi-arrow-right"></i>
                                                <span>Itaque earum rerum hic tenetur sapiente</span>
                                            </div>
                                        </div>

                                        <a href="#" class="explore-link">
                                            Start Integration <i class="bi bi-arrow-up-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="visual-content">
                                        <img src="https://bootstrapmade.com/content/demo/LeadPage/assets/img/features/features-5.webp"
                                            alt="" class="img-fluid">
                                        <div class="floating-element">
                                            <div class="floating-card">
                                                <i class="bi bi-link-45deg"></i>
                                                <div class="card-info">
                                                    <span>Connected</span>
                                                    <strong>24/7 Sync</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </section><!-- /Features Section -->
        
        <section>
            <div class="container section-title" data-aos="fade-up">
                <span class="subtitle">Features</span>
                <h2>Great Features</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="container text-center my-5">
  <!--<h3>Ready to join the club? <span class="text-primary fw-bold">Start investing now</span></h3>-->

  <div class="row mt-5 align-items-start">
  <!-- Left Steps -->
  <div class="col-md-6 text-start position-relative">
    <div class="step-box active" data-step="1">
      <span class="step-number"><i class="fa-regular fa-arrow-right"></i> 01</span>
      <p class="mb-0" style="margin-left: 43px;">Complete paperless KYC online</p>
    </div>
    <div class="step-box inactive" data-step="2">
      <span class="step-number"><i class="fa-regular fa-arrow-right"></i> 02</span>
      <p class="mb-0" style="margin-left: 43px;">Select from a curated list of opportunities</p>
    </div>
    <div class="step-box inactive" data-step="3">
      <span class="step-number"><i class="fa-regular fa-arrow-right"></i> 03</span>
      <p class="mb-0" style="margin-left: 43px;">Complete payment and receive securities in your demat account</p>
    </div>
    <button class="start-btn">Start Investing</button>
  </div>

  <!-- Right Content -->
  <div class="col-md-6">
    <div class="tab-wrapper">
      <!-- Step 1 -->
      <div class="tab-pane-custom active" id="step1">
        <div class="card-box">
         <img src="https://www.jiraaf.com/images/homepage/desktop/documents.webp" alt="" >
        </div>
      </div>
      <!-- Step 2 -->
      <div class="tab-pane-custom" id="step2">
        <div class="card-box d-flex flex-wrap justify-content-center">
          <img src="https://www.jiraaf.com/images/homepage/mobile/opportunities-list.webp" alt="" >
        </div>
      </div>
      <!-- Step 3 -->
      <div class="tab-pane-custom" id="step3">
        <div class="card-box">
         <img src="https://www.jiraaf.com/images/homepage/desktop/transfer-fund.webp" alt="" >
        </div>
      </div>
    </div>
  </div>
</div>

</div>
        </section>

        <!-- section content begin -->
        <div class="uk-section uk-section-default uk-padding-remove-vertical in-wave-5 in-offset-bottom-30">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-background-contain uk-background-center-right uk-background-image@s"
                        style="background-image: url(img/in-wave-mockup-1.png);">
                        <h1 class="uk-margin-remove-bottom">Start <span class="uk-text-primary">trading</span></h1>
                        <p class="uk-text-lead">on <span class="uk-text-primary">wave</span> mobile app.</p>
                        <p class="uk-margin-small-bottom">Available on multiple platform</p>
                        <div class="uk-flex">
                            <a href="#" class="uk-button in-button-app">
                                <i class="fab fa-google-play"></i>
                                <span class="wrapper">Download from<br><span>Play Store</span></span>
                            </a>
                            <a href="#" class="uk-button in-button-app uk-margin-small-left">
                                <i class="fab fa-apple"></i>
                                <span class="wrapper">Download from<br><span>App Store</span></span>
                            </a>
                            <a href="#" class="uk-button in-button-app uk-margin-small-left uk-visible@m">
                                <i class="fab fa-microsoft"></i>
                                <span class="wrapper">Download from<br><span>Microsoft Store</span></span>
                            </a>
                        </div>
                    </div>
                    <div class="uk-width-1-1 in-price-list">
                        <div data-uk-slider="autoplay: true; autoplay-interval: 5000">
                            <ul class="uk-slider-items uk-child-width-1-3@s uk-child-width-1-5@m uk-text-small uk-text-center"
                                data-uk-grid>
                                <li>
                                    <span>XAUUSD</span>
                                    <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-up"></i> 1478.81  (+0.28%)</span>
                                </li>
                                <li>
                                    <span>GBPUSD</span>
                                    <span class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-down"></i> 1.3191  (-1.07%)</span>
                                </li>
                                <li>
                                    <span>EURUSD</span>
                                    <span class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-down"></i> 1.1159  (-0.11%)</span>
                                </li>
                                <li>
                                    <span>USDJPY</span>
                                    <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-up"></i> 109.59  (+0.05%)</span>
                                </li>
                                <li>
                                    <span>USDCAD</span>
                                    <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-up"></i> 1.3172  (+0.18%)</span>
                                </li>
                                <li>
                                    <span>USDCHF</span>
                                    <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-up"></i> 0.9776  (+0.06%)</span>
                                </li>
                                <li>
                                    <span>AUDUSD</span>
                                    <span class="uk-label uk-label-danger uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-down"></i> 0.67064  (-0.08%)</span>
                                </li>
                                <li>
                                    <span>GBPJPY</span>
                                    <span class="uk-label uk-label-success uk-border-pill uk-margin-small-left"><i
                                            class="fas fa-caret-up"></i> 141.91  (+0.12%)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  let currentStep = 1;
  const totalSteps = 3;
  let autoSlideInterval;

  function goToStep(stepId) {
    if(stepId === currentStep) return;

    // update left side 
    document.querySelectorAll(".step-box").forEach(s => {
      s.classList.remove("active");
      s.classList.add("inactive");
    });
    let newStep = document.querySelector(`.step-box[data-step="${stepId}"]`);
    newStep.classList.add("active");
    newStep.classList.remove("inactive");

    // animate right content
    let oldTab = document.querySelector("#step"+currentStep);
    let newTab = document.querySelector("#step"+stepId);

    oldTab.classList.remove("active");
    oldTab.classList.add("exit-left");

    setTimeout(() => {
      oldTab.classList.remove("exit-left");
    }, 600);

    newTab.classList.add("active");

    currentStep = stepId;
  }

  // click event
  document.querySelectorAll(".step-box").forEach(step => {
    step.addEventListener("click", () => {
      let stepId = parseInt(step.getAttribute("data-step"));
      goToStep(stepId);

      // reset auto-slide when user clicks
      resetAutoSlide();
    });
  });

  // auto slide function
  function autoSlide() {
    let nextStep = currentStep + 1;
    if(nextStep > totalSteps) nextStep = 1;
    goToStep(nextStep);
  }

  function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(autoSlide, 4000); // 4 sec delay
  }

  // start auto-slide
  resetAutoSlide();
</script>

<script>
  // Init Swiper
  var swiper = new Swiper(".proposal-slider", {
    slidesPerView: 3,
    spaceBetween: 20,
    slidesPerGroup: 1,
    loop: true,
    pagination: { el: ".swiper-pagination", clickable: true },
    navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
  });

  // Click Event: Update Hero Card
  document.querySelectorAll(".proposal-card").forEach(card => {
    card.addEventListener("click", function() {
      document.getElementById("hero-card").style.backgroundImage = `url(${this.dataset.bg})`;
      document.getElementById("hero-title").textContent = this.dataset.title;
      document.getElementById("hero-investment").innerHTML = `<strong>Minimum Investment:</strong> ${this.dataset.investment}`;
      document.getElementById("hero-roi").innerHTML = `<strong>Return on Investment:</strong> ${this.dataset.roi}`;
      document.getElementById("hero-period").innerHTML = `<strong>Period of Investment:</strong> ${this.dataset.period}`;
    });
  });
</script>
    <script>
        AOS.init();
    </script>
@endsection