@extends('front.layouts.app')

@section('title')
    Homepage 2
@endsection
@section('content')

<main>
		<!-- slideshow content begin -->
		<div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
			<div class="in-slideshow" data-uk-slideshow>
				<ul class="uk-slideshow-items uk-light">
					<li>
						<div class="uk-position-cover">
							<img src="{{ asset('front_assets') }}/img/in-lazy.gif" data-src="{{ asset('front_assets') }}/img/in-slideshow-image-2.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
						</div>
						<span></span>
						<div class="uk-container">
							<div class="uk-grid" data-uk-grid>
								<div class="uk-width-3-5@m">
									<div class="uk-overlay">
										<h1>One of The Best Global Commodities Broker</h1>
										<p class="uk-text-lead uk-visible@m">A trusted destination for traders worldwide, Start your investment journey with the best opportunity.</p>
										<a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="uk-position-cover">
							<img src="{{ asset('front_assets') }}/img/in-lazy.gif" data-src="{{ asset('front_assets') }}/img/in-slideshow-image-3.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
						</div>
						<span></span>
						<div class="uk-container">
							<div class="uk-grid" data-uk-grid>
								<div class="uk-width-3-5@m">
									<div class="uk-overlay">
										<h1>Award-winning Products and Trading platforms</h1>
										<p class="uk-text-lead uk-visible@m">Tap into the world's markets and explore endless trading opportunities with tight spreads and no commission.</p>
										<a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="uk-position-cover">
							<img src="{{ asset('front_assets') }}/img/in-lazy.gif" data-src="{{ asset('front_assets') }}/img/in-slideshow-image-4.jpg" alt="slideshow-image" data-uk-cover width="1920" height="700" data-uk-img>
						</div>
						<span></span>
						<div class="uk-container">
							<div class="uk-grid" data-uk-grid>
								<div class="uk-width-3-5@m">
									<div class="uk-overlay">
										<h1>Your First Steps into the Financial Markets</h1>
										<p class="uk-text-lead uk-visible@m">A range of cutting-edge educational tools designed to develop your trading skills of the financial markets.</p>
										<a href="#" class="uk-button uk-button-primary uk-border-rounded uk-visible@m"><i class="fas fa-scroll uk-margin-small-right"></i>Discover it now</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="uk-container uk-light">
					<ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-center"></ul>
				</div>
			</div>
		</div>
		<!-- slideshow content end -->
		<!-- section content begin -->
		<div class="uk-section in-offset-bottom-40 in-wave-6">
			<div class="uk-container">
				<div class="uk-grid-collapse uk-position-relative" data-uk-grid>
					<div class="uk-position-bottom-right">
						<img src="{{ asset('front_assets') }}/img/in-wave-background-2.png" alt="wave-hq" width="540" height="513">
					</div>
					<div class="uk-width-1-1">
						<h1>Join a club of more than <span class="in-highlight">480,000</span> traders</h1>
					</div>
					<div class="uk-width-3-5@m">
						<div class="uk-grid-medium uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top uk-margin-medium-bottom" data-uk-grid>
							<div>
								<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
											<i class="fas fa-award fa-2x"></i>
										</div>
										<div>
											<h4 class="uk-margin-remove">Best reputation</h4>
										</div>
									</div>
									<p class="uk-margin-small-top">Adipisci sed quia numquam eius modi tempora incidunt ut labore et dolore consequuntur magni dolores.</p>
								</div>
							</div>
							<div>
								<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
											<i class="fas fa-tools fa-2x"></i>
										</div>
										<div>
											<h4 class="uk-margin-remove">Advanced tools</h4>
										</div>
									</div>
									<p class="uk-margin-small-top">Adipisci sed quia numquam eius modi tempora incidunt ut labore et dolore consequuntur magni dolores.</p>
								</div>
							</div>
							<div>
								<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
											<i class="fas fa-users fa-2x"></i>
										</div>
										<div>
											<h4 class="uk-margin-remove">480,000+ clients</h4>
										</div>
									</div>
									<p class="uk-margin-small-top">Adipisci sed quia numquam eius modi tempora incidunt ut labore et dolore consequuntur magni dolores.</p>
								</div>
							</div>
							<div>
								<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
									<div class="uk-flex uk-flex-middle">
										<div class="in-icon-wrap small transparent uk-text-primary uk-margin-small-right">
											<i class="fas fa-building fa-2x"></i>
										</div>
										<div>
											<h4 class="uk-margin-remove">Worldwide office</h4>
										</div>
									</div>
									<p class="uk-margin-small-top">Adipisci sed quia numquam eius modi tempora incidunt ut labore et dolore consequuntur magni dolores.</p>
								</div>
							</div>
						</div>
						<p class="uk-text-small uk-text-muted uk-margin-large-bottom">
							<span class="uk-label in-label-small uk-text-uppercase uk-margin-small-right">Start trade</span>
							Lorem ipsum dolor sit amet consectetur adipisicing reprehen elit. <a href="#">Join now!</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section uk-section-muted uk-background-cover uk-background-center-center in-wave-7" style="background-image: url({{ asset('front_assets') }}/img/in-wave-background-3.jpg);">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-4@m">
						<h4 class="uk-text-primary uk-margin-remove-bottom">Trade with confidence</h4>
						<h1 class="uk-margin-small-top uk-margin-remove-bottom">New level of <span class="in-highlight">security</span></h1>
						<div class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
							<div>
								<img class="uk-margin-remove-bottom" src="{{ asset('front_assets') }}/img/in-wave-icon-8.svg" alt="wave-icon" width="64" height="64">
								<h3 class="uk-margin-small-top">Trusted and credible</h3>
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet voluptates repudiandae sint molestiae non recusandae.</p>
							</div>
							<div>
								<img class="uk-margin-remove-bottom" src="{{ asset('front_assets') }}/img/in-wave-icon-9.svg" alt="wave-icon" width="64" height="64">
								<h3 class="uk-margin-small-top">Depth of protection</h3>
								<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet voluptates repudiandae sint molestiae non recusandae.</p>
							</div>
						</div>
						<div class="in-create-account uk-margin-medium-top">
							<span class="uk-label in-label-small uk-text-uppercase uk-margin-small-bottom">Open your account</span>
							<p class="uk-margin-remove-top uk-visible@m">Connect with over 5 millions investors in the world’s leading social investment network</p>
							<form class="uk-grid-small" data-uk-grid>
								<div class="uk-width-1-1 uk-width-1-4@m">
									<input class="uk-input uk-border-rounded" type="text" placeholder="Full name">
								</div>
								<div class="uk-width-1-1 uk-width-1-4@m">
									<input class="uk-input uk-border-rounded" type="text" placeholder="Email address">
								</div>
								<div class="uk-width-1-1 uk-width-1-4@m">
									<input class="uk-input uk-border-rounded" type="text" placeholder="Phone number">
								</div>
								<div class="uk-width-1-1 uk-width-1-4@m">
									<button class="uk-button uk-button-primary uk-border-rounded uk-width-expand">Create Account</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section in-wave-8">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-5@m uk-text-center">
						<h1 class="uk-margin-remove">Up to the minute <span class="in-highlight">analysis</span></h1>
						<p class="uk-text-muted uk-margin-small-top uk-margin-medium-bottom">Inform your decisions with timely dispatches from our large team of global analysts.</p>
					</div>
					<div class="uk-width-1-1">
						<div class="uk-grid-large uk-child-width-1-2@m" data-uk-grid>
							<div>
								<ul class="uk-list uk-list-divider in-front-news">
									<li>
										<div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
											<div class="uk-width-auto">
												<img class="uk-border-rounded" src="{{ asset('front_assets') }}/img/in-widget-image-1.jpg" alt="sample-image" width="94" height="94">
											</div>
											<div class="uk-width-expand uk-margin-medium-left">
												<a href="#">
													<span class="uk-text-lead uk-display-block uk-margin-small-bottom">​Bank of England rate preview: markets expecting QE expansion​</span>
												</a>
												<span class="uk-article-meta uk-text-small"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Wednesday 17 June 2020 16:25</span>
											</div>
										</div>
									</li>
									<li>
										<div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
											<div class="uk-width-auto">
												<img class="uk-border-rounded" src="{{ asset('front_assets') }}/img/in-widget-image-2.jpg" alt="sample-image" width="94" height="94">
											</div>
											<div class="uk-width-expand uk-margin-medium-left">
												<a href="#">
													<span class="uk-text-lead uk-display-block uk-margin-small-bottom">​EUR/USD, GBP/USD, and AUD/USD finding support after recent declines​</span>
												</a>
												<span class="uk-article-meta uk-text-small"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Wednesday 17 June 2020 16:11</span>
											</div>
										</div>
									</li>
									<li>
										<div class="uk-grid-collapse uk-flex uk-flex-middle" data-uk-grid>
											<div class="uk-width-auto">
												<img class="uk-border-rounded" src="{{ asset('front_assets') }}/img/in-widget-image-3.jpg" alt="sample-image" width="94" height="94">
											</div>
											<div class="uk-width-expand uk-margin-medium-left">
												<a href="#">
													<span class="uk-text-lead uk-display-block uk-margin-small-bottom">​Where next for the SPH share price after being dropped by STI Index?​</span>
												</a>
												<span class="uk-article-meta uk-text-small"><i class="fas fa-clock fa-sm uk-margin-small-right"></i>Wednesday 17 June 2020 15:15</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div>
								<div class="uk-card uk-card-default uk-border-rounded">
									<div class="uk-card-body">
										<div id="tradingview-widget"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section in-wave-9">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-4@m">
						<div class="uk-grid-large uk-child-width-1-2@s uk-child-width-1-2@m uk-flex uk-flex-middle" data-uk-grid>
							<div>
								<img src="{{ asset('front_assets') }}/img/in-wave-mockup-2.png" alt="wave-mockup" width="395" height="509">
							</div>
							<div>
								<h2 class="uk-margin-remove-bottom in-offset-top-50">Metatrader 5</h2>
								<p class="uk-text-lead uk-text-muted uk-margin-remove-top">for mobile</p>
								<p class="uk-margin-medium-bottom">Lorem ipsum dolor sit amet consectet adipiscing elite, sed do eiusmod tempor incididunt laboremi dolore magna aliqua quia numquam eius modi.</p>
								<div class="uk-flex">
									<a href="#" class="uk-button in-button-app">
										<i class="fab fa-google-play"></i>
										<span class="wrapper">Download from<br><span>Play Store</span></span>
									</a>
									<a href="#" class="uk-button in-button-app uk-margin-small-left">
										<i class="fab fa-apple"></i>
										<span class="wrapper">Download from<br><span>App Store</span></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section uk-section-primary in-wave-10 in-offset-bottom-30">
			<div class="uk-container">
				<div class="uk-grid uk-position-relative uk-flex uk-flex-middle">
					<div class="uk-position-bottom-right">
						<img src="{{ asset('front_assets') }}/img/in-wave-background-4.svg" alt="wave-hq" width="500" height="189">
					</div>
					<div class="uk-width-auto@m uk-text-center">
						<img src="{{ asset('front_assets') }}/img/in-wave-icon-10.svg" alt="wave-icon" width="96" height="96">
					</div>
					<div class="uk-width-3-5@m">
						<h2 class="uk-margin-remove-bottom">Financial strength you can depend on</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae et quasi architecto. <a class="uk-text-small uk-text-uppercase uk-margin-small-left" href="#">Learn more<i class="fas fa-long-arrow-alt-right fa-sm uk-margin-small-left"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>

@endsection