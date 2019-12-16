<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('website_css/styles.css') }}">
    <link rel="icon" type="image/png" href="">
    <title>E-shopping</title>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('images/ecommerce.png') }}" class="logo pull-left">E-shopping</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/') }}" class="">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="flipInY fadeInRight fadeInUp fadeInLeft" data-wow-duration="1s">Products <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Home & kitchen</a></li>
                    <li><a href="#">Cloths</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Electronic products</a></li>
                </ul>
            </li>
            <li><a href="writters.php">Writters</a></li>
            <li><a href="contact.php">Contact</a></li>

        </ul>
        <form class="navbar-form navbar-left hide" role="search" id="nav-form">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-addon search-addon"><i class="fa fa-search"></i></div>
                </div>
            </div>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ URL::to('/shopping-cart') }}"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;Shopping Cart&nbsp;&nbsp;<?php if(Session::has('cart')) { ?> <span class="badge">{{ Session::get('cart')->totalQty }}</span> <?php } else { echo ""; } ?> </a>

            @if(\Illuminate\Support\Facades\Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-animations="flipInY fadeInRight fadeInUp fadeInLeft" data-wow-duration="1s">User Management <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('user/profile') }}">Profile&nbsp; <span class="glyphicon glyphicon-user"></span></a></li>
                        <li><a href="{{ URL::to('user/logout') }}">Logout&nbsp; <span class="glyphicon glyphicon-log-out"></span></a></li>
                    </ul>
                </li>
            @else
                <li><a href="{{ URL::to('user/signin') }}">Sign In</a></li>
                <li><a href="{{ URL::to('user/signup') }}">Sign Up</a></li>
            @endif




        </ul>
    </div>
</nav> <!-- End of navigation -->

@yield('content')

<div class="clearfix"></div>
<div class="clearfix"></div>

<div id="up">UP</div>

<div class="container-fluid footer">
    <div class="row">
        <div class="main-footer group">
            <div class="col-md-10 col-md-offset-1 footer-content">
                <div class="col-md-5 col-xs-4">
                    <h2 class="footer-title">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci animi autem fugiat harum laboriosam laudantium quis quos recusandae! Accusantium ducimus labore laboriosam odio quibusdam sed similique temporibus veniam voluptas!</p>
                </div>
                <div class="col-md-2 col-xs-2 col-md-offset-1">
                    <h2 class="footer-title">company</h2>
                    <ul>
                        <li><a href="#">Our stores</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Suppliers</a></li>

                    </ul>
                </div>
                <div class="col-md-2 col-xs-2">
                    <h2 class="footer-title">information</h2>
                    <ul>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Secure payment</a></li>
                        <li><a href="#">Terms and conditions</a></li>

                    </ul>
                </div><div class="col-md-2 col-xs-2">
                    <h2 class="footer-title">Services</h2>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Graphic design</a></li>
                        <li><a href="#">Illustration</a></li>

                    </ul>
                </div>
                <div class="clearfix"></div>

            </div>
        </div> <!-- End of main-footer -->
        <div class="col-md-7 footer-list col-md-offset-1">
            <ul>
                <li><a href="">home</a></li>
                <li><a href="">blog</a></li>
                <li><a href="">manufactures</a></li>
                <li><a href="">new projects</a></li>
                <li><a href="">top sellers</a></li>
                <li><a href="">specials</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <p class="copy text-right">Copyright &copy; <?php echo gmdate("Y"); ?> - <span class="coloring">WEB</span> All Rights Reserved</p>
        </div>
    </div>
</div> <!-- End of footer -->



<script src="{{ asset('website_js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('website_js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website_js/jquery.tosrus.min.all.js') }}"></script>
<script src="{{ asset('website_js/jquery.functionality.js') }}"></script>
<script src="{{ asset('website_js/jquery.script.ecom.js') }}"></script>
<script src="{{ asset('website_js/functionality.js') }}"></script>
<script src="{{ asset('website_js/script.js') }}"></script>
@yield('scripts')

</body>
</html>