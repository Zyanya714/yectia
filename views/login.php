<?php require_once("layout/header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <div class="container-fluid py-4">
          <div class="card box-content card-login">
            <div class="card-body p-3">
              <div class="container">
                <h3 class="px-4 mt-4 titulo-seccion"><strong>Iniciar sesión</strong></h3>
                <div class="container">
                    <div class="row">
                      <div class="col-12 col-sm-4"></div>
                      <div class="col-12 col-sm-4">
                        <form method="POST" class="text-center form-login">
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                              <label class="form-label" for="usuario">Usuario</label>
                              <input type="text" id="usuario" name="usu" placeholder="Usuario" class="form-control input-custom" required/>
                          </div>
                          <!-- Password input -->
                          <div class="form-outline mb-4">
                              <label class="form-label" for="password">Contraseña</label>
                              <div class="input-group">
                                <input type="password" id="password" name="pass" placeholder="Contraseña" class="form-control input-custom" aria-describedby="togglePassword" required/>
                                <span class="input-group-text input-group-text-custom"><i class="fa fa-eye-slash" id="togglePassword"></i></span>
                              </div>
                          </div>                
                          <!-- Submit button -->
                          <input type="submit" name="confirmar" value="Confirmar" class="btn btn-primary-custom"/>
                        </form>
                        <script>
                          const togglePassword = document.querySelector("#togglePassword");
                          const password = document.querySelector("#password");
                          togglePassword.addEventListener("click", function () {
                              // toggle the type attribute
                              const type = password.getAttribute("type") === "password" ? "text" : "password";
                              password.setAttribute("type", type); 
                              // toggle the icon
                              this.classList.toggle("fa-eye");
                          });
                        </script>
                        <?php
                        if(isset($_POST['confirmar'])){
                          include_once("controller/conexion.php");
                          $nusuario = $_POST['usu'];
                          $password = $_POST['pass'];
                          $consulta = "SELECT idUsuario, nombre FROM usuarios WHERE usu= ? AND pass= ?";
                          $resultado=$conexion->prepare($consulta);
                          $resultado->bind_param('ss',$nusuario,$password);
                          $resultado->execute();
                          $resultado->bind_result($idUsuario, $nombre);
                          $result = $resultado->fetch();
                          if(!empty($nombre)){
                            $_SESSION['id'] = $idUsuario;
                            $_SESSION['nombre'] = $nombre;
                            $_SESSION['ULTIMA_ACTIVIDAD'] = time();
                            echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Datos correctos ,$nombre',showCancelButton: false,confirmButtonText: `Ingresar`,}).then((result) => {if (result.isConfirmed){document.location.href='index.php';}}) </script>");
                          }else{
                            echo "<script language=\"javascript\">alert(\"Nombre o contraseña invalidos\");</script>";
                          }
                        }
                        ?>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once("layout/footer.php"); ?>