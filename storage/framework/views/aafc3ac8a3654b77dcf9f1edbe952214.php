

<?php $__env->startSection('title'); ?>
	Blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pagetitle'); ?>
blog
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<main data-title="blog">
		<!-- blog content begin -->
		<div class="uk-section uk-margin-small-top">
			<div class="uk-container">
				<div class="uk-grid" data-uk-grid>
					<div class="uk-width-2-3@m">
						<div class="in-blog-1" data-uk-grid>
							<?php if($blogs->count()): ?>
								<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<div class="in-stretch">
										<article class="uk-card uk-card-default uk-border-rounded">
											<div class="uk-card-media-top">
												<img src="<?php echo e(asset('storage/blogs/' . $blog->image)); ?>"
													alt="The typical U.S. household is spending $445 more a month due to inflation">
											</div>
											<div class="uk-card-body">
												<h3>
													<a href=<?php echo e(route('blog.details', $blog->url)); ?>

														class="link-primary text-decoration-none"><?php echo e($blog->title); ?></a>
												</h3>
												<p><?php echo e(Str::limit(strip_tags($blog->short_description), 150)); ?>

												</p>
												<div class="uk-flex">
													<div class="uk-margin-small-right">
														<!-- <img class="uk-border-pill uk-background-muted"
																											src="https://www.indonez.com/html-demo/wave/img/user/author-85z9UC.jpg"
																											alt="image-team" width="32" height="32"> -->
													</div>
													<div class="uk-flex uk-flex-middle">
														<p class="uk-text-small uk-text-muted uk-margin-remove">
															<?php echo e($blog->author ?? 'Admin'); ?>

															<span class="uk-margin-small-left uk-margin-small-right">•</span>
														</p>
													</div>
													<div class="uk-flex uk-flex-middle">
														<p class="uk-text-small uk-text-muted uk-margin-remove">
															<?php echo e(\Carbon\Carbon::parse($blog->publish_date)->format('F d, Y')); ?>


														</p>
													</div>
												</div>
											</div>
											<div class="uk-card-footer uk-clearfix">
												<div class="uk-float-left">
													<span class="uk-label in-label-small"><?php echo e($blog->blogCategory->name); ?></span>
												</div>
												<div class="uk-float-right">
													<a href=<?php echo e(route('blog.details', $blog->url)); ?>

														class="uk-button uk-button-text">Read more</a>
												</div>
											</div>
										</article>
									</div>

								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php endif; ?>
						</div>
						<!-- pagination begin -->
						<?php if($blogs->lastPage() > 1): ?>
							<div class="pagination-block">
								
								<?php if($blogs->onFirstPage()): ?>
									<span class="page-numbers disabled"><i class="icon-arrow-left"></i></span>
								<?php else: ?>
									<a class="page-numbers prev" href="<?php echo e($blogs->previousPageUrl()); ?>"><i
											class="icon-arrow-left"></i></a>
								<?php endif; ?>

								
								<?php for($i = 1; $i <= $blogs->lastPage(); $i++): ?>
									<?php if($i == $blogs->currentPage()): ?>
										<span class="page-numbers current"><?php echo e($i); ?></span>
									<?php else: ?>
										<a class="page-numbers" href="<?php echo e($blogs->url($i)); ?>"><?php echo e($i); ?></a>
									<?php endif; ?>
								<?php endfor; ?>

								
								<?php if($blogs->hasMorePages()): ?>
									<a class="page-numbers next" href="<?php echo e($blogs->nextPageUrl()); ?>"><i
											class="icon-arrow-right"></i></a>
								<?php else: ?>
									<span class="page-numbers disabled"><i class="icon-arrow-right"></i></span>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<!-- pagination end -->
					</div>
					<div class="uk-width-expand@m">
						<!-- widget search begin -->
						<aside class="uk-margin-medium-bottom">
							<form name="blog-search" class="uk-search uk-search-default uk-width-1-1">
								<a href="#" class="uk-search-icon-flip" data-uk-search-icon></a>
								<input class="uk-input uk-border-rounded" type="search" placeholder="Search here...">
							</form>
						</aside>
						<!-- widget search end -->
						<!-- widget categories begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Categories</h5>
								<ul class="uk-list widget-categories">
									<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<a href="<?php echo e(route('blog.category', $category->url)); ?>">
												<?php echo e($category->name); ?>

											</a>
										</li>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</ul>
							</div>
						</aside>
						<!-- widget categories end -->
						<!-- widget lates begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Latest News</h5>
								<ul class="uk-list uk-list-divider uk-list-large widget-latest">
									<?php $__currentLoopData = $trendingPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<li>
											<div class="post-img">
												<img width="80" height="80" src="<?php echo e(asset('storage/blogs/' . $post->image)); ?>"
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
							</div>
						</aside>
						<!-- widget lates end -->
						<!-- widget tags begin -->
						<!-- <aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Tags</h5>
								<div class="uk-margin-top widget-tag"></div>
							</div>
						</aside> -->
						<!-- widget tags end -->
					</div>
				</div>
			</div>
		</div>
		<!-- blog content end -->
	</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\web-mingo-project\gains-and-wells\resources\views/front/blog.blade.php ENDPATH**/ ?>