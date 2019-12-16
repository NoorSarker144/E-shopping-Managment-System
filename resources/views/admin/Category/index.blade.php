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
						Category</a>
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

						<a class="btn btn-primary" data-toggle="modal" data-target="#create"><span class="glyphicon glyphicon-plus"></span> Add Record</a><br><br>
						<div class="modal fade" id="create" role="dialog">
								<div class="modal-dialog">
									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header bg-primary">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
											{!! Form::open(['method' => 'post','action' => 'CategoryController@store']) !!}

												<legend>Details</legend>
												<div class="form-group">
													{!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name']) !!}
												</div>



												<div class="form-group">
													{!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
												</div>



											{!! Form::close() !!}
										</div> <!-- End of modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div> <!-- End of modal -->
						<img src="{{ asset('images/loader.gif') }}" id="animate">
						@if(!empty($records))
						<div id="values">
							<table class="table table-bordered">
								<tr class="">
									<th>#</th>
									<th>Name</th>
									<th class="text-center">Action</th>
								</tr>
								@foreach($records as $record)
								<tr class="parent">
									<td>{{ $record->id }}</td>
									<td class="name">{{ $record->name }}</td>


									<td class="text-center">
										<a data-toggle="modal" data-target="#edit<?php echo $record->id ?>" class="btn btn-primary edit<?php echo $record->id ?>"><span class="glyphicon glyphicon-edit"></span></a>
										<div class="modal fade" id="edit<?php echo $record->id ?>" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header bg-primary">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>
													<div class="modal-body">
														{!! Form::model($record,['method' => 'PATCH','action' => ['CategoryController@update',$record->id]]) !!}

														<legend>Details</legend>
														<div class="form-group">
															{!! Form::text('name',null,['class' => 'form-control','id' => 'textbox','placeholder' => 'Name']) !!}
														</div>

														<div class="form-group">
															{!! Form::token() !!}
															{!! Form::submit('Update',['class' => 'btn btn-primary']) !!}
														</div>



														</form>
													</div> <!-- End of modal-body -->
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>

											</div>
										</div> <!-- End of modal -->
										<a class="btn btn-primary" data-toggle="modal" data-target="#delete<?php echo $record->id ?>"><span class="glyphicon glyphicon-remove-circle"></span></a>
										<div class="modal fade" id="delete<?php echo $record->id ?>" role="dialog">
											<div class="modal-dialog">
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header bg-primary">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>
													<div class="modal-body">
															<p class="text-center text-danger">Are You Sure? DELETE!</p>
															<p class="text-center"><strong>{{ $record->name }}</strong></p>
													</div> <!-- End of modal-body -->
													<div class="modal-footer">
														{!! Form::open(['action' => ['CategoryController@destroy',$record->id],'method' => 'DELETE']) !!}
															{!! Form::submit('Delete',['class' => 'btn btn-danger']) !!}
															<button type="button" class="btn btn-default" data-dismiss="modal">close</button>
														{!! Form::close() !!}
													</div>
												</div>

											</div>
										</div> <!-- End of modal -->
									</td>
								</tr>
								@endforeach
							</table>
						</div>

						@endif
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

