<?php
include('../config.php');
include('../conexion.php');
if(!empty($_POST["id"])){
        $tipo_usuario=$_POST['tu'];
        $id=$_POST['id'];
    if($tipo_usuario=="3"){$query = "SELECT idUsuario FROM pacientes WHERE id_paciente = '".$id."'";
    }elseif($tipo_usuario=="2"){$query = "SELECT idUsuario FROM terapeutas WHERE id_terapeuta = '".$id."'";}
    $res = $conexion->query($query);
    if($res == TRUE){
        $row_usuarios = $res->fetch_assoc();
        $idUsuario=$row_usuarios['idUsuario'];
        $sql="DELETE FROM `usuarios` WHERE idUsuario = '".$idUsuario."'";
        $res_del = $conexion->query($sql);
        if($res_del==TRUE){echo('success');}else{echo('Error al eliminar: '.$conexion->error);}
    }else{echo('Error: '.$conexion->error);}
}
?>