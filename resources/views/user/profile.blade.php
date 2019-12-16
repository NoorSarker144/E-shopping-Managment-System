@extends('layouts.template')
@section('content')
    <div class="orders col-md-8 col-md-offset-2">
        <h1>My Orders</h1>

        @foreach($orders as $order)
            <div class="panel panel-success order-panel">
                <div class="panel-heading order-panel-heading">
                    <h3 class="panel-title order-panel-title">Order</h3>
                </div>
                <div class="panel-body order-panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                        <li class="list-group-item">
                            <span class="badge">{{ $item['price'] }}</span>
                            {{ $item['item']['title'] }} | {{ $item['qty'] }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="panel-footer order-panel-footer">
                    <strong>Total Price: {{ $order->cart->totalPrice." ৳" }}</strong>
                </div>
            </div> <!-- End of ordder-panel -->
        @endforeach
    </div><!-- End of orders -->


@endsection