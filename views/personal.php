<?php require_once("layout/header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-12">
      <?php require_once("layout/sidenav.php"); ?>
      </div>
      <div class="col-md-10 col-12">
        <div class="container-fluid py-4">
          <div class="card box-content">
            <div class="card-body p-3">
              <div class="container px-4">
                <div class="row mt-4">
                  <div class="col-12 col-sm-8">
                    <h3 class="titulo-seccion">Personal</h3>
                  </div>
                  <div class="col-12 col-sm-4">
                    <input class="form-control input-busqueda" type="text" id="myInput" onkeyup="buscarTerapeuta()" placeholder="Búsqueda" title="Búsqueda">
                  </div>
                </div>
                <div class="container px-4" id="myUL">
                    <div class="row">
                      <?php
                      include('controller/conexion.php');
                      $sql="SELECT * FROM usuarios INNER JOIN terapeutas ON usuarios.idUsuario=terapeutas.idUsuario";
                      $res=mysqli_query($conexion,$sql);
                      if($res==TRUE){
                        while($var=mysqli_fetch_array($res)){
                        ?>
                          <div class="col-12 col-sm-6 show px-2 py-3">
                            <a href="?mdl=<?php echo(base64_encode('perfil_personal')); ?>&id=<?php echo(base64_encode($var['id_terapeuta'])); ?>" class="texto-card-terapeuta">
                              <div class="fondo-card-terapeuta">
                                <div class="row">
                                  <div class="col-2 fondo-foto-terapeuta" style="background-image: url(<?php echo($var['url_foto']); ?>);">  
                                  </div>
                                  <div class="col-10">
                                      <p class="mt-2 mb-0"><?php echo($var['nombre']); ?></p>
                                      <p class="mb-2"><small class="nombre-terapeuta"><?php echo($var['area']); ?></small></p>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        <?php
                        }
                      }else{
                        echo("<div class='col-12 col-sm-6 show px-2 py-3'><h3>Sin dato</h3></div>");
                      }
                      ?>
                    </div>
                </div>
                <div class="container">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                      <i class="fa fa-plus"></i> Agregar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Agregar -->
<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAgregarLabel">Nuevo terapeuta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/ingresaPersonal.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-8">
                <div class="row">
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="nombre_terapeuta">Nombre</label>
                      <input type="text" id="nombre_terapeuta" name="nombre_tera" placeholder="Nombre" class="form-control input-custom" onblur="capitalizeWords(this.value,this.id);" required/>
                  </div>
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="cargo_tera">Cargo</label>
                      <input type="text" id="cargo_tera" name="cargo_tera" placeholder="Cargo" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="numero_terapeuta">Núm de empleado</label>
                      <input type="number" pattern="\d*" min="1" max="9999" id="numero_terapeuta" name="num_tera" placeholder="Núm de empleado" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="tipo_tera">Terapia</label>
                      <select class="form-select input-custom" id="tipo_tera" name="tipo_tera" required>
                        <option hidden value="">Terapia</option>
                        <option>Terapia Física</option>
                        <option>Terapia Ocupacional</option>
                        <option>Terapia de lenguaje</option>
                        <option>Deglución</option>
                        <option>Neuropsicología</option>
                      </select>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="telefono_tera">Teléfono</label>
                      <input type="number" pattern="\d*" min="1" max="9999999999" id="telefono_tera" name="telefono_tera" placeholder="Teléfono" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="correo_tera">Correo electrónico</label>
                      <input type="email" id="correo_tera" name="correo_tera" placeholder="Correo electrónico" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="usu_tera">Usuario</label>
                      <input type="text" id="usu_tera" name="usu_tera" placeholder="Usuario" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="pass_tera">Contraseña</label>
                      <input type="text" id="pass_tera" name="pass_tera" placeholder="Contraseña" class="form-control input-custom" required/>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <h3 class="azul text-center mt-2">Agregar foto</h3>
                <div class="profile-pic">
                  <label class="-label" for="foto_tera">
                    <span class="fa fa-plus"></span>
                  </label>
                  <input id="foto_tera" accept="image/*" capture="camera" type="file" name="foto_tera" onchange="loadFile(event)" required/>
                  <img src="views/img/fonto_usuario.png" id="output" width="200" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" onclick="checkImgPerfil();" class="btn btn-primary-custom"><i class="fa fa-plus"></i> Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php require_once("layout/footer.php"); ?>