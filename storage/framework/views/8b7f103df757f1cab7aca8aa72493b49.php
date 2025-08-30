

<?php $__env->startSection('title'); ?>
Blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!--site-main start-->
<div class="site-main">

    <!--sidebar-->
    <div class="sidebar prt-sidebar-right prt-blog bg-base-grey clearfix">
        <div class="container">
            <!-- row -->
            <div class="row g-0">
                <div class="col-lg-8 content-area prt-blog-classic">
                    <div class="prt-blog-classic-content">
                        <div class="row">
                            <?php if($blogs->count()): ?>
    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-12">
            <div class="featured-imagebox featured-imagebox-blog style4">
                <div class="row g-0 row-equal-height">
                    <div class="col-sm-4">                                    
                      <div class="prt-bg prt-col-bgimage-yes spacing-8" 
     style="background-image: url('<?php echo e(asset('storage/blogs/' . $blog->image)); ?>'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat;
            min-height: 200px;">


                            <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                            <div class="layer-content">
                                <div class="prt-box-post-date">
                                    <span><?php echo e(\Carbon\Carbon::parse($blog->publish_date)->format('d')); ?></span>
                                    <label><?php echo e(\Carbon\Carbon::parse($blog->publish_date)->format('M')); ?></label>
                                </div>
                            </div>
                        </div>                                       
                    </div>
                    <div class="col-sm-8">
                        <div class="featured-content">
                            <div class="post-meta">
                                <a href="<?php echo e(route('blogs')); ?>">
                                    <span><?php echo e($blog->author ?? 'Admin'); ?></span>
                                </a>
                                <a href="<?php echo e(route('blogs')); ?>">
                                    <span>0 comments</span>
                                </a>
                            </div>
                            <div class="featured-title">
                                <h3><a href="#"><?php echo e($blog->title); ?></a></h3>
                            </div>
                            <div class="prt-horizontal_sep"></div>
                            <div class="featured-desc">
                                <p><?php echo e(Str::limit(strip_tags($blog->short_description), 150)); ?></p>
                            </div>
                            <div class="featured-bottom">
                                <a class="prt-btn btn-inline prt-btn-color-dark" href="<?php echo e(route('blog.details', $blog->url)); ?>">View More</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php endif; ?>
                          <?php if($blogs->lastPage() > 1): ?>
    <div class="pagination-block">
        
        <?php if($blogs->onFirstPage()): ?>
            <span class="page-numbers disabled"><i class="icon-arrow-left"></i></span>
        <?php else: ?>
            <a class="page-numbers prev" href="<?php echo e($blogs->previousPageUrl()); ?>"><i class="icon-arrow-left"></i></a>
        <?php endif; ?>

        
        <?php for($i = 1; $i <= $blogs->lastPage(); $i++): ?>
            <?php if($i == $blogs->currentPage()): ?>
                <span class="page-numbers current"><?php echo e($i); ?></span>
            <?php else: ?>
                <a class="page-numbers" href="<?php echo e($blogs->url($i)); ?>"><?php echo e($i); ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        
        <?php if($blogs->hasMorePages()): ?>
            <a class="page-numbers next" href="<?php echo e($blogs->nextPageUrl()); ?>"><i class="icon-arrow-right"></i></a>
        <?php else: ?>
            <span class="page-numbers disabled"><i class="icon-arrow-right"></i></span>
        <?php endif; ?>
    </div>
<?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 widget-area sidebar-right">	                        	
                    <div class="prt-blog-sidebar-content">
                        <aside class="widget widget-search with-title">
                            <h3 class="widget-title">Search</h3>
                            <form role="search" method="get" class="search-form" action="#">
                                <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <button class="btn prt-btn prt-btn-size-md prt-btn-shape-square prt-btn-style-fill prt-btn-color-skin" type="submit"></button>
                            </form>
                        </aside>
                        <?php if($categories->count()): ?>
  <aside class="widget widget-categories with-title">
                                          <h3 class="widget-title">Categories</h3>

        <ul>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="#">
                        <?php echo e($category->name); ?>

                    </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </aside>  
<?php else: ?>
    <p>No categories available.</p>
<?php endif; ?>

                    
                      <aside class="widget widget-recent-post with-title">
    <h3 class="widget-title">Trending Posts</h3>
    <ul class="widget-post prt-recent-post-list">
        <?php $__currentLoopData = $trendingPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="post-img">
                    <img width="80" height="80" 
                         src="<?php echo e(asset('storage/blogs/' . $post->image)); ?>" 
                         alt="<?php echo e($post->image_alt); ?>">
                </div>
                <div class="post-detail"> 
                    <span class="post-date">
                        <?php echo e(\Carbon\Carbon::parse($post->publish_date)->format('F d, Y')); ?>

                    </span>   
                    <a href="<?php echo e(route('blog.details', $post->url)); ?>">
    <?php echo e(\Illuminate\Support\Str::limit($post->title, 40)); ?>

</a>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</aside>

                       
                        <aside class="widget widget-banner">	                                
                            <div class="prt_single_image-wrapper">
                                <img width="1024" height="686" class="img-fluid" src="<?php echo e(asset('assets/images/single-img-11.png')); ?>" alt="single-img-11">
                            </div>
                        </aside>
                        <aside class="widget widget-contact-info with-title">
                            <h3 class="widget-title">Contact-info</h3>
                            <div class="widget-contact">
                                <div class="featured-icon-box featured-icon-box-widget">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-sm">
                                            <i class="flaticon-location"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Address :</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Gr. Floor, B/87/1, Sammilani Park, Santoshpur Survey Park, Kolkata – 700 075, WB, INDIA</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-icon-box featured-icon-box-widget">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-sm">
                                            <i class="flaticon-call"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Call Us :</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p><a href="tel:+916291033761">+  91-62910 33761</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="featured-icon-box featured-icon-box-widget">
                                    <div class="featured-icon">
                                        <div class="prt-icon prt-icon_element-onlytxt prt-icon_element-size-sm">
                                            <i class="flaticon-email"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3>Email :</h3>
                                        </div>
                                        <div class="featured-desc">
                                            <p><a href="mailto:info@indcorp.com">info@indcorp.com</a></p>
                                        </div>
                                    </div>
                                </div>	                                    
                            </div>
                        </aside>
                    </div>
                </div>	                    
            </div><!-- row end -->
        </div>
    </div>
    <!--sidebar end-->

</div><!-- site-main end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.common', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/overseasconsulta/public_html/indcorp/resources/views/front/blog.blade.php ENDPATH**/ ?>