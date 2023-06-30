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
                    <h3 class="titulo-seccion">Paciente</h3>
                  </div>
                  <div class="col-12 col-sm-4 text-end">
                    <div class="d-grid gap-2">
                      <button class="btn btn-lg btn-primary-custom" data-bs-target="#modalAsignarEjercicio" data-bs-toggle="modal"><i class="fa fa-plus-square"></i> Asignar material</button>
                    </div>
                  </div>
                </div>
                <?php
                include('controller/conexion.php');
                $id=base64_decode($_GET['id']);
                $sql="SELECT * FROM usuarios INNER JOIN pacientes ON usuarios.idUsuario=pacientes.idUsuario WHERE pacientes.id_paciente=".$id;
                $res=mysqli_query($conexion,$sql);
                $var=mysqli_fetch_array($res);
                ?>
                <div class="row mt-2">
                    <div class="col-12 col-sm-8">
                        <h3 class="mt-4"><strong><?php echo($var['nombre']); ?></strong></h3>
                        <h5 class="mt-4">Fecha de nacimiento: <strong><?php $date=new DateTime($var['fecha_nac']); echo($date->format('d/m/Y')); ?></strong></h5>
                        <h5 class="mt-4">CURP: <strong><?php echo($var['curp']); ?></strong></h5>
                        <h5 class="mt-4">Teléfono: <strong><?php echo($var['telefono_p']); ?></strong></h5>
                        <h5 class="mt-4">Correo: <strong><?php echo($var['correo_p']); ?></strong></h5>
                        <h5 class="mt-4">Diagnostico: <strong><small><?php echo($var['diagnostico']); ?></small></strong></h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <img src="<?php echo($var['url_foto_p']); ?>" class="img-thumbnail" alt="<?php echo($var['nombre']); ?>">
                    </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-12">
                    <h4 class="titulo-seccion">Material asignado</h4>
                  </div>
                  <div class="col-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped table-hover bg-table-custom">
                            <thead class="bg-main text-white">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Terapeuta</th>
                                  <th scope="col">Nombre ejercicio</th>
                                  <th scope="col">Tipo ejercicio</th>
                                  <th scope="col">Fecha asignación</th>
                                  <th scope="col">Desasignar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql="SELECT * FROM ejercicios INNER JOIN terapeutas ON ejercicios.id_terapeuta=terapeutas.id_terapeuta INNER JOIN pacientes ON ejercicios.id_paciente=pacientes.id_paciente 
                                INNER JOIN usuarios ON usuarios.idUsuario=terapeutas.idUsuario INNER JOIN documentos ON documentos.id_adjunto=ejercicios.id_adjunto WHERE pacientes.id_paciente=".$id;
                                $res=mysqli_query($conexion,$sql);
                                $n_var=mysqli_num_rows($res);
                                if($n_var>0){
                                  while($var=mysqli_fetch_array($res)){
                                    ?>
                                        <tr>
                                          <td><?php echo($var['id_ejercicio']); ?></td>
                                          <td><?php echo($var['nombre']); ?></td>
                                          <td><?php echo($var['nombre_adj']); ?></td>
                                          <td><?php echo($var['tipo_adj']); ?></td>
                                          <td><?php $date=new DateTime($var['date']); echo($date->format('Y/m/d - h:m a')); ?></td>
                                          <td>
                                            <?php
                                            //Cambiar id o condición para super usuario
                                            if ($_SESSION['id']=="1" || $_SESSION['id']==$var['id_terapeuta']) {
                                              ?><a href="controller/crud/deleteUserAdjunto?id='<?php echo(base64_encode($var['id_ejercicio'])); ?>'" class="btn btn-danger"><i class="fa fa-eraser"></i></a><?php
                                            }else{echo("-");}
                                            ?>
                                          </td>
                                        </tr>
                                    <?php
                                  }
                                }else{
                                  echo("<tr><td colspan='5' class='text-center'>No ha asignado material<td></tr>");
                                }
                                ?>
                            </tbody>
                        </table>
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
  <!-- Modal Agregar -->
<div class="modal fade" id="modalAsignarEjercicio" tabindex="-1" aria-labelledby="modalAsignarEjercicioLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAsignarEjercicioLabel">Nuevo ejercicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/asignarAdjunto.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <input name="id_paciente" type="hidden" value="<?php echo($id); ?>" style="display:none;">
              <input name="id_terapeuta" type="hidden" value="<?php echo($_SESSION['id']); ?>" style="display:none;">
              <div class="col-12 col-sm-6 form-outline mb-4">
                  <label class="form-label" for="categoria_doc">Categoría</label>
                  <select class="form-select input-custom" id="categoria_doc" name="categoria_doc" required>
                    <option hidden value="">Categoría</option>
                    <?php
                    $sql="SELECT categoria_dependencia FROM dependencias GROUP BY categoria_dependencia";
                    $res=mysqli_query($conexion,$sql);
                    while($var=mysqli_fetch_array($res)){
                      echo("<option value='".$var['categoria_dependencia']."'>".$var['categoria_dependencia']."</option>");
                    }
                    ?>
                  </select>
              </div>
              <div class="col-12 col-sm-6 form-outline mb-4">
                  <label class="form-label" for="dependencia_doc">Sección</label>
                  <select class="form-select input-custom" id="dependencia_doc" name="dependencia_doc" required>
                    <option hidden value="">Selecciona la categoria</option>
                  </select>
              </div>
              <div class="col-12" id="adj_view">

              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary-custom"><i class="fa fa-plus"></i> Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php require_once("layout/footer.php"); ?>