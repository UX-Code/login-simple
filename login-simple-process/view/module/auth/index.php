<div class="row" id="pg-inicio">

  <h3 class="center-align">INICIAR SESION</h3>
  <div class="col m4 offset-m4 blue-grey lighten-5">
    <div class="row">
      <form action="modulo/acceso" method="post">
        <p class="col s12">Ingresa el usuario y la contraseña que tiene almacenada</p>
        <div class="input-field col s12">
          <input  id="txtemail" type="email" class="validate" name="data[]" required>
          <label for="txtemail">Correo Electronico</label>
        </div>

        <div class="input-field col s12">
          <input  id="txtpass" type="password" class="validate" name="data[]" required>
          <label for="txtpass">Contraseña</label>
        </div>

        <div class="col s12">
          <button type="button" class="btn cyan waves-effect waves-light" style="width:100%" onclick="javascript:login()">INICIAR SESION</button>
        </div>
      </form>
    </div>
  </div>

</div>
