@extends('layouts.admin_layout')
@section('content')
    <div class="row">


                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 sub-folder">
                    <div class="row">
                        <a href="{{ URL::to('/categories') }}">
                            <div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 folder-section">
                                <span class="glyphicon glyphicon-user"></span>
                                <h4>Category</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 sub-folder">
                    <div class="row">
                        <a href="{{ URL::to('/products') }}">
                            <div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 folder-section">
                                <span class="glyphicon glyphicon-user"></span>
                                <h4>Product</h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 sub-folder">
                    <div class="row">
                        <a href="{{ URL::to('/orders') }}">
                            <div class="col-md-10 col-sm-10 col-xs-10 col-xs-offset-1 folder-section">
                                <span class="glyphicon glyphicon-user"></span>
                                <h4>Orders</h4>
                            </div>
                        </a>
                    </div>
                </div>






                        <!-- End of website section -->

    </div>
    <!-- End of row -->
@stop