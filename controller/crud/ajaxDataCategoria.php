<?php
include('../config.php');
include('../conexion.php');
if(!empty($_POST["categoria"])){
    $query = "SELECT id_dependencia,nombre_dependencia FROM dependencias WHERE categoria_dependencia = '".$_POST['categoria']."' ORDER BY categoria_dependencia ASC"; 
    $result = $conexion->query($query);
    if($result->num_rows > 0){
        echo '<option hidden value="">Sección</option>';
        while($row = $result->fetch_assoc()){
            echo '<option value="'.$row['id_dependencia'].'">'.$row['nombre_dependencia'].'</option>';
        }
    }else{
        echo '<option value="">Sección no disponible</option>'; 
    }
}
?>