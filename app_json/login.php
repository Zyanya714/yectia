<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('content-type: application/json; charset=utf-8');
include('conexion.php');
$json = file_get_contents('php://input');
$obj = json_decode($json,true);
$email = $obj['email'];
$password = $obj['password'];
if (isset($email) && isset($password)) {
	$consulta = "SELECT idUsuario, nombre FROM usuarios WHERE tipo_usuario=3 AND usu= ? AND pass= ?";
$resultado=$conexion->prepare($consulta);
$resultado->bind_param('ss',$email,$password);
$resultado->execute();
$resultado->bind_result($idUsuario, $nombre);
$result = $resultado->fetch();
if(!empty($nombre) && !empty($idUsuario)){
	$response->conectado=true;
	$response->message='Inicio correcto';
	$response->idUsuario=$idUsuario;
	$response->nombre=$nombre;
	$SuccessMSG = json_encode($response);
	echo $SuccessMSG;
}else{
	$response->conectado=false;
	$response->message='Usuario o contraseña incorrecto';
	$response->idUsuario=null;
	$response->nombre='Sin definir';
	$InvalidMSGJSon = json_encode($response);
	echo $InvalidMSGJSon;
}
}else {
	$response->conectado=false;
	$response->message='No se obtuvo Usuario o contraseña';
	$response->idUsuario=null;
	$response->nombre='Sin respuesta';
	$InvalidMSGJSon = json_encode($response);
	echo $InvalidMSGJSon;
}
 mysqli_close($conexion);
