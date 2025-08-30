

<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="site-main">
    <div class="sidebar prt-sidebar-right prt-blog bg-base-grey clearfix">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-8 content-area">
                    <article class="prt-blog-single">
                        <div class="prt-post-featured-wrapper prt-featured-wrapper">
                            <div class="prt-post-featured">
                                <img class="img-fluid" src="<?php echo e(asset('storage/blogs/' . $blog->image)); ?>" alt="<?php echo e($blog->image_alt); ?>">
                            </div>
                        </div>
                        <div class="prt-blog-single-content">
                            <div class="prt-post-entry-header">
                                <div class="post-meta">
                                    <span class="prt-meta-line">
                                        <i class="fa fa-user"></i> <?php echo e($blog->author ?? 'Admin'); ?>

                                    </span>
                                    <span class="prt-meta-line">
                                        <i class="fa fa-calendar"></i> <?php echo e(\Carbon\Carbon::parse($blog->publish_date)->format('F d, Y')); ?>

                                    </span>
                                    <span class="prt-meta-line">
                                        <i class="fa fa-folder-open"></i> <?php echo e($blog->blogCategory->name ?? ''); ?>

                                    </span>
                                </div>
                                <h2 class="entry-title"><?php echo e($blog->title); ?></h2>
                            </div>
                            <div class="entry-content">
                                <?php echo $blog->content; ?>

                            </div>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 widget-area sidebar-right">
                    <div class="prt-blog-sidebar-content">
                        
                        <aside class="widget widget-search with-title">
                            <h3 class="widget-title">Search</h3>
                            <form class="search-form">
                                <input type="search" class="input-text" placeholder="Search …" name="s">
                                <button class="btn prt-btn" type="submit"></button>
                            </form>
                        </aside>

                        
                        <?php if($categories->count()): ?>
                            <aside class="widget widget-categories with-title">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="#"><?php echo e($category->name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </aside>
                        <?php endif; ?>

                        
                        <aside class="widget widget-recent-post with-title">
                            <h3 class="widget-title">Trending Posts</h3>
                            <ul class="widget-post prt-recent-post-list">
                                <?php $__currentLoopData = $trendingPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="post-img">
                                            <img src="<?php echo e(asset('storage/blogs/' . $post->image)); ?>" width="80" height="80" alt="<?php echo e($post->image_alt); ?>">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-mingo-project\gains-and-wells\resources\views/front/blog-details.blade.php ENDPATH**/ ?>