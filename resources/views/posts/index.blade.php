@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Blog</h1>
			</div>
		</div>
	</div>
	@if(count($posts) > 1)
		@foreach($posts as $post)
			<div class="well" style="width: 800px; margin-left: 300px; margin-top: 30px; margin: auto;">
				<h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
				{{ $post->body }}
				<hr>
				<small>Written on {{ $post->created_at }}</small>
			</div>
		@endforeach
		{{ $posts->links() }}
	@else
		<p>No posts found</p>
	@endif
</div>
@endsection