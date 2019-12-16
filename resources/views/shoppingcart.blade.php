@extends('layouts.template')
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <div class="shopping-cart">
            <h2>Your Cart Items</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th class="text-left">PRODUCT NAME</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th class="text-center">PRICE</th>
                        <th class="text-center">QUANTITY</th>
                        <th class="text-center">TOTAL PRICE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="text-left"><img src="{{ asset($product['item']['imagePath']) }}" alt="" class="cart-table-img"></td>
                            <td class="text-left">{{ $product['item']['title'] }}</td>
                            <td class="text-left">{{ str_limit($product['item']['description'],50) }}</td>
                            <td class="text-center">{{ "৳ ".$product['item']['price'] }}</td>
                            <td class="text-center">
                                <p class="btn btn-warning">{{ $product['qty'] }}</p>
                                <a href="{{ URL::to('/add-to-cart', ['id' => $product['item']['id']]) }}" class="btn btn-danger">+</a>
                                <a href="{{ URL::to('reduce',['id' => $product['item']['id']]) }}" class="btn btn-danger">-</a>
                            </td>
                            <td class="text-center">{{ "৳ ".$product['price'] }}</td>
                            <td class="text-center"><a href="{{ URL::to('remove',['id' => $product['item']['id']]) }}" class="close">x</a></td>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="4"></td>
                            <td class="text-center"><strong>Total Qty: {{ $totalQty }}</strong></td>
                            <td class="text-center"><strong>Total: {{"৳ ".$totalPrice}}</strong> </td>
                        </tr>
                </tbody>
            </table>
            <div class="col-md-12">
                <a href="{{ URL::to('/') }}" class="btn-web pull-left continue-shop">Continue Shopping</a> &nbsp;&nbsp;&nbsp;
                <a href="{{ URL::to('check-out') }}" class="btn-web pull-left">Check Out</a>
                <a href="{{ URL::to('clear-shopping-cart') }}" class="btn-web pull-right">Clear Cart</a>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    {{--{{ dd($products) }}--}}
@endsection