@extends('layouts.template')
@section('content')
    <!-- Start Search Panel Section -->
    <div class="search-panel">
        <div class="col-md-6 col-md-offset-3">
            <form class="form form-search">
                <div class="form-group">
                    <div class="input-group">
                        <input type="" name="" class="form-control search product-search" placeholder="Search for products">
                        <div class="input-group-addon product-search-addon"><i class="fa fa-search"></i></div>
                    </div>
                </div>
            </form><!-- End of form -->
        </div> <!-- End of col-md-6 -->
    </div><!-- End of search-panel -->
    <!-- End Search Panel Section -->
    <!-- Start Best Sellers Section  -->
    <div class="bestsellers">
        <img src="{{ asset('images/rolling.gif') }}" alt="" id="animate">
        <div class="col-md-2 sidebar wow fadeInLeft">
            <div class="panel panel-primary web-panel">
                <div class="panel-heading  web-panel-heading">
                    <h3 class="panel-title"><i class="fa fa-usd"></i>&nbsp;Pricing</h3>
                </div><!-- End of panel-heading -->
                <div class="panel-body web-panel-body">
                    <div id="slider"></div>
                    <?php
                    $min = DB::table('products')->select(DB::raw('min(price) as min'))->first();
                    $max = DB::table('products')->select(DB::raw('max(price) as max'))->first();
                    ?>
                    <p id="min" class="pull-left">{{ "৳ ".$min->min }}</p>
                    <p id="min1" class="pull-left hide">{{ $min->min }}</p>
                    <p id="max" class="pull-right">{{ "৳ ".$max->max }}</p>
                    <p id="max1" class="pull-right hide">{{ $max->max }}</p>
                </div> <!-- End of panel-body -->
            </div><!-- End of web-panel -->
            <div class="panel panel-primary web-panel">
                <div class="panel-heading  web-panel-heading">
                    <h3 class="panel-title"><i class="fa fa-folder"></i>&nbsp;Our Categories</h3>
                </div><!-- End of panel-heading -->
                <div class="panel-body web-panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge">5</span>
                            Item 1
                        </li>
                        <li class="list-group-item">
                            <span class="badge">10</span>
                            Item 2
                        </li>
                        <li class="list-group-item">
                            <span class="badge">15</span>
                            Item 3
                        </li>
                        <li class="list-group-item">
                            <span class="badge">5</span>
                            Item 1
                        </li>
                        <li class="list-group-item">
                            <span class="badge">15</span>
                            Item 3
                        </li>
                    </ul>
                </div> <!-- End of panel-body -->
            </div><!-- End of web-panel -->
            <div class="panel panel-primary web-panel">
                <div class="panel-heading  web-panel-heading">
                    <h3 class="panel-title"><i class="fa fa-tags"></i>&nbsp;Tags</h3>
                </div><!-- End of panel-heading -->
                <div class="panel-body web-panel-body">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-addon search-addon"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                </div> <!-- End of panel-body -->
            </div><!-- End of web-panel -->
        </div><!-- End of sidebar -->
        <div class="col-md-10 body-part">
            <div class="all-product-section">
                <div class="view-buttons">
                    <p class="btn btn-default"><i class="fa fa-sort-amount-desc"></i>&nbsp; Sort by : Newest items</p>&nbsp; | &nbsp;
                    <p class="btn btn-default"><i class="fa fa-calendar"></i>&nbsp; Added any date</p>&nbsp; | &nbsp;
                    <p class="btn btn-default"><i class="fa fa-list"></i></p>&nbsp;
                    <p class="btn btn-default"><i class="fa fa-th"></i></p>
                </div><!-- End of view-buttons -->
                <div class="all-products">

                    @foreach($products as $product)
                        <div class="col-md-2 col-sm-3 col-xs-4 product-section">
                            <div class="products">
                                <div class="product-container">
                                    <img src="{{ asset($product->imagePath) }}" class="product-thumb">
                                    <p class="text-center">{{ $product->title }}</p>
                                    <h4 class="text-center">৳ {{ $product->price }}</h4>

                                    <div class="product-details">
                                        <i class="fa fa-search-plus" data-toggle="modal" data-target="#myModal{{ $product->id }}"></i>
                                    </div>

                                    <div class="modal fade" id="myModal{{ $product->id }}" role="dialog">
                                        <div class="modal-dialog modal-lg">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <p class="close close-button" data-dismiss="modal">x</p>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <img src="{{ $product->imagePath }}" class="product-img">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- End of modal-body -->
                                                <div class="clearfix"></div>
                                            </div> <!-- End of modal-content -->

                                        </div> <!-- End of modal-dialog -->
                                    </div> <!-- End of modal -->
                                </div><!-- End of product-container -->
                                <div class="clearfix"></div>
                                <a href="{{ URL::to('/add-to-cart', ['id' => $product->id]) }}" class="add-button"><i class="fa fa-shopping-cart"></i>&nbsp;add to cart</a>
                            </div><!-- End of products -->
                        </div> <!-- End of product-section -->
                    @endforeach

                </div><!-- End of all-products -->
            </div> <!-- End of all-product-section -->
        </div><!-- End of body-part -->
    </div><!-- End of bestsellers -->
    <!-- End Best Sellers Section  -->
@endsection
@section('scripts')
    <script>
        var producturl = "{{ URL::to('get_products') }}";
        var producttoken = "{{ csrf_token() }}";
    </script>
@endsection