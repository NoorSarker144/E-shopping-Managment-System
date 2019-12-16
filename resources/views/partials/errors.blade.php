@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        <span class="glyphicon glyphicon-thumbs-down"></span>
        {{ $error }}
    </div>
@endforeach