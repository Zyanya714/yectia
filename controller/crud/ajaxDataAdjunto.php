<?php
include('../config.php');
include('../conexion.php');
if(!empty($_POST["categoria"])){
    $query = "SELECT * FROM `documentos` INNER JOIN dependencias ON documentos.id_dependencia=dependencias.id_dependencia WHERE documentos.id_dependencia= '".$_POST['categoria']."'"; 
    $res = $conexion->query($query);
    $nrows=mysqli_num_rows($res);
    if($nrows>0){
      ?>
      <table class="table table-borderless table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">Seleccionar</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Descripción</th>
            <th scope="col">URL</th>
            <th scope="col">Ver</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($var=mysqli_fetch_array($res)){
            ?>
            <tr>
                <td class="text-center"><input class="form-check-input" name="id_adjunto[]" type="checkbox" value="<?php echo($var['id_adjunto']); ?>" id="ck_adj_<?php echo($var['id_adjunto']); ?>"></td>
                <td><?php echo($var['nombre_adj']); ?></td>
                <td><?php echo($var['tipo_adj']); ?></td>
                <td><?php echo($var['descr_adj']); ?></td>
                <td><?php echo($var['url_adj']); ?></td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMostrarAdjunto" data-bs-titulo="<?php echo(base64_encode($var['nombre_adj'])); ?>" data-bs-content="<?php echo(base64_encode($var['url_adj'])); ?>"><i class="fa fa-external-link-alt"></i></button></td>
            </tr>
            <?php
          }
          ?>
        </tbody>
      </table>
      <?php
    }else{
      ?>
      <div class='col-12 col-sm-6 show px-2 py-3'><h4 class="text-muted">Sin material disponible</h4><h6>Revise el apartado de ejercicios donde encontrara los materiales disponibles</h6></div>
      <?php
    }
    ?>
    </div>
    <?php
}
?>