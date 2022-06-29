<!-- Modal -->
<div class="modal fade" id="clientModal" tabindex="-1" role="dialog" aria-labelledby="clientModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="clientModalLabel">Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-cli" id="js-form-cli">
            <input type="hidden" name="type" id="type_cli" value="new">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="name">ID Cliente</label>
                <input type="text" name="id" id="id_cli">
              </div>
              <div class="col-md-6">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="locality">Localidad</label>
                <input type="text" name="locality" id="locality">
              </div>
              <div class="col-md-6">
                <label for="mail">Mail</label>
                <input type="email" name="mail" id="mail">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                  <label for="username">Usuario</label>
                  <input type="text" name="username" id="username">
              </div>
              <div class="col-md-6">
                  <label for="password">Contraseña</label>
                  <input type="text" name="password" id="pass_cli">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-6">
                <label for="price">Lista Precios</label>
                <input type="text" name="price" id="price">
              </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" onclick="$('#js-form-cli').submit();">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>