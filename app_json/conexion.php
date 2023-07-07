<?php
header('Access-Control-Allow-Origin: *');
//ini_set('display_errors', 1);error_reporting(~0);
$hostname = "localhost";
$username = "u623085899_yectia";
$password = "Hraei123@";
$database = "u623085899_yectia";
$conexion = new mysqli("$hostname","$username","$password","$database");
$conexion ->set_charset('utf8');
?>