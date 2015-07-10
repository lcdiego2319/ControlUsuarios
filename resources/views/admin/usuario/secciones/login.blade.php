      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Alerta</h4>
      </div>
      <div class="modal-body">
        No tienes los privilegios necesarios para eliminar registros de la base de datos 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No hacer nada</button>
        <a type="button" class="btn btn-primary" href="{{ url('custom_auth/logout') }}">Ingresar como administrador</a>
      </div>
    </div>
  </div>
</div>