<?php if(isset($_SESSION['nombre'])){$boton_header_1="display:none;";$boton_header_2="";}else{$boton_header_1="";$boton_header_2="display:none;";} ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Telerehabilitación
  </title>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="views/css/main.css?version=<?= time(); ?>">
  <script src="controller/js/main.js?version=<?= time(); ?>"></script>
</head>

<body>
<span class="screen-darken"></span>
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg shadow-none sticky-top bg-main" id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <button data-trigger="navbar_main" class="d-lg-none btn btn-outline-dark" type="button"><i class="fa fa-bars"></i></button>
        <img class="img-fluid" style="height:50px;" src="views/img/logo.png" alt="Yêctia">
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav justify-content-end">
          <li class="nav-item d-flex align-items-center ">
            <a href="#" class="btn btn-lg btn-danger text-white btn-danger-custom" style="<?php echo($boton_header_1); ?>">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Iniciar sesión</span>
            </a>
            <div class="dropdown" style="<?php echo($boton_header_2); ?>">
              <button class="btn btn-lg text-white btn-danger-custom dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user me-sm-1"></i> <?php echo($_SESSION['nombre']); ?>
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"><i class="fa fa-user-edit"></i> Ver perfil</a></li>
                <li><a class="dropdown-item" href="controller/logout.php"><i class="fa fa-power-off"></i> Cerrar sesión</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->