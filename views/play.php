<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Ejercicio</title>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
        include('../controller/config.php');
        include('../controller/conexion.php');
        $id=base64_decode($_GET['ctn']);
        $sql="SELECT * FROM documentos INNER JOIN dependencias ON documentos.id_dependencia=dependencias.id_dependencia WHERE documentos.id_adjunto=".$id;
        $res=mysqli_query($conexion,$sql);
        $var=mysqli_fetch_array($res);
        $url=$var['url_adj'];
    ?>
      <?php echo($url); ?>
    
  </body>
  <script>
    $(document).ready(function(){
      container_ejercicio=document.getElementsByClassName("container-wrapper-genially");
      //container_ejercicio.style="display:none"
    });
  </script>
</html>
