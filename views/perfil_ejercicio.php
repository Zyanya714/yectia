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
                    <h3 class="titulo-seccion">Material</h3>
                  </div>
                </div>
                <?php
                include('controller/conexion.php');
                $id=$_GET['id'];
                $sql="SELECT * FROM documentos INNER JOIN dependencias ON documentos.id_dependencia=dependencias.id_dependencia WHERE documentos.id_adjunto=".$id;
                $res=mysqli_query($conexion,$sql);
                $var=mysqli_fetch_array($res);
                ?>
                <div class="row mt-2">
                    <div class="col-12 col-sm-12">
                        <h3 class="mt-4"><strong><?php echo($var['nombre_dependencia']." - ".$var['nombre_adj']); ?></strong></h3>
                        <div class="ratio ratio-16x9">
                            <?php $url=$var['url_adj'];$t_url=$var['tipo_adj'];
                            if($t_url=="Video"){
                              $id_url=explode('=',$url);
                              $src="https://www.youtube.com/embed/".$id_url[1];
                            }else{
                              $src=$url;
                            } 
                            echo("<iframe src='$src' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>");
                            ?>
                         </div>
                        <h5 class="mt-4"><strong><small><?php echo($var['descr_adj']); ?></small></strong></h5>
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