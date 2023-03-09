<?php
session_start();if(!isset($_SESSION['id'])){header("location:/index.php");}
    include_once("../../conexion.php");
    $sql="SELECT * FROM terapeutas";
    $result = mysqli_query($conexion, $sql) or die("Error in Selecting " . mysqli_error($conexion));
    $emparray = array();
    while($row =mysqli_fetch_assoc($result)){$emparray[] = $row;}
    echo($row);
    $data=json_encode($emparray);
    echo '{"data":'.$data.'}';
    mysqli_close($conexion);
?>