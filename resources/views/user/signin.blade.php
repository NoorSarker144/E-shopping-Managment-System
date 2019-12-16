@extends('layouts.template')
@section('content')

    <div class="col-md-4 col-md-offset-4 sign-up">
        <h2>Sign In&nbsp;<span class="glyphicon glyphicon-log-in"></span></h2>
        <form action="{!! URL::to('user/signin','',false) !!}" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">USERNAME<div class="triangle"></div></div>
                    <input type="text" name="email" id="input" class="form-control log" placeholder="username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">PASSWORD<div class="triangle"></div></div>
                    <input type="password" name="password" id="input" class="form-control log" placeholder="password">
                </div>
            </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-block signup" id="block"><span class="glyphicon glyphicon-log-in"></span>&nbsp; Sign in</button>
            </div>
            {!! Form::token() !!}
        </form>
    </div>

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

