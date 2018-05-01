@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')

<div class="shoppage">
	<div class="shopheader_bg">
    	<div class="container">
			<div class="row">
				<h1 class="cover-heading text-center shopheader">Shopping Cart</h1>
			</div>
		</div>
    </div>
	@if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                            <li class="list-group-item">
                                <span class="badge">{{ $product['qty'] }}</span>
                                <strong>{{ $product['item']['title'] }}</strong>
                                <span class="label label-info">${{ $product['price'] }}</span>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('product.reduceByOne', ['id' => $product['item']['id']]) }}">Reduce by 1</a></li>
                                        <li><a href="{{ route('product.remove', ['id' => $product['item']['id']]) }}">Reduce All</a></li>
                                    </ul>
                                </div>
                            </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: ${{ $totalPrice }}</strong>
				<a href="{{ route('checkout') }}" type="button" class="btn btn-info pull-right">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
</div>