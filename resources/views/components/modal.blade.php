<div class="modal inmodal in" id="{{$id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{$url}}" method="post">
        @csrf
        @isset($method)
            @method($method)
        @endisset
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                class="sr-only">关闭</span>
                    </button>

                    <h4 class="modal-title">{{$title}}</h4>

                </div>
                <small class="font-bold">
                    <div class="modal-body">
                        {{$slot}}
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">保存</button>
                    </div>
                </small>
            </div>
            <small class="font-bold">
            </small>
        </div>
        <small class="font-bold">
        </small>
    </form>
</div>