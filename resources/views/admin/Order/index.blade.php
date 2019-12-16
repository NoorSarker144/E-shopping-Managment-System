@extends('layouts.admin_layout')
@section('content')
	<div class="row">
		<div class="col-md-3 col-md-offset-9 search-box">
			<div class="input-group">
				<div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
				<input type="search" name="" id="key" class="form-control" title="" placeholder="Search" onkeyup="get()">
			</div><!-- End of input-group -->
			<br>
		</div><!-- End of search-box -->
	</div><!-- End of search-filter -->
	<div class="panel-group" id="body-accordion">
		<div class="panel panel-default main-body">
			<div class="panel-heading body-head">
				<h4 class="panel-title">
					<span class="glyphicon glyphicon-plus"></span>&nbsp;<a data-toggle="collapse" data-parent="#body-accordion" href="#body-collapse">
						Orders</a>
				</h4>
			</div>
			<div id="body-collapse" class="panel-collapse collapse in">
				<div class="row main-part">
					<div class="col-md-12 inner-part">
						@if(Session::has('success'))
							<?php message(Session::get('success')); ?>
						@endif
						@if(!empty($errors))
							@include('partials.errors')
						@endif


						<img src="{{ asset('images/loader.gif') }}" id="animate">

						<div id="values">
							<?php $users = \App\User::all();?>
							@foreach($users as $user)
								<?php
									$orders = $user->orders;
									$orders->transform(function($order, $key) {
										$order->cart = unserialize($order->cart);
										return $order;
									});
								?>
									@foreach($orders as $order)
										<div class="panel panel-success order-panel">
											<div class="panel-heading order-panel-heading">
												<h3 class="panel-title order-panel-title">{{ $order->name }}</h3>
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
							@endforeach
						</div>


					</div><!-- End of inner-part -->
				</div><!-- End of main-part -->
			</div>
		</div>
	</div>
@endsection
@section('scripts')
	{{--<script type="text/javascript">--}}
	   {{--$(document).ready(function() {--}}
		   {{--var id = 0;--}}
		   {{--var token = {{ Session::token() }}--}}
		   {{--$('.edit').on('click',function(e) {--}}
			   {{--e.preventDefault();--}}
			   {{--var text = $(this).closest('tr.parent').find('td.name').text();--}}
			   {{--id = $(this).data('id');--}}
			   {{--$('#textbox').val(text);--}}
			  {{--$('#edit').modal('show');--}}
		   {{--});--}}

		   {{--$('#modal-save').on('click', function() {--}}
			   {{--var name = $('#textbox').val(text);--}}
			   {{--$.ajax({--}}
				   {{--type: "POST",--}}
				   {{--url: "{{ route('occupation.update') }}}",--}}
				   {{--data:{name:name,id:id,_token:token},--}}
				   {{--success: function(data){--}}

				   {{--}--}}
			   {{--});--}}
		   {{--});--}}
	   {{--});--}}
	{{--</script>--}}
@endsection

