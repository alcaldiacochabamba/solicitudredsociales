<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="md-del-{{$usr->id}}" >
    {{Form::open(array('action'=>array('App\Http\Controllers\UserController@destroy',$usr->id), 'id'=>"myform", 'method'=>"DELETE"))}}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Desea Eliminar el Usuario #{{$usr->id}}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type='submit' class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    {{Form::Close()}}
</div>
