@extends('front.layouts.app')

@section('title')
	Blog
@endsection
@section('pagetitle')
blog
@stop
@section('content')

	<main data-title="blog">
		<!-- blog content begin -->
		<div class="uk-section uk-margin-small-top">
			<div class="uk-container">
				<div class="uk-grid" data-uk-grid>
					<div class="uk-width-2-3@m">
						<div class="in-blog-1" data-uk-grid>
							@if($blogs->count())
								@foreach($blogs as $blog)
									<div class="in-stretch">
										<article class="uk-card uk-card-default uk-border-rounded">
											<div class="uk-card-media-top">
												<img src="{{ asset('storage/blogs/' . $blog->image) }}"
													alt="The typical U.S. household is spending $445 more a month due to inflation">
											</div>
											<div class="uk-card-body">
												<h3>
													<a href={{ route('blog.details', $blog->url) }}
														class="link-primary text-decoration-none">{{ $blog->title }}</a>
												</h3>
												<p>{{ Str::limit(strip_tags($blog->short_description), 150) }}
												</p>
												<div class="uk-flex">
													<div class="uk-margin-small-right">
														<!-- <img class="uk-border-pill uk-background-muted"
																											src="https://www.indonez.com/html-demo/wave/img/user/author-85z9UC.jpg"
																											alt="image-team" width="32" height="32"> -->
													</div>
													<div class="uk-flex uk-flex-middle">
														<p class="uk-text-small uk-text-muted uk-margin-remove">
															{{ $blog->author ?? 'Admin' }}
															<span class="uk-margin-small-left uk-margin-small-right">•</span>
														</p>
													</div>
													<div class="uk-flex uk-flex-middle">
														<p class="uk-text-small uk-text-muted uk-margin-remove">
															{{ \Carbon\Carbon::parse($blog->publish_date)->format('F d, Y') }}

														</p>
													</div>
												</div>
											</div>
											<div class="uk-card-footer uk-clearfix">
												<div class="uk-float-left">
													<span class="uk-label in-label-small">{{ $blog->blogCategory->name}}</span>
												</div>
												<div class="uk-float-right">
													<a href={{ route('blog.details', $blog->url) }}
														class="uk-button uk-button-text">Read more</a>
												</div>
											</div>
										</article>
									</div>

								@endforeach

							@endif
						</div>
						<!-- pagination begin -->
						@if ($blogs->lastPage() > 1)
							<div class="pagination-block">
								{{-- Previous Page Link --}}
								@if ($blogs->onFirstPage())
									<span class="page-numbers disabled"><i class="icon-arrow-left"></i></span>
								@else
									<a class="page-numbers prev" href="{{ $blogs->previousPageUrl() }}"><i
											class="icon-arrow-left"></i></a>
								@endif

								{{-- Pagination Elements --}}
								@for ($i = 1; $i <= $blogs->lastPage(); $i++)
									@if ($i == $blogs->currentPage())
										<span class="page-numbers current">{{ $i }}</span>
									@else
										<a class="page-numbers" href="{{ $blogs->url($i) }}">{{ $i }}</a>
									@endif
								@endfor

								{{-- Next Page Link --}}
								@if ($blogs->hasMorePages())
									<a class="page-numbers next" href="{{ $blogs->nextPageUrl() }}"><i
											class="icon-arrow-right"></i></a>
								@else
									<span class="page-numbers disabled"><i class="icon-arrow-right"></i></span>
								@endif
							</div>
						@endif
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
									@foreach($categories as $category)
										<li>
											<a href="{{ route('blog.category', $category->url) }}">
												{{ $category->name }}
											</a>
										</li>
									@endforeach
								</ul>
							</div>
						</aside>
						<!-- widget categories end -->
						<!-- widget lates begin -->
						<aside class="uk-margin-medium-bottom">
							<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
								<h5 class="uk-heading-bullet uk-text-uppercase uk-margin-remove-bottom">Latest News</h5>
								<ul class="uk-list uk-list-divider uk-list-large widget-latest">
									@foreach($trendingPosts as $post)
										<li>
											<div class="post-img">
												<img width="80" height="80" src="{{ asset('storage/blogs/' . $post->image) }}"
													alt="{{ $post->image_alt }}">
											</div>
											<div class="post-detail">
												<span class="post-date">
													{{ \Carbon\Carbon::parse($post->publish_date)->format('F d, Y') }}
												</span>
												<a href="{{ route('blog.details', $post->url) }}">
													{{ \Illuminate\Support\Str::limit($post->title, 40) }}
												</a>
											</div>
										</li>
									@endforeach
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

@endsection