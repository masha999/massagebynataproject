@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Posts</h1>
			</div>
		</div>
    </div>
    <div class="mypost" style="width: 800px; margin-left: 300px; margin-top: 30px; margin: auto;">
        <a href="/posts"><button class="btn btn-info">Go Back</button></a>
        <h1>{{ $post->title }}</h1>
        <div>
            {{ $post->body }}
        </div>
        <hr>
        <small>Written on {{ $post->created_at }}</small>
    </div> 
</div>
@endsection