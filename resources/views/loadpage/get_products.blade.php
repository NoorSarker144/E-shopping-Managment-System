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
                    <h4 class="text-center">$ {{ $product->price }}</h4>

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