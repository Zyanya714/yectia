<?php require_once("layout/header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-12">
      <?php require_once("layout/sidenav.php"); ?>
      </div>
      <div class="col-md-10 col-12">
        <div class="container-fluid py-4">
          <div class="card box-content">
            <div class="card-body p-3">
              <div class="container px-4">
                <h3 class="mt-4 titulo-seccion">Ejercicios</h3>                
                <div class="table-responsive px-2">
                  <table class="table table-borderless table-striped table-hover table-collapse">
                    <thead>
                      <tr>
                        <th id="th-ejercicios_1" style="border-bottom: 4px solid var(--complementario);"><a class="titulo-ejercicios" onclick="tituloActivo(1)" href="#"><h5><i class="fa fa-walking"></i> T. Física</h5></a></th>                
                        <th id="th-ejercicios_2"><a class="titulo-ejercicios" onclick="tituloActivo(2)" href="#"><h5><i class="fa fa-puzzle-piece"></i> T. Ocupacional</h5></a></th>
                        <th id="th-ejercicios_3"><a class="titulo-ejercicios" onclick="tituloActivo(3)" href="#"><h5><i class="fa fa-bullhorn"></i> T. Lenguaje</h5></a></th>
                        <th id="th-ejercicios_4"><a class="titulo-ejercicios" onclick="tituloActivo(4)" href="#"><h5><i class="fa fa-drumstick-bite"></i> Deglución</h5></a></th>
                        <th id="th-ejercicios_5"><a class="titulo-ejercicios" onclick="tituloActivo(5)" href="#"><h5><i class="fa fa-brain"></i> Neuropsicología</h5></a></th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once("layout/footer.php"); ?>