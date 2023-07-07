<?php
//ini_set('display_errors', 1);error_reporting(~0);
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
include('conexion.php');
$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$id = $obj['idUsuario'];
//$id = 2;
$consulta = "SELECT id_paciente FROM pacientes WHERE idUsuario= ? ";
$resultado = $conexion->prepare($consulta);
$resultado->bind_param('i', $id);
$resultado->execute();
$resultado->bind_result($id_paciente);
$resultado->fetch();
$id = $id_paciente;
$resultado->close();
$consulta = "SELECT ejercicios.id_ejercicio,ejercicios.date,ejercicios.id_adjunto,ejercicios.visto_adj,documentos.nombre_adj,documentos.tipo_adj,documentos.descr_adj,documentos.url_adj,dependencias.id_dependencia,dependencias.categoria_dependencia,dependencias.nombre_dependencia,dependencias.url_img_dependencia FROM pacientes 
LEFT JOIN ejercicios ON pacientes.id_paciente = ejercicios.id_paciente 
LEFT JOIN documentos ON ejercicios.id_adjunto = documentos.id_adjunto 
LEFT JOIN dependencias ON documentos.id_dependencia = dependencias.id_dependencia 
WHERE pacientes.id_paciente= $id;";
$result = mysqli_query($conexion, $consulta) or die("Error in Selecting " . mysqli_error($conexion));
$emparray = array();
while($row =mysqli_fetch_assoc($result)){$emparray[] = $row;}
$data=json_encode($emparray);
echo '{"data_exer":'.$data.'}';
mysqli_close($conexion);
