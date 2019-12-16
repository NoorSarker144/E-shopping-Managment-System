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
						Product</a>
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
											{!! Form::open(['method' => 'post','action' => 'ProductController@store','files' => 'true']) !!}

												<legend>Details</legend>
												<div class="form-group">
													<input type="file" accept="image/*" onchange="loadFile(event)" id="image" name="picture">
													<label for="image" id="uploader"><span id="up_img"><span class="glyphicon glyphicon-camera"></span> Upload File</span></label>
												</div>
												<div class="form-group">
													<?php $categories = \App\Category::pluck('name','id')->all(); ?>
													{!! Form::select('category_id',$categories,null,['class' => 'form-control','placeholder' => 'Select Category']) !!}
												</div>
												<div class="form-group">
													{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'Name']) !!}
												</div>
												<div class="form-group">
													{!! Form::text('price',null,['class' => 'form-control','placeholder' => 'Price']) !!}
												</div>
												<div class="form-group">
													{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Description']) !!}
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
									<th>Product</th>
									<th>Price</th>
									<th>Category</th>
									<th class="text-center">Action</th>
								</tr>
								@foreach($records as $record)
								<tr class="parent">
									<td>{{ $record->id }}</td>
									<td>{{ $record->title }}</td>
									<td>{{ $record->price }}</td>
									<th>{{ $record->category->name }}</th>


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
														{!! Form::model($record,['method' => 'PATCH','action' => ['ProductController@update',$record->id],'files' => 'true']) !!}

														<legend>Details</legend>

														<div class="form-group">
															<input type="file" style="display:block" name="image" class="form-control">
														</div>
														<div class="form-group">
															<?php $categories = \App\Category::pluck('name','id')->all(); ?>
															{!! Form::select('category_id',$categories,null,['class' => 'form-control','placeholder' => 'Select Category']) !!}
														</div>
														<div class="form-group">
															{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'Name']) !!}
														</div>
														<div class="form-group">
															{!! Form::text('price',null,['class' => 'form-control','placeholder' => 'Price']) !!}
														</div>
														<div class="form-group">
															{!! Form::textarea('description',null,['class' => 'form-control','placeholder' => 'Description']) !!}
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
														{!! Form::open(['action' => ['ProductController@destroy',$record->id],'method' => 'DELETE']) !!}
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

