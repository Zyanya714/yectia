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
include("../session_ck.php");
include('../conexion.php');
$nombre_doc=mysqli_real_escape_string($conexion,$_POST['nombre_doc']);
$tipo_doc=mysqli_real_escape_string($conexion,$_POST['tipo_doc']);
$url_doc=mysqli_real_escape_string($conexion,$_POST['url_doc']);
$dependencia_doc=mysqli_real_escape_string($conexion,$_POST['dependencia_doc']);
$desc_doc=mysqli_real_escape_string($conexion,$_POST['desc_doc']);
mysqli_query($conexion,"START TRANSACTION");
$sql="INSERT INTO `documentos`(`nombre_adj`, `tipo_adj`, `descr_adj`, `url_adj`, `id_dependencia`) 
VALUES ('".$nombre_doc."','".$tipo_doc."','".$desc_doc."','".$url_doc."','".$dependencia_doc."');";
$res1=mysqli_query($conexion,$sql);
if($res1 == TRUE) {
    mysqli_query($conexion,"COMMIT");
    echo("success");
    echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Ejercicio agregado correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=".base64_encode('ejercicios')."';}}) </script>");
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo("error");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('ejercicios')."'</script>";
}
?>
</body>
</html>