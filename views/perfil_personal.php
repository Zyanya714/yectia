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
                </div>
                <?php
                include('controller/conexion.php');
                $id=base64_decode($_GET['id']);
                $sql="SELECT * FROM usuarios INNER JOIN terapeutas ON usuarios.idUsuario=terapeutas.idUsuario WHERE terapeutas.id_terapeuta=".$id;
                $res=mysqli_query($conexion,$sql);
                $var=mysqli_fetch_array($res);
                ?>
                <div class="row mt-2">
                    <div class="col-12 col-sm-8">
                        <h3 class="mt-4"><strong><?php echo($var['nombre']); ?></strong></h3>
                        <h4 class="mt-4"><strong><?php echo($var['cargo']); ?></strong></h4>
                        <h5 class="mt-4">Núm de empleado: <strong><?php echo($var['n_empleado']); ?></strong></h5>
                        <h5 class="mt-4">Teléfono: <strong><?php echo($var['tel']); ?></strong></h5>
                        <h5 class="mt-4">Correo electrónico: <strong><?php echo($var['email']); ?></strong></h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <img src="<?php echo($var['url_foto']); ?>" class="img-thumbnail" alt="<?php echo($var['nombre']); ?>">
                    </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-12">
                    <h4 class="titulo-seccion">Pacientes con material asignado</h4>
                  </div>
                  <div class="col-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped table-hover bg-table-custom">
                            <thead class="bg-main text-white">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Paciente</th>
                                  <th scope="col">Nombre ejercicio</th>
                                  <th scope="col">Tipo ejercicio</th>
                                  <th scope="col">Fecha asignación</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql="SELECT * FROM ejercicios INNER JOIN terapeutas ON ejercicios.id_terapeuta=terapeutas.id_terapeuta INNER JOIN pacientes ON ejercicios.id_paciente=pacientes.id_paciente 
                                INNER JOIN usuarios ON usuarios.idUsuario=pacientes.idUsuario INNER JOIN documentos ON documentos.id_adjunto=ejercicios.id_adjunto WHERE terapeutas.id_terapeuta=".$id;
                                $res=mysqli_query($conexion,$sql);
                                $n_var=mysqli_num_rows($res);
                                if ($n_var>0) {
                                  while ($var=mysqli_fetch_array($res)) {
                                    ?>
                                    <tr>
                                      <td><?php echo($var['id_ejercicio']); ?></td>
                                      <td><?php echo($var['nombre']); ?></td>
                                      <td><?php echo($var['nombre_adj']); ?></td>
                                      <td><?php echo($var['tipo_adj']); ?></td>
                                      <td><?php $date=new DateTime($var['date']); echo($date->format('Y/m/d - h:m a')); ?></td>
                                    </tr>
                                    <?php
                                  }
                                }else{
                                  echo("<tr><td colspan='5' class='text-center'>No ha asignado ejercicios a ningún paciente<td></tr>");
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
  <?php require_once("layout/footer.php"); ?>