<?php
include('../config.php');
include('../conexion.php');
if(!empty($_POST["id"])){
        $tipo_usuario=$_POST['tu'];
        $id=$_POST['id'];
        $conexion->query("START TRANSACTION");
    if($tipo_usuario=="3"){$query = "SELECT idUsuario,url_foto_p FROM pacientes WHERE id_paciente = '".$id."'";
    }elseif($tipo_usuario=="2"){$query = "SELECT idUsuario,url_foto FROM terapeutas WHERE id_terapeuta = '".$id."'";}
    $res = $conexion->query($query);
    if($res == TRUE){
        $row_usuarios = $res->fetch_assoc();
        $idUsuario=$row_usuarios['idUsuario'];
        if($tipo_usuario=="3"){$url=$row_usuarios['url_foto_p'];}elseif($tipo_usuario=="2"){$url=$row_usuarios['url_foto'];}
        $sql="DELETE FROM `usuarios` WHERE idUsuario = '".$idUsuario."'";
        $res_del = $conexion->query($sql);
        if($res_del==TRUE){
            $url_complete="../../".$url;
            if(file_exists($url_complete)){
                if(unlink($url_complete)){
                    $conexion->query("COMMIT");echo('success');
                }else{
                    $conexion->query("ROLLBACK");echo('Error se encontró el archivo pero no se pudo eliminar: '.$url);
                }
            }else{
                $conexion->query("ROLLBACK");echo('Error no se encuentra el archivo: '.$url);
            }
        }else{
            $conexion->query("ROLLBACK");echo('Error al eliminar: '.$conexion->error);
        }
    }else{$conexion->query("ROLLBACK");echo('Error: '.$conexion->error);}
}
?>