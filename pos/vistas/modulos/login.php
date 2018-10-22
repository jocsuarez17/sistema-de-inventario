<div id=""></div>

<div class="login-box">
  
  <div class="login-logo">

    <img src="vistas/img/plantilla/Logo.png" class="img-responsive" style="padding:30px 100px 0px 100px">

  </div>

  <div class="banner">

    <h2 class="text-center " style="color:#3282f3" >Ingresar al Sistema</h2>
    <form method="post">
      <div class="form-group  has-feedback">
  <!--label class="control-label" for="inputGroupSuccess1">Ingresar al Sistema</label-->
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-info"></i></span>
    <input type="text" class="form-control input-lg" placeholder="Usuario" name="ingUsuario" required>
  </div>
 
  
</div>



<div class="form-group  has-feedback">
  
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock text-info"></i></span>
    <input type="password" class="form-control input-lg" placeholder="Contraseña" name="ingPassword" required>
  </div>
  
  
</div>

      
      <div class="row">
       
        <div class="text-center">
          <button type="submit" class="btn btn-primary btn-lg">Ingresar</button>
          
        
        </div>

      </div>

      <?php

        $login = new ControladorUsuarios();
        $login -> ctrIngresoUsuario();
        
      ?>

    </form>

  </div>

</div>
