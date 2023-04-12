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
                <h3 class="mt-4 titulo-seccion">Ejercicios</h3>
                <?php
                include('controller/conexion.php');
                $sql="SELECT id_dependencia FROM `dependencias`";
                $res=mysqli_query($conexion,$sql);
                while($var_dep=mysqli_fetch_array($res)){
                  $cantidad_dependencias[]=$var_dep['id_dependencia'];
                }
                ?>
                <div class="table-responsive px-2">
                  <table class="table table-borderless table-striped table-hover table-collapse">
                    <thead>
                      <tr>
                        <th id="th-ejercicios_1" style="border-bottom: 4px solid var(--complementario);"><a class="titulo-ejercicios" onclick="tituloActivo(1);subTituloActivo(<?php echo('0,['.implode(',',$cantidad_dependencias).']'); ?>);" href="#"><h5><i class="fa fa-walking"></i> T. Física</h5></a></th>                
                        <th id="th-ejercicios_2"><a class="titulo-ejercicios" onclick="tituloActivo(2);subTituloActivo(<?php echo('0,['.implode(',',$cantidad_dependencias).']'); ?>);" href="#"><h5><i class="fa fa-puzzle-piece"></i> T. Ocupacional</h5></a></th>
                        <th id="th-ejercicios_3"><a class="titulo-ejercicios" onclick="tituloActivo(3);subTituloActivo(<?php echo('0,['.implode(',',$cantidad_dependencias).']'); ?>);" href="#"><h5><i class="fa fa-bullhorn"></i> T. Lenguaje</h5></a></th>
                        <th id="th-ejercicios_4"><a class="titulo-ejercicios" onclick="tituloActivo(4);subTituloActivo(<?php echo('0,['.implode(',',$cantidad_dependencias).']'); ?>);" href="#"><h5><i class="fa fa-drumstick-bite"></i> Deglución</h5></a></th>
                        <th id="th-ejercicios_5"><a class="titulo-ejercicios" onclick="tituloActivo(5);subTituloActivo(<?php echo('0,['.implode(',',$cantidad_dependencias).']'); ?>);" href="#"><h5><i class="fa fa-brain"></i> Neuropsicología</h5></a></th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div class="container">
                  <div class="row" id="row-categoria-ejercicio-1">
                    <?php
                    $sql="SELECT * FROM `dependencias` WHERE dependencias.categoria_dependencia='Terapia Física'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                    ?>
                    <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="subTituloActivo(<?php echo($var['id_dependencia'].',['.implode(',',$cantidad_dependencias).']'); ?>)">
                      <div class="card h-100 text-center">
                        <img src="<?php echo($var['url_img_dependencia']); ?>" class="card-img-top fondo-categoria" alt="<?php echo($var['nombre_dependencia']); ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo($var['nombre_dependencia']); ?></h5>
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
                  <div class="row" id="row-categoria-ejercicio-2" style="display:none;">
                    <?php
                    $sql="SELECT * FROM `dependencias` WHERE dependencias.categoria_dependencia='Terapia Ocupacional'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                    ?>
                    <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="subTituloActivo(<?php echo($var['id_dependencia'].',['.implode(',',$cantidad_dependencias).']'); ?>)">
                      <div class="card h-100 text-center">
                        <img src="<?php echo($var['url_img_dependencia']); ?>" class="card-img-top fondo-categoria" alt="<?php echo($var['nombre_dependencia']); ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo($var['nombre_dependencia']); ?></h5>
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
                  <div class="row" id="row-categoria-ejercicio-3" style="display:none;">
                    <?php
                    $sql="SELECT * FROM `dependencias` WHERE dependencias.categoria_dependencia='Terapia de lenguaje'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                    ?>
                    <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="subTituloActivo(<?php echo($var['id_dependencia'].',['.implode(',',$cantidad_dependencias).']'); ?>)">
                      <div class="card h-100 text-center">
                        <img src="<?php echo($var['url_img_dependencia']); ?>" class="card-img-top fondo-categoria" alt="<?php echo($var['nombre_dependencia']); ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo($var['nombre_dependencia']); ?></h5>
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
                  <div class="row" id="row-categoria-ejercicio-4" style="display:none;">
                    <?php
                    $sql="SELECT * FROM `dependencias` WHERE dependencias.categoria_dependencia='Deglución'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                    ?>
                    <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="subTituloActivo(<?php echo($var['id_dependencia'].',['.implode(',',$cantidad_dependencias).']'); ?>)">
                      <div class="card h-100 text-center">
                        <img src="<?php echo($var['url_img_dependencia']); ?>" class="card-img-top fondo-categoria" alt="<?php echo($var['nombre_dependencia']); ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo($var['nombre_dependencia']); ?></h5>
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
                  <div class="row" id="row-categoria-ejercicio-5" style="display:none;">
                    <?php
                    $sql="SELECT * FROM `dependencias` WHERE dependencias.categoria_dependencia='Neuropsicología'";
                    $res=mysqli_query($conexion,$sql);
                    if($res==TRUE){
                      while($var=mysqli_fetch_array($res)){
                    ?>
                    <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="subTituloActivo(<?php echo($var['id_dependencia'].',['.implode(',',$cantidad_dependencias).']'); ?>)">
                      <div class="card h-100 text-center">
                        <img src="<?php echo($var['url_img_dependencia']); ?>" class="card-img-top fondo-categoria" alt="<?php echo($var['nombre_dependencia']); ?>">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo($var['nombre_dependencia']); ?></h5>
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
                    <?php
                    foreach ($cantidad_dependencias as $key => $value) {
                      $sql="SELECT * FROM `documentos` INNER JOIN dependencias ON documentos.id_dependencia=dependencias.id_dependencia WHERE documentos.id_dependencia='$value'";
                      $res=mysqli_query($conexion,$sql);
                      $nrows=mysqli_num_rows($res);
                      $sql_dependencia="SELECT nombre_dependencia FROM dependencias WHERE id_dependencia='$value'";
                      $res_dependencia=mysqli_query($conexion,$sql_dependencia);
                      $var_dependencia=mysqli_fetch_array($res_dependencia);
                      $nombre_dependencia=$var_dependencia['nombre_dependencia'];
                      ?>
                      <div class="row" id="row-ejercicio-<?php echo($value); ?>" style='display:none;'>
                      <div class="col-12"><h3><?php echo($nombre_dependencia); ?></h3></div>
                      <?php
                      if($nrows>0){
                        $var=mysqli_fetch_array($res);
                        $tipo_adj=$var['tipo_adj'];
                        ?>
                          <div class="col-12 col-sm-3" style="cursor: pointer;">
                            <div class="card h-100 text-center">
                              <div class="card-img-top fondo-categoria"><i class="fa fa-2x <?php if($tipo_adj=='Video'){echo('fa-play-circle');}elseif($tipo_adj=='Infografia'){echo('fa-file-alt');}elseif($tipo_adj=='Podcast'){echo('fa-microphone-alt');}else{echo('fa-question-circle');} ?> mt-5"></i></div>
                              <div class="card-body">
                                <h5 class="card-title"><?php echo($var['nombre_adj']); ?></h5>
                                <!-- <p class="card-text"><small><?php echo($var['descr_adj']); ?></small></p> -->
                              </div>
                            </div>
                          </div>
                        <?php
                      }else{
                        ?>
                        <div class='col-12 col-sm-6 show px-2 py-3'><h4 class="text-muted">Sin dato</h4></div>
                        <?php
                      }
                      ?>
                      </div>
                      <?php
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
  <?php require_once("layout/footer.php"); ?>