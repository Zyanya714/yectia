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
                        while($var=mysqli_fetch_array($res)){
                          $tipo_adj=$var['tipo_adj'];
                          $id_adjunto=$var['id_adjunto'];
                          $url=$id_adjunto.",'".base64_encode('perfil_ejercicio')."'";
                          ?>
                            <div class="col-12 col-sm-3" style="cursor: pointer;" onclick="mostrarEjercicio(<?php echo($url); ?>);">
                              <div class="card h-100 text-center">
                              <?php 
                              if($tipo_adj=='Video'){
                                $url_adj=$var['url_adj'];
                                $vid=explode('=',$url_adj);
                                $preview="<img src='https://img.youtube.com/vi/".$vid[1]."/0.jpg' class='card-img-top fondo-categoria' alt=''>";
                                }elseif($tipo_adj=='Infografia'){
                                  $preview="<div class='card-img-top fondo-categoria'><i class='fa fa-2x fa-file-alt mt-5'></i></div>";
                                }elseif($tipo_adj=='Podcast'){
                                  $preview="<div class='card-img-top fondo-categoria'><i class='fa fa-2x fa-microphone-alt mt-5'></i></div>";
                                }else{$preview="<div class='card-img-top fondo-categoria'><i class='fa fa-2x fa-question-circle mt-5'></i></div>";}
                                ?>
                                <?php echo($preview); ?>
                                <div class="card-body">
                                  <h5 class="card-title"><?php echo($var['nombre_adj']); ?></h5>
                                  <!-- <p class="card-text"><small><?php echo($var['descr_adj']); ?></small></p> -->
                                </div>
                              </div>
                            </div>
                          <?php 
                        }
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
                <div class="container">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalAgregarEjercicio">
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
<div class="modal fade" id="modalAgregarEjercicio" tabindex="-1" aria-labelledby="modalAgregarEjercicioLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAgregarEjercicioLabel">Nuevo ejercicio</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/ingresaAdjunto.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 form-outline mb-4">
                  <label class="form-label" for="nombre_doc">Nombre de documento</label>
                  <input type="text" id="nombre_doc" name="nombre_doc" placeholder="Nombre" class="form-control input-custom" required/>
              </div>
              <div class="col-12 col-sm-4 form-outline mb-4">
                  <label class="form-label" for="tipo_doc">Tipo documento</label>
                  <select class="form-select input-custom" id="tipo_doc" name="tipo_doc" required>
                    <option hidden value="">Tipo</option>
                    <option>Video</option>
                    <option>Podcast</option>
                    <option>Infografia</option>
                    <option>Otro</option>
                  </select>
              </div>
              <div class="col-12 col-sm-8 form-outline mb-4">
                  <label class="form-label" for="url_doc">URL</label>
                  <input type="text" id="url_doc" name="url_doc" placeholder="URL" class="form-control input-custom" required/>
              </div>
              <div class="col-12 col-sm-4 form-outline mb-4">
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
              <div class="col-12 col-sm-7 form-outline mb-4">
                  <label class="form-label" for="dependencia_doc">Sección</label>
                  <select class="form-select input-custom" id="dependencia_doc" name="dependencia_doc" required>
                    <option hidden value="">Selecciona la categoria</option>
                  </select>
              </div>
              <div class="col-12 col-sm-1 form-outline mb-4">
                  <label class="form-label" for="dependencia_doc">Agregar</label>
                  <button type="button" class="form-control btn btn-primary-custom" data-bs-target="#modalAgregarCategoria" data-bs-toggle="modal"><i class="fa fa-plus-square"></i></button>
              </div>
              <div class="col-12 col-sm-12 form-outline mb-4">
                  <label class="form-label" for="desc_doc">Descripción</label>
                  <input type="text" id="desc_doc" name="desc_doc" placeholder="Descripción" class="form-control input-custom" required/>
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
<!-- Modal Agregar Categoría -->
<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="modalAgregarCategoriaLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAgregarCategoriaLabel">Nuevo sección</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/ingresaSeccion.php" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6 form-outline mb-4">
                  <label class="form-label" for="categoria_dependencia">Nombre de categoría</label>
                  <select class="form-select input-custom" id="categoria_doc" name="categoria_doc" required>
                    <option hidden value="">Categoría</option>
                    <?php
                    $sql="SELECT categoria_dependencia FROM dependencias GROUP BY categoria_dependencia";
                    $res=mysqli_query($conexion,$sql);
                    while($var=mysqli_fetch_array($res)){
                      echo("<option>".$var['categoria_dependencia']."</option>");
                    }
                    ?>
                  </select>
              </div>
              <div class="col-12 col-sm-6 form-outline mb-4">
                  <label class="form-label" for="nombre_dependencia">Nombre de sección</label>
                  <input type="text" id="nombre_dependencia" name="nombre_dependencia" placeholder="Nombre" class="form-control input-custom" required/>
              </div>
              <div class="col-12 col-sm-12">
                <h3 class="azul text-center mt-2">Agregar foto</h3>
                <div class="profile-pic">
                  <label class="-label" for="foto_categoria">
                    <span class="fa fa-plus"></span>
                  </label>
                  <input id="foto_categoria" accept="image/*" capture="camera" type="file" name="foto_categoria" onchange="loadFile(event)" required/>
                  <img src="views/img/fonto_usuario.png" id="output" width="200" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" href="#modalAgregarEjercicio" role="button">Cancelar</button>
          <button type="submit" onclick="checkImgCategoria();" class="btn btn-primary-custom"><i class="fa fa-plus"></i> Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php require_once("layout/footer.php"); ?>