<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include('../config.php');
include('../conexion.php');
$nombre_tera=mysqli_real_escape_string($conexion,$_POST['nombre_tera']);
$num_tera=mysqli_real_escape_string($conexion,$_POST['num_tera']);
$tipo_tera=mysqli_real_escape_string($conexion,$_POST['tipo_tera']);
$cargo_tera=mysqli_real_escape_string($conexion,$_POST['cargo_tera']);
$telefono_tera=mysqli_real_escape_string($conexion,$_POST['telefono_tera']);
$correo_tera=mysqli_real_escape_string($conexion,$_POST['correo_tera']);

$nombre_base = basename($_FILES["file"]["name"]); 
$nombre_final = date("d-m-y"). "-" . $nombre_base; 
$ruta = "views/img/tera/" . $nombre_final; 
$subirarchivo = move_uploaded_file($_FILES["file"]["tmp_name"], $ruta);

$usu_tera=mysqli_real_escape_string($conexion,$_POST['usu_tera']);
$pass_tera=mysqli_real_escape_string($conexion,$_POST['pass_tera']);
mysqli_query($conexion,"START TRANSACTION");
$sql="INSERT INTO `usuarios`(`nombre`, `usu`, `pass`, `tipo_usuario`) VALUES ('".$nombre_tera."','".$usu_tera."','".$pass_tera."','2');";
$res1=mysqli_query($conexion,$sql);
$sql="INSERT INTO `terapeutas`(`area`, `cargo`, `n_empleado`, `email`, `tel`, `url_foto`, `idUsuario`) VALUES ('".$tipo_tera."','".$cargo_tera."','".$num_tera."','".$correo_tera."','".$telefono_tera."','".$ruta."','".mysqli_insert_id($conexion)."');";
$res2=mysqli_query($conexion,$sql);
if($res1 == TRUE && $res2 == TRUE && $subirarchivo == TRUE) {
    mysqli_query($conexion,"COMMIT");
    echo("<script type='text/javascript'> Swal.fire({icon: 'success',title: 'Terapeuta [$nombre_tera] agregado correctamente',showCancelButton: false,confirmButtonText: `Aceptar`,}).then((result) => {if (result.isConfirmed){document.location.href='../../index.php?mdl=".base64_encode('personal')."';}}) </script>");
}else{
    mysqli_query($conexion,"ROLLBACK");
    echo "<script language='javascript'>alert('Error ".$conexion->error."');document.location.href='../../index.php?mdl=".base64_encode('personal')."</script>";
}
?>