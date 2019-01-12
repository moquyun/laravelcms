@if(count($errors)>0)
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        @foreach($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    </div>
@endif