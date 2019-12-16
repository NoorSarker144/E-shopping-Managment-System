<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.tosrus.all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_admin.css') }}">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="{{ asset('css/dycalendar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <title>Admin | Dashboard</title>
</head>
<body>
<img src="{{ asset('../images/loader.gif') }}" id="loader" class="hidden-xs hidden-sm">
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('/') }}"><span class="glyphicon glyphicon-globe"></span>&nbsp; Visit Site</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;Master Entry <b class="caret"></b></a>
                    <ul class="dropdown-menu user-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-wrench"></span>&nbsp; Basic Setup</a></li>

                    </ul>
                </li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle user-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu user-menu">
                        {{--<li><a href="#"><span class="glyphicon glyphicon-edit"></span> Change Password</a></li>--}}
                        <li><a href="{{ URL::to('admin/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav> <!-- End of nav -->
<div class="container-fluid">
    <div class="row content-biginer">
        <div class="col-md-3 col-lg-2 col-sm-5 col-xs-12 left-container">
            <div class="row user">
                <div class="col-md-12">
                    <div class="col-md-12 user-section">
                        <img src="{{ asset('../images/logo.png') }}" class="pull-center">
                        <div class="clearfix"></div>
                        <a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin</a>
                        &nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="#" role="button"><span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Chat</a>
                    </div><!-- End of col-md-6 -->
                </div><!-- End of user -->
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse" style="border:1px solid white;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="background: gray;"></span>
                    <span class="icon-bar" style="background: gray;"></span>
                    <span class="icon-bar" style="background: gray;"></span>
                </button>
                <a class="navbar-brand visible-xs" href="#">Navigation Menu</a>
            </div>
            <div class="panel-group collapse navbar-collapse navbar-ex2-collapse" id="accordion">
                <div class="panel panel-default noborder main-menu">
                    <div class="panel-heading menu-head" <?php if(Request::is('admin')) { echo "style=\"background-color:#ecc64b;color:black\""; }?>>
                        <h4 class="panel-title">
                            <span class="glyphicon glyphicon-dashboard"></span>&nbsp;<a href="{{ URL::to('/admin/home') }}">
                                Dashboard</a>
                        </h4>
                    </div>
                </div>

                <!-- Start Account Section -->




                        <div class="panel panel-default noborder main-menu">
                            <div class="panel-heading menu-head">
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-glass"></span>&nbsp;<a href="{{ URL::to('/categories') }}">
                                        Category</a>
                                </h4>
                            </div>
                        </div>

                        <div class="panel panel-default noborder main-menu">
                            <div class="panel-heading menu-head">
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-glass"></span>&nbsp;<a href="{{ URL::to('/products') }}">
                                        Product</a>
                                </h4>
                            </div>
                        </div>

                        <div class="panel panel-default noborder main-menu">
                            <div class="panel-heading menu-head" <?php if(Request::is('news')) { echo "style=\"background-color:#ecc64b;color:black\""; }?>>
                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-glass"></span>&nbsp;<a href="{{ URL::to('/orders') }}">
                                        Orders</a>
                                </h4>
                            </div>
                        </div>


                                <!-- End account section -->



                        <!-- End Website Section -->
            </div> <!-- End of panel -->
        </div>
        <!-- End of End of header part -->
        <div class="col-md-9 col-lg-10 col-sm-7 col-xs-12 right-container">
            <div class="row header-section">
                <div class="col-md-6 header-title">
                    <h2 class="h2 heading"><span class="glyphicon glyphicon-tasks"></span> Ecommerce</h2>
                </div><!-- End of header-title -->
            </div><!-- End of row -->
            <br>
            @yield('content')
        </div><!-- End of right-container -->

    </div><!-- End of content-biginer -->
</div><!-- End of container-fluid -->
<script src="{{ asset('js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.cycle2.min.js') }}"></script>
<script src="{{ asset('js/jquery.cycle2.flip.min.js') }}"></script>
<script src="{{ asset('js/jquery.cycle2.tile.min.js') }}"></script>
<script src="{{ asset('js/jquery.cycle2.swipe.min.js') }}"></script>
<script src="{{ asset('js/jquery.functionality.js') }}"></script>
<script src="{{ asset('js/jquery.tosrus.min.all.js') }}"></script>
<script src="{{ asset('js/prefixfree.min.js') }}"></script>
<script src="{{ asset('js/dycalendar.min.js') }}"></script>
<script src="{{ asset('js/education_script.js') }}"></script>
<script src="{{ asset('js/jquery.tosrus.functionality.js') }}"></script>
<script src="{{ asset('js/jquery-ui.js') }}"></script>
<script src="{{ asset('js/jquery-printme.js') }}"></script>
<script src="{{ asset('js/Chart.min.js') }}"></script>
<script src="{{ asset('js/reportChartBar.js') }}"></script>
<script src="{{ asset('js/reportChartPie.js') }}"></script>
<script src="{{ asset('js/resultscript.js') }}"></script>
<script src="{{ asset('js/accountscript.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/new_script.js') }}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $("#loader").fadeOut("slow");
    });
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy/mm/dd'
    });
    $("#datepicker").keypress(function(event) {event.preventDefault();});

    $( ".datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy/mm/dd'
    });
    $(".datepicker").keypress(function(event) {event.preventDefault();});

    function init() {
        $( ".datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd'
        });
        $(".datepicker").keypress(function(event) {event.preventDefault();});
    }

    $(document).on("focus", ".datepicker", init);

    @yield('myscript')
</script>
</body>
</html>