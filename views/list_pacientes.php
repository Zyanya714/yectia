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
                    <h3 class="titulo-seccion">Mis pacientes <small>(con material asignado)</small></h3>
                  </div>
                  <div class="col-12 col-sm-4">
                    <input class="form-control input-busqueda" type="text" id="inputBusquedaMisPacientes" onkeyup="buscarMisPacientes()" placeholder="Búsqueda" title="Búsqueda">
                  </div>
                </div>
                <div class="container px-4" id="listadoMisPacientes">
                  <div class="row">
                    <?php
                    include('controller/conexion.php');
                    $sql="SELECT * FROM ejercicios INNER JOIN terapeutas ON ejercicios.id_terapeuta=terapeutas.id_terapeuta INNER JOIN pacientes ON ejercicios.id_paciente=pacientes.id_paciente 
                    INNER JOIN usuarios ON usuarios.idUsuario=pacientes.idUsuario WHERE terapeutas.idUsuario='$_SESSION[id]'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                      ?>
                        <div class="col-12 col-sm-6 show px-2 py-3">
                          <a href="?mdl=<?php echo(base64_encode('perfil_paciente')); ?>&id=<?php echo(base64_encode($var['id_paciente'])); ?>" class="texto-card-terapeuta">
                            <div class="fondo-card-terapeuta">
                              <div class="row">
                                <div class="col-2 fondo-foto-terapeuta" style="background-image: url(<?php echo($var['url_foto_p']); ?>);">  
                                </div>
                                <div class="col-10">
                                    <p class="mt-2 mb-0"><?php echo($var['nombre']); ?></p>
                                    <p class="mb-2"><small class="nombre-mi-paciente"><?php echo($var['curp']); ?></small></p>
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
              </div>
              <hr class="bg-main">
              <div class="container px-4">
                <div class="row mt-4">
                  <div class="col-12 col-sm-8">
                    <h3 class="titulo-seccion">Pacientes</h3>
                  </div>
                  <div class="col-12 col-sm-4">
                    <input class="form-control input-busqueda" type="text" id="inputBusquedaPacientes" onkeyup="buscarPaciente()" placeholder="Búsqueda" title="Búsqueda">
                  </div>
                </div>
                <div class="container px-4" id="listadoPacientes">
                  <div class="row">
                    <?php
                    include('controller/conexion.php');
                    $sql="SELECT * FROM usuarios INNER JOIN pacientes ON usuarios.idUsuario=pacientes.idUsuario";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                      ?>
                        <div class="col-12 col-sm-6 show px-2 py-3">
                          <div class="row">
                            <div class="col-10">
                              <a href="?mdl=<?php echo(base64_encode('perfil_paciente')); ?>&id=<?php echo(base64_encode($var['id_paciente'])); ?>" class="texto-card-paciente">
                                <div class="fondo-card-paciente">
                                  <div class="row">
                                    <div class="col-2 fondo-foto-paciente" style="background-image: url(<?php echo($var['url_foto_p']); ?>);">  
                                    </div>
                                    <div class="col-10">
                                        <p class="mt-2 mb-0"><?php echo($var['nombre']); ?></p>
                                        <p class="mb-2"><small class="nombre-paciente"><?php echo($var['curp']); ?></small></p>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="col-2 mt-2">
                              <button class="btn btn-primary-custom btn_delete_pas" data-bs-id="<?php echo(base64_encode($var['id_paciente'])); ?>" data-bs-nm="<?php echo(base64_encode($var['nombre'])); ?>" data-bs-tu="<?php echo(base64_encode($var['tipo_usuario'])); ?>">
                                <i class="fa fa-trash"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                    }else{
                      echo("<div class='col-12 col-sm-6 show px-2 py-3'><h3>Sin dato</h3></div>");
                    }
                    ?>
                  </div>
                </div>
              </div>
              <div class="container">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalAgregarPaciente">
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
  <!-- Modal Agregar -->
<div class="modal fade" id="modalAgregarPaciente" tabindex="-1" aria-labelledby="modalAgregarPacienteLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAgregarPacienteLabel">Nuevo paciente</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/ingresaPaciente.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-8">
                <div class="row">
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="nombre_paciente">Nombre</label>
                      <input type="text" id="nombre_paciente" name="nombre_paciente" placeholder="Nombre" class="form-control input-custom" onblur="capitalizeWords(this.value,this.id);" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="fnac_paciente">Fecha de nacimiento</label>
                      <input type="date" id="fnac_paciente" name="fnac_paciente" class="form-control input-custom" max="<?php echo(date('Y-m-d')); ?>" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="curp_paciente">CURP</label>
                      <input type="text" id="curp_paciente" name="curp_paciente" placeholder="CURP" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="telefono_paciente">Teléfono</label>
                      <input type="number" pattern="\d*" min="1" max="9999999999" id="telefono_paciente" name="telefono_paciente" placeholder="Teléfono" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="correo_paciente">Correo electrónico</label>
                      <input type="email" id="correo_paciente" name="correo_paciente" placeholder="Correo electrónico" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="diag_paciente">Diagnostico</label>
                      <input type="text" id="diag_paciente" name="diag_paciente" placeholder="Diagnostico" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="usu_paciente">Usuario</label>
                      <input type="text" id="usu_paciente" name="usu_paciente" placeholder="Usuario" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="pass_paciente">Contraseña</label>
                      <input type="text" id="pass_paciente" name="pass_paciente" placeholder="Contraseña" class="form-control input-custom" required/>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <h3 class="azul text-center mt-2">Agregar foto</h3>
                <div class="profile-pic">
                  <label class="-label" for="foto_paciente">
                    <span class="fa fa-plus"></span>
                  </label>
                  <input id="foto_paciente" accept="image/*" capture="camera" type="file" name="foto_paciente" onchange="loadFile(event)" required/>
                  <img src="views/img/fonto_usuario.png" id="output" width="200" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" onclick="checkImgPerfilPas();" class="btn btn-primary-custom"><i class="fa fa-plus"></i> Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php require_once("layout/footer.php"); ?>