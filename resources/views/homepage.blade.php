@extends('layouts.template')
@section('content')
    <div class="search-main">
        <div class="search-main-contents">
            <div class="col-md-6 col-md-offset-3">
                <h3 class="pull-right wow fadeInLeft">Groceries delivered in 1 h <i class="fa fa-clock-o"></i> ur</h3><div class="clearfix"></div>
                <form class="form wow slideInUp">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="" name="" class="form-control search" placeholder="Search for products">
                            <div class="input-group-addon search-addon btn"><i class="fa fa-search"></i></div>
                        </div>
                    </div>
                </form><!-- End of form -->
            </div> <!-- End of col-md-6 -->
        </div><!-- End of search-main-contents -->
    </div> <!-- End of search-main -->


    <!-- Start Best Sellers Section  -->
    <div class="bestsellers">
        <h2 class="text-center">Our Best Sellers</h2>
        <div class="col-md-6 product-holder">
            @foreach($productsone as $productone)
                <div class="col-md-3 col-sm-3 col-xs-4 product-section">
                    <div class="products">
                        <div class="product-container">
                            <img src="{{ $productone->imagePath }}" class="">
                            <p class="text-center">{{ $productone->title }}</p>
                            <h4 class="text-center">৳ {{ $productone->price }}</h4>

                            <div class="product-details">
                                <i class="fa fa-search-plus" data-toggle="modal" data-target="#myModal{{ $productone->id }}"></i>
                            </div>

                            <div class="modal fade" id="myModal{{ $productone->id }}" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p class="close close-button" data-dismiss="modal">x</p>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ $productone->imagePath }}" class="product-img">
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
                        <a href="{{ URL::to('/add-to-cart', ['id' => $productone->id]) }}" class="add-button"><i class="fa fa-shopping-cart"></i>&nbsp;add to cart</a>
                    </div><!-- End of products -->
                </div> <!-- End of product-section -->
            @endforeach
        </div> <!-- End of product-holder -->
        <div class="col-md-6 product-holder">
            @foreach($productstwo as $producttwo)
                <div class="col-md-3 col-sm-3 col-xs-4 product-section">
                    <div class="products">
                        <div class="product-container">
                            <img src="{{ asset($producttwo->imagePath) }}" class="product-thumb">
                            <p class="text-center">{{ $producttwo->title }}</p>
                            <h4 class="text-center">৳ {{ $producttwo->price }}</h4>

                            <div class="product-details">
                                <i class="fa fa-search-plus" data-toggle="modal" data-target="#myModal{{ $producttwo->id }}"></i>
                            </div>

                            <div class="modal fade" id="myModal{{ $producttwo->id }}" role="dialog">
                                <div class="modal-dialog modal-lg">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p class="close close-button" data-dismiss="modal">x</p>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{ $producttwo->imagePath }}" class="product-img">
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
                        <a href="{{ URL::to('/add-to-cart', ['id' => $producttwo->id]) }}" class="add-button"><i class="fa fa-shopping-cart"></i>&nbsp;add to cart</a>
                    </div><!-- End of products -->
                </div> <!-- End of product-section -->
            @endforeach
        </div><!-- End of product-holder -->
    </div><!-- End of bestsellers -->
    <p class="text-center"><a href="{{ URL::to('/all-products') }}" class="btn-web">Show All</a></p>
    <!-- End Best Sellers Section  -->
    <div class="clearfix"></div>

    <!-- Start Categories Section -->
    <div class="categories wow zoomIn">
        <h2 class="text-center">Our Categories</h2>
        <div class="col-md-10 col-md-offset-1 category-holder">
            <div class="row single-category-section">
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-1.jpg" class="img-responsive">
                                <h4>Cooking</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-2.jpg" class="img-responsive">
                                <h4>Meat and Fish</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-3.jpg" class="img-responsive">
                                <h4>Fruits And Vegitables</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-4.jpg" class="img-responsive">
                                <h4>Beverages</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-5.jpg" class="img-responsive">
                                <h4>Home And Cleaning</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <div class="col-md-4 col-sm-4 col-xs-6 single-category-holder">
                    <a href="">
                        <div class="category-holder">
                            <div class="single-category">
                                <img src="images/products/c-6.jpg" class="img-responsive">
                                <h4>Paste Control</h4>
                            </div><!-- End of single-category -->
                            <div class="category-details hidden-sm hidden-xs">
                                <i class="fa fa-search"></i>
                            </div><!-- End of category-details -->
                        </div><!-- End of category-holder -->
                    </a>
                </div><!-- End of single-category-holder -->
                <p class="text-center">
                    <a href="" class="btn-web">Show All</a>
                </p>
                <!-- <div class="col-md-3 col-md-offset-5 show-all">
                    <button class="btn btn-block btn-web">Show All</button>
                </div> --><!-- End of show-all -->
            </div><!-- End of single-category-section -->
        </div><!-- End of category-holder -->
    </div><!-- End of categories -->
    <!-- End Categories Section -->
    <div class="clearfix"></div>

    <!-- Start Service Section -->
    <div class="service wow fadeInLeft">
        <div class="service-holder">
            <h2 class="text-center">Do you own a business?</h2>
            <div class="col-md-6 col-md-offset-3 service-section">
                <div class="row">
                    <div class="col-md-4 col-xs-4">
                        <div class="single-service">
                            <p class="text-center"><i class="fa fa-check"></i></p>
                            <p class="text-center">Special Corporate Prices</p>
                        </div><!-- End of single-service -->
                    </div><!-- End of col-md-4 -->
                    <div class="col-md-4 col-xs-4">
                        <div class="single-service">
                            <p class="text-center"><i class="fa fa-clock-o"></i></p>
                            <p class="text-center">24 Hour Support</p>
                        </div><!-- End of single-service -->
                    </div><!-- End of col-md-4 -->
                    <div class="col-md-4 col-xs-4">
                        <div class="single-service">
                            <p class="text-center"><i class="fa fa-truck"></i></p>
                            <p class="text-center">Flexible Free Delivery</p>
                        </div><!-- End of single-service -->
                    </div><!-- End of col-md-4 -->
                </div><!-- End of row -->
            </div><!-- End of service-section -->
        </div><!-- End of service-holder -->
    </div><!-- End of service -->
    <!-- End Service Section -->

    <!-- Start of client Section -->
    <div class="client col-md-8 col-md-offset-2">
        <h2 class="text-center">Special Offers</h2>
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row slide-section">
                            <div class="col-md-4">
                                <img src="{{ asset('images/products/tea.jpg') }}" alt="" class="img-thumbnail slide-img animated rotateInUpLeft delay-5">
                            </div>
                            <div class="col-md-8">
                                <h3 class="animated rollIn delay-1">Tea Special</h3>
                                <p class="animated flipInY delay-4 duration">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                            </div>
                        </div><!-- End of row -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row slide-section">
                            <div class="col-md-4">
                                <img src="{{ asset('images/products/radhuni.jpg') }}" alt="" class="img-thumbnail slide-img animated rotateIn delay-5">
                            </div>
                            <div class="col-md-8">
                                <h3 class="animated flipInY delay-1">Tea Special</h3>
                                <p class="animated fadeInUp delay-4 duration">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda deserunt dolore dolusdam quidem quos, reprehenderit similique temporibus? Quas!</p>
                            </div>
                        </div><!-- End of row -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row slide-section">
                            <div class="col-md-4">
                                <img src="{{ asset('images/products/tea.jpg') }}" alt="" class="img-thumbnail slide-img animated rotateInUpLeft delay-5">
                            </div>
                            <div class="col-md-8">
                                <h3 class="animated slideInDown delay-1">Tea Special</h3>
                                <p class="animated slideInUp delay-2 duration">Lorem ipsum dolor sit amet, consectetur adipis</p>
                            </div>
                        </div><!-- End of row -->
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row slide-section">
                            <div class="col-md-4">
                                <img src="{{ asset('images/products/tea.jpg') }}" alt="" class="img-thumbnail slide-img animated bounceIn delay-5">
                            </div>
                            <div class="col-md-8">
                                <h3 class="animated slideInRight delay-1">Tea Special</h3>
                                <p class="animated zoomIn delay-4 duration">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, assumenda deserunt dol uidem quos, reprehenderit similique temporibus? Quas!</p>
                            </div>
                        </div><!-- End of row -->
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                {{--<span class="sr-only">Previous</span>--}}
            </a>
            <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                {{--<span class="sr-only">Next</span>--}}
            </a>
        </div>
    </div> <!-- End of client -->

    <!-- End of client Section -->


@endsection