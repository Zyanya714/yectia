<?php
//ini_set('display_errors', 1);error_reporting(~0);
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
date_default_timezone_set("America/Mazatlan");
include('conexion.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id = $obj['idUsuario'];
$hoy= new DateTime();
$consulta = "UPDATE ejercicios SET visto_adj='1',date_view='".$hoy->format('Y-m-d H:i:s')."' WHERE id_ejercicio = '$id' ";
$result = mysqli_query($conexion, $consulta);
if($result==TRUE){
    echo '{"data_exer":true,"msg":"'.$consulta.'"}';
}else{
    echo '{"data_exer":false,"msg":"'.$conexion->error.'"}';
}
mysqli_close($conexion);
