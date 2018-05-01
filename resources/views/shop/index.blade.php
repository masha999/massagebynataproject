@extends('layouts.app')

@section('title')
    Shop
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
		<div class="row">
				<h1 class="text-center shopheader">Explore our Shop</h1>
			</div>
		</div>
    </div>
	<div class="shopproducts">
		<div class="container">
			@foreach($products->chunk(4) as $productChunk)
				<div class="row">
					@foreach($productChunk as $product)
						<div class="col-md-3 col-sm-6">
							<span class="thumbnail">
								<img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
								<h4>{{ $product->title }}</h4>
								<p>{{ $product->description }}</p>
								<hr class="line">
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<p class="price">${{ $product->price }}</p>
									</div>
									<div class="col-md-6 col-sm-6">
										<a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-primary pull-right" role="button">Add to Cart</a>
									</div>
								</div>
							</span>
						</div>
					@endforeach
				</div>
			@endforeach
		</div>
	</div>
</div>

@endsection