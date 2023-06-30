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
if(!empty($_GET["id"])){
    $id=base64_decode($_GET["id"]);
    $conexion->query("START TRANSACTION");
    $sql="SELECT id_paciente FROM `ejercicios` WHERE id_ejercicio = '".$id."'";
    $res_id_paciente = $conexion->query($sql);
    $id_paciente_row = $res_id_paciente->fetch_assoc();
    $id_paciente = $id_paciente_row['id_paciente'];
    $sql="DELETE FROM `ejercicios` WHERE id_ejercicio = '".$id."' LIMIT 1";
    $res_del = $conexion->query($sql);
    if($res_del==TRUE){
        $conexion->query("COMMIT");
        echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Ejercicio desasignado',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=".base64_encode('perfil_paciente')."&id=".base64_encode($id_paciente)."';}}) </script>");
    }else{
        $conexion->query("ROLLBACK");
        echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('perfil_paciente')."&id=".base64_encode($id_paciente)."'</script>";
    }
}
?>
</body>
</html>