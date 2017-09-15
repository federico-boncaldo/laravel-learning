@extends ('layouts.master')

@section ('content')
 	<div class="col-sm-8 blog-main">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		<hr/>
		<div class="comments">
			@foreach ($post->comments as $comment)
				<article>
					<strong>{{ $comment->created_at->diffForHumans() }}:</strong> {{ $comment->body }}
				</article>
			@endforeach
		</div>

		<hr/>

		<div class="card">
			<div class="card-block">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea name="body" placeholder="Your comment here." class="form-control" required></textarea>
					</div>

					<div class="form-group">
		  				<button type="submit" class="btn btn-primary">Add comment</button>
					</div>
				</form>
			</div>
		</div>

		@include('layouts.errors')

	</div>
@endsection('content')