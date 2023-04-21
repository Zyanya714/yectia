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
$nombre_paciente=mysqli_real_escape_string($conexion,$_POST['nombre_paciente']);
$fnac_paciente=mysqli_real_escape_string($conexion,$_POST['fnac_paciente']);
$curp_paciente=mysqli_real_escape_string($conexion,$_POST['curp_paciente']);
$telefono_paciente=mysqli_real_escape_string($conexion,$_POST['telefono_paciente']);
$correo_paciente=mysqli_real_escape_string($conexion,$_POST['correo_paciente']);
$diag_paciente=mysqli_real_escape_string($conexion,$_POST['diag_paciente']);
$usu_paciente=mysqli_real_escape_string($conexion,$_POST['usu_paciente']);
$pass_paciente=mysqli_real_escape_string($conexion,$_POST['pass_paciente']);
mysqli_query($conexion,"START TRANSACTION");
$sql="INSERT INTO `usuarios`(`nombre`, `usu`, `pass`, `tipo_usuario`) VALUES ('".$nombre_paciente."','".$usu_paciente."','".$pass_paciente."','3');";
$res1=mysqli_query($conexion,$sql);
$idUsuario=mysqli_insert_id($conexion);
if (isset($_FILES["foto_paciente"])) {
    $nombre_base = $_FILES["foto_paciente"]["name"];
    $temp = explode(".", $nombre_base);
    $nombre_final = 'FOTO_'.$idUsuario.'.'. end($temp);
    $ruta = "views/img/paciente/" . $nombre_final;
    $ruta_completa = "../../views/img/paciente/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["foto_paciente"]["tmp_name"], $ruta_completa);
    }else{
        echo('Sin archivo adjunto');
    }
$sql="INSERT INTO `pacientes`(`idUsuario`, `fecha_nac`, `curp`, `diagnostico`, `telefono_p`, `correo_p`, `url_foto_p`) VALUES ('".$idUsuario."','".$fnac_paciente."','".$curp_paciente."','".$diag_paciente."','".$telefono_paciente."','".$correo_paciente."','".$ruta."');";
$res2=mysqli_query($conexion,$sql);
if($res1 == TRUE && $res2 == TRUE && $subirarchivo == TRUE) {
    mysqli_query($conexion,"COMMIT");
    ?>
    <script language='javascript'> Swal.fire({icon: 'success',title: 'Paciente [<?php echo($nombre_paciente); ?>] agregado correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {document.location.href='../../index.php?mdl=<?php echo(base64_encode('list_pacientes')); ?>';}); </script>
    <?php
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('list_pacientes')."'</script>";
}
?>
  </body>
</html>
