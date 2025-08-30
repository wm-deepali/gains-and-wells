<?php
$currentslug = Route::current()->getName();
$blogSec = App\Helpers\Helper::isBlogShow($currentslug);
?>
<?php if($blogSec == "yes"): ?>
<section class="prt-row home01-blog-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 m-auto">
                <!--section-title-->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>LATEST NEWS</h3>
                        <h2 class="title">Truvik get more articles from our <br><span>Recources</span> news
                        </h2>
                    </div>
                </div><!--section-title end-->
            </div>
        </div>
        <div class="row g-0 mt_15 res-991-mt-0">
            <div class="col-lg-6 res-1199-pl-15 res-1199-pr-15" data-aos="fade-right">
                <div class="featured-imagebox featured-imagebox-blog style1">
                    <div class="featured-thumbnail">
                        <img width="741" height="680" class="img-fluid" src="<?php echo e(asset('assets/images/recent-post-01.png')); ?>"
                            alt="blog-09">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured-imagebox featured-imagebox-blog style1">
                    <div class="featured-content">
                        <div class="post-meta">
                            <a href="#">
                                <span>Alex</span>
                            </a>
                            <a href="#">
                                <span>0 comments</span>
                            </a>
                        </div>
                        <div class="featured-title">
                            <h3><a href="#">Employment insurance for foreign
                                    nationals</a></h3>
                        </div>
                        <div class="featured-desc">
                            <p>Nunc mi ipsum faucibus vitae. Mauris vitae ultricies leo integer malesuada
                                nunc vel risus commodo. Non blandit massa enim nec dui turpis nunc eget
                                nunc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-12"></div>
            <div class="col-xl-7 col-lg-12" data-aos="fade-left">
                <div class="spacing-9 bg-base-grey position-relative z-index-2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-blog style2">
                                <div class="featured-thumbnail">
                                    <img width="92" height="92" class="img-fluid" src="<?php echo e(asset('assets/images/blog/05.jpg')); ?>"
                                        alt="blog-05">
                                </div>
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="#">
                                            <span>Alex</span>
                                        </a>
                                        <a href="#">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">Employment insurance for
                                                foreign nationals</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-blog style2">
                                <div class="featured-thumbnail">
                                    <img width="92" height="92" class="img-fluid" src="<?php echo e(asset('assets/images/blog/06.jpg')); ?>"
                                        alt="blog-06">
                                </div>
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="#">
                                            <span>Alex</span>
                                        </a>
                                        <a href="#">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">Covid-19 and its impact on UK
                                                immigration</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-blog style2">
                                <div class="featured-thumbnail">
                                    <img width="92" height="92" class="img-fluid" src="<?php echo e(asset('assets/images/blog/07.jpg')); ?>"
                                        alt="blog-07">
                                </div>
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="#">
                                            <span>Alex</span>
                                        </a>
                                        <a href="#">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">How to beat these visa
                                                application tip!</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="featured-imagebox featured-imagebox-blog style2">
                                <div class="featured-thumbnail">
                                    <img width="92" height="92" class="img-fluid" src="<?php echo e(asset('assets/images/blog/08.jpg')); ?>"
                                        alt="blog-08">
                                </div>
                                <div class="featured-content">
                                    <div class="post-meta">
                                        <a href="#">
                                            <span>Alex</span>
                                        </a>
                                        <a href="#">
                                            <span>0 comments</span>
                                        </a>
                                    </div>
                                    <div class="featured-title">
                                        <h3><a href="#">UK to offers point based
                                                immigration process</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?><?php /**PATH /home/ashtonwell/public_html/resources/views/front/layouts/includes/blog-secton.blade.php ENDPATH**/ ?>