@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
    <img src="/images/soap-3123469_1280.jpg" alt="Soap" style="width:100%;">
        <div class="carousel-caption">
            <h1 class="cover-heading text-center homeheader">Massage by Nata<sup> &reg; </sup></h1>
            <p class="cover-heading text-center homeparagraph">We offer a variety of high quality therapeutic massage techniques and spa services. We are always growing, learning, and adding something new to offer the community. We are independently owned and operated. Feel free to explore our services!</p>
            <p class="text-center">
                <a href="{{ route('signup') }}" class="btn btn-info btn-lg">Register</a>
                <a href="{{ route('signin') }}" class="btn btn-info btn-lg">Login</a>
            </p>
        </div>
    </div>

    <div class="item">
    <img src="/images/soap-2333391_1280.jpg" alt="Soap" style="width:100%;">
        <div class="carousel-caption">
            <h1 class="cover-heading text-center homeheader">Massage by Nata<sup> &reg; </sup></h1>
            <p class="cover-heading text-center homeparagraph">We offer a variety of high quality therapeutic massage techniques and spa services. We are always growing, learning, and adding something new to offer the community. We are independently owned and operated. Feel free to explore our services!</p>
            <p class="text-center">
                <a href="{{ route('signup') }}" class="btn btn-info btn-lg">Register</a>
                <a href="{{ route('signin') }}" class="btn btn-info btn-lg">Login</a>
            </p>
        </div>
    </div>

    <div class="item">
    <img src="/images/soap-2726371_1280.jpg" alt="Soap" style="width:100%;">
        <div class="carousel-caption">
            <h1 class="cover-heading text-center homeheader">Massage by Nata<sup> &reg; </sup></h1>
            <p class="cover-heading text-center homeparagraph">We offer a variety of high quality therapeutic massage techniques and spa services. We are always growing, learning, and adding something new to offer the community. We are independently owned and operated. Feel free to explore our services!</p>
            <p class="text-center">
                <a href="{{ route('signup') }}" class="btn btn-info btn-lg">Register</a>
                <a href="{{ route('signin') }}" class="btn btn-info btn-lg">Login</a>
            </p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" style="height: 500px">
    <div class="row">
        <p class="cover-heading text-center">




            <nav>
                    <ul>
                        <li><a href="{{ route('main') }}">Guest Page</a></li>
                        <li><a href="{{ route('user') }}">User</a></li>
                        <li><a href="{{ route('admin') }}">Admin</a></li>
                        <span id="separator"></span>
                        @if(!Auth::check())
                            <li><a href="{{ route('signup') }}">Sign Up</a></li>
                            <li><a href="{{ route('signin') }}">Sign In</a></li>
                        @else
                            <li><a href="{{ route('logout') }}">Logout</a></li>
                        @endif
                    </ul>
                </nav>




        </p>
    </div>
</div>

@endsection