<x-Site.template>

	<section id="bricks">

		<div class="row masonry">

			<!-- brick-wrapper -->
			<div class="bricks-wrapper">

				<div class="grid-sizer"></div>

				<article class="brick entry format-standard animate-this">

					<div class="entry-thumb">
						<a href="single-standard.html" class="thumb-link">
							<img src="images/thumbs/diagonal-building.jpg" alt="building">
						</a>
					</div>

					<div class="entry-text">
						<div class="entry-header">

							<div class="entry-meta">
								<span class="cat-links">
									<a href="#">Design</a>
									<a href="#">Photography</a>
								</span>
							</div>

							<h1 class="entry-title"><a href="single-standard.html">Just a Standard Format Post.</a></h1>

						</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
							proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
							incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
					</div>

				</article> <!-- end article -->

				@foreach ($blogs as $blog)
					<article class="brick entry format-standard animate-this">

						@if ($blog->getFirstMediaUrl('blog_cover') != "")	
							<div class="entry-thumb">
								<a href="{{ route('blog.show', $blog->id) }}" class="thumb-link">
									<img src="{{ $blog->getFirstMediaUrl('blog_cover') }}" alt="building">
								</a>
							</div>
						@endif

						<div class="entry-text">
							<div class="entry-header">

								<div class="entry-meta">
									<span class="cat-links">
										<a href="#">Design</a>
										<a href="#">Photography</a>
									</span>
								</div>

								<h1 class="entry-title"><a href="{{ route('blog.show', $blog->id) }}">{{ $blog->title }}</a></h1>

							</div>
							<div class="entry-excerpt">
								{{ $blog->content }}
							</div>
						</div>

					</article> <!-- end article -->
				@endforeach

				{{-- <!-- format audio here -->
				<article class="brick entry format-audio animate-this">

					<div class="entry-thumb">
						<a href="single-audio.html" class="thumb-link">
							<img src="images/thumbs/concert.jpg" alt="concert">
						</a>

						<div class="audio-wrap">
							<audio id="player" src="media/AirReview-Landmarks-02-ChasingCorporate.mp3" width="100%"
								height="42" controls="controls"></audio>
						</div>
					</div>

					<div class="entry-text">
						<div class="entry-header">

							<div class="entry-meta">
								<span class="cat-links">
									<a href="#">Design</a>
									<a href="#">Music</a>
								</span>
							</div>

							<h1 class="entry-title"><a href="single-audio.html">This Is a Audio Format Post.</a></h1>

						</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
							proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
							incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
					</div>

				</article> <!-- /article --> --}}

				<article class="brick entry format-quote animate-this">

					<div class="entry-thumb">
						<blockquote>
							<p>Good design is making something intelligible and memorable. Great design is making
								something memorable and meaningful.</p>

							<cite>Dieter Rams</cite>
						</blockquote>
					</div>

				</article> <!-- end article -->

				{{-- <article class="brick entry format-video animate-this">

					<div class="entry-thumb video-image">
						<a href="http://player.vimeo.com/video/14592941?title=0&amp;byline=0&amp;portrait=0&amp;color=F64B39"
							data-lity>
							<img src="images/thumbs/ottawa-bokeh.jpg" alt="bokeh">
						</a>
					</div>

					<div class="entry-text">
						<div class="entry-header">

							<div class="entry-meta">
								<span class="cat-links">
									<a href="#">Design</a>
									<a href="#">Branding</a>
								</span>
							</div>

							<h1 class="entry-title"><a href="single-video.html">This Is a Video Post Format.</a></h1>

						</div>
						<div class="entry-excerpt">
							Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit
							proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute
							incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
						</div>
					</div>

				</article> <!-- end article --> --}}

			</div> <!-- end brick-wrapper -->

		</div> <!-- end row -->

		<div class="row">

			<nav class="pagination">
				<span class="page-numbers prev inactive">Prev</span>
				<span class="page-numbers current">1</span>
				<a href="#" class="page-numbers">2</a>
				<a href="#" class="page-numbers">3</a>
				<a href="#" class="page-numbers">4</a>
				<a href="#" class="page-numbers">5</a>
				<a href="#" class="page-numbers">6</a>
				<a href="#" class="page-numbers">7</a>
				<a href="#" class="page-numbers">8</a>
				<a href="#" class="page-numbers">9</a>
				<a href="#" class="page-numbers next">Next</a>
			</nav>

		</div>

	</section> <!-- end bricks -->

</x-Site.template>