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
$id_adj=$_POST['id_adjunto'];
$id_paciente=mysqli_real_escape_string($conexion,$_POST['id_paciente']);
$dependencia_doc=mysqli_real_escape_string($conexion,$_POST['id_terapeuta']);
mysqli_query($conexion,"START TRANSACTION");
foreach ($id_adj as $value) {
    $sql.="INSERT INTO `ejercicios`(`id_paciente`, `id_terapeuta`, `id_adjunto`) VALUES ('".$id_paciente."','".$dependencia_doc."','".$value."');";
}
$res1=mysqli_query($conexion,$sql);
if($res1 == TRUE) {
    mysqli_query($conexion,"COMMIT");
    echo("success");
    echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Ejercicio agregado correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=".base64_encode('perfil_paciente')."&id=".base64_encode($id_paciente)."';}}) </script>");
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo("error");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('perfil_paciente')."&id=".base64_encode($id_paciente)."'</script>";
}
?>
</body>
</html>