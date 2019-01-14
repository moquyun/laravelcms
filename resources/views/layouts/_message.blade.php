@foreach(['success','warning','danger'] as $t)
    @if(session()->has($t))
        <script type="text/javascript">
            @if($t=='danger')
                $(function () {
                    toastr.error('{{session()->get($t)}}')
                })
            @else
                $(function () {
                    toastr.{{$t}}('{{session()->get($t)}}')
                })
            @endif
        </script>
    @endif
@endforeach

@if(session('status'))
    <script type="text/javascript">
        $(function () {
            toastr.info('{{session('status')}}')
        })
    </script>
@endif