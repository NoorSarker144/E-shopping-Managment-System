@extends('layouts.template')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="check-out">
            <h2>Place Order</h2>
            {!! Form::open(['action' => 'PagesController@storeOrder','method' => 'post']) !!}
                <div class="row">
                    <div class="form-group col-md-4">
                        {!! Form::text('name',null,['class' => 'form-control','placeholder' => 'Name']) !!}
                    </div>

                    <div class="form-group col-md-4">
                        {!! Form::text('mobile',null,['class' => 'form-control','placeholder' => 'Mobile']) !!}
                    </div>

                    <div class="form-group col-md-4">
                        {!! Form::text('address',null,['class' => 'form-control','placeholder' => 'Address']) !!}
                    </div>

                    <div class="form-group col-md-12">
                    {!! Form::button('name',['class' => 'btn btn-block btn-checkout','type' => 'submit']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
    {{--{{ dd($products) }}--}}
@endsection
@section('scripts')

    <script type="text/javascript">
        @if(notify()->ready())
            swal({
            title: "{{ notify()->message() }}",
            type: "{{ notify()->type() }}"
        });
        @endif
    </script>
@endsection
