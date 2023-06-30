<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
include('conexion.php');
$json = file_get_contents('php://input');
$obj = json_decode($json,true);
$id = $obj['idUsuario'];
$consulta = "SELECT usuarios.nombre,usuarios.tipo_usuario,pacientes.id_paciente,pacientes.fecha_nac,pacientes.curp,pacientes.diagnostico,pacientes.telefono_p,pacientes.correo_p,pacientes.url_foto_p,pacientes.id_apoyo_cuidador FROM usuarios INNER JOIN pacientes ON usuarios.idUsuario = pacientes.idUsuario WHERE usuarios.idUsuario= ?";
$resultado=$conexion->prepare($consulta);
$resultado->bind_param('i',$id);
$resultado->execute();
$resultado->bind_result($nombre,$tipo_usuario,$id_paciente,$fecha_nac,$curp,$diagnostico,$telefono_p,$correo_p,$url_foto_p,$id_apoyo_cuidador);
$result = $resultado->fetch();
if($result){
	$response->message='Login Matched';
	$response->nombre=$nombre;
	$response->tipo_usuario=$tipo_usuario;
	$response->id_paciente=$id_paciente;
	$response->fecha_nac=$fecha_nac;
	$response->curp=$curp;
	$response->diagnostico=$diagnostico;
	$response->telefono_p=$telefono_p;
	$response->correo_p=$correo_p;
	$response->url_foto_p=$url_foto_p;
	$response->id_apoyo_cuidador=$id_apoyo_cuidador;
	$SuccessMSG = json_encode($response);
	echo $SuccessMSG;
}else{
	$response->message='Usuario o contraseña incorrecto';
	$response->message='Sin definir';
	$response->nombre='Sin definir';
	$InvalidMSGJSon = json_encode($response);
	echo $InvalidMSGJSon;
}
 mysqli_close($conexion);
