<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="nav justify-content-center" id="app-navbar-collapse">
                        <ul class="nav navbar-nav navbar-right secondnav">
                            <li> <a class="nav-link active" href="/">Home</a></li>
                            <li> <a class="nav-link" href="/posts">Blog</a></li>
                            <li> <a class="nav-link" href="/shop">Shop</a></li>
                            <li> <a class="nav-link" href="/contactus">Contact Us</a></li>
                            <li>
                                <a href="{{ route('product.shoppingCart') }}">
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                    <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                                 </a>
                            </li>
       

                        <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('signup') }}">Register</a></li>
                                <li><a href="{{ route('signin') }}"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</a></li>
                                
                            @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Welcome, {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('admin') }}">Admin Dashboard</a>
                                        <span id="separator"></span>

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                                Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</nav>