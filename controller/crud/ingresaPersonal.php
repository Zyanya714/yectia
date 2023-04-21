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
$nombre_tera=mysqli_real_escape_string($conexion,$_POST['nombre_tera']);
$num_tera=mysqli_real_escape_string($conexion,$_POST['num_tera']);
$tipo_tera=mysqli_real_escape_string($conexion,$_POST['tipo_tera']);
$cargo_tera=mysqli_real_escape_string($conexion,$_POST['cargo_tera']);
$telefono_tera=mysqli_real_escape_string($conexion,$_POST['telefono_tera']);
$correo_tera=mysqli_real_escape_string($conexion,$_POST['correo_tera']);
$usu_tera=mysqli_real_escape_string($conexion,$_POST['usu_tera']);
$pass_tera=mysqli_real_escape_string($conexion,$_POST['pass_tera']);
mysqli_query($conexion,"START TRANSACTION");
$sql="INSERT INTO `usuarios`(`nombre`, `usu`, `pass`, `tipo_usuario`) VALUES ('".$nombre_tera."','".$usu_tera."','".$pass_tera."','2');";
$res1=mysqli_query($conexion,$sql);
$idUsuario=mysqli_insert_id($conexion);
if (isset($_FILES["foto_tera"])) {
    $nombre_base = $_FILES["foto_tera"]["name"];
    $temp = explode(".", $nombre_base);
    $nombre_final = 'FOTO_'.$idUsuario.'.'. end($temp);
    $ruta = "views/img/tera/" . $nombre_final;
    $ruta_completa = "../../views/img/tera/" . $nombre_final;
    $subirarchivo = move_uploaded_file($_FILES["foto_tera"]["tmp_name"], $ruta_completa);
    }else{
        echo('Sin archivo adjunto');
    }
$sql="INSERT INTO `terapeutas`(`area`, `cargo`, `n_empleado`, `email`, `tel`, `url_foto`, `idUsuario`) VALUES ('".$tipo_tera."','".$cargo_tera."','".$num_tera."','".$correo_tera."','".$telefono_tera."','".$ruta."','".$idUsuario."');";
$res2=mysqli_query($conexion,$sql);
if($res1 == TRUE && $res2 == TRUE && $subirarchivo == TRUE) {
    mysqli_query($conexion,"COMMIT");
    echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Terapeuta [$nombre_tera] agregado correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=".base64_encode('personal')."';}}) </script>");
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('personal')."'</script>";
}
?>
  </body>
</html>