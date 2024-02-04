<x-Site.template>
    @section('styles')
        <style>
            .create {
                margin-top: 3rem;
                display: inline-block;
            }

            .alert {
                float: right;
                margin: 1rem;
            }
        </style>
    @endsection
    <div class="row">
        @if (auth()->id() === $userId)    
        <div class="create">
            <a class="button button-primary full-width-on-mobile" href="{{ route('blog.create') }}">Create New Blog</a>
        </div>
        @endif
        @if (session('sucss'))
            <div class="alert alert-box ss-success hideit">
                <p>{{ session('sucss') }}</p>
                <i class="fa fa-times close"></i>
            </div><!-- /success -->
        @endif
        @if (session('fail'))
            <div class="alert alert-box ss-error hideit">
                <p>{{ session('fail') }}</p>
                <i class="fa fa-times close"></i>
            </div><!-- /error -->
        @endif
    </div>
    <section id="bricks">

		<div class="row masonry">

			<!-- brick-wrapper -->
			<div class="bricks-wrapper">

				<div class="grid-sizer"></div>

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
								{!! $blog->content !!}
							</div>
						</div>

					</article> <!-- end article -->
				@endforeach

            </div>
        </div>
    </section>
</x-Site.template>
