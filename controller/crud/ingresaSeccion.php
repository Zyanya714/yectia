<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
<?php
include('../config.php');
include('../conexion.php');
$categoria_doc=mysqli_real_escape_string($conexion,$_POST['categoria_doc']);
$nombre_dependencia=mysqli_real_escape_string($conexion,$_POST['nombre_dependencia']);
mysqli_query($conexion,"START TRANSACTION");
$sql="INSERT INTO `dependencias`(`categoria_dependencia`, `nombre_dependencia`) VALUES ('".$categoria_doc."','".$nombre_dependencia."');";
$res1=mysqli_query($conexion,$sql);
$idSeccion=mysqli_insert_id($conexion);
if (isset($_FILES["foto_categoria"])) {
    $nombre_base = $_FILES["foto_categoria"]["name"];
    $temp = explode(".", $nombre_base);
    $nombre_final = 'IMG_'.$idSeccion.'.'. end($temp);
    $ruta = "views/img/sec/" . $nombre_final;
    $ruta_completa = "../../views/img/sec/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["foto_categoria"]["tmp_name"], $ruta_completa);
    echo('success');
    }else{
        echo('Sin archivo adjunto');
    }
$sql="UPDATE `dependencias` SET `url_img_dependencia`='".$ruta."' WHERE `id_dependencia`='".$idSeccion."';";
$res2=mysqli_query($conexion,$sql);
if($res1 == TRUE && $res2 == TRUE && $subirarchivo == TRUE){
    mysqli_query($conexion,"COMMIT");
    ?>
    <script> Swal.fire({icon: 'success',title: 'Sección agregada correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=<?php echo(base64_encode('ejercicios')); ?>';}}) </script>
    <?php
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('ejercicios')."'</script>";
}
?>
  </body>
</html>