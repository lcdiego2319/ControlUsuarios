<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Expiracion de contraseña</h4>
      </div>
      <div class="modal-body">
         	Por razones de seguridad tu contraseña expirara en {{$dias}} dias, favor de elegir una nueva contraseña.
      </div>
      <div class="modal-footer">
        <a class="btn btn-danger" href="{{route('administrador.calibration.index')}}" data-dismiss="modal">En otro momento</a>
        <a  href="{{ route('getMessage') }}" class="btn btn-success">Cambiar mi contraseña</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	