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
                <div class="row mt-4">
                  <div class="col-12 col-sm-8">
                    <h3 class="titulo-seccion">Personal</h3>
                  </div>
                  <div class="col-12 col-sm-4">
                    <input type="text" id="myInput" onkeyup="buscarTerapeuta()" placeholder="Buscar por nombre.." title="Escribe un nombre">
                  </div>
                </div>
                <div class="container px-4" id="myUL">

                    <div class="row">
                      <div class="col-12 col-sm-6">
                        <a href="#">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta">
                                <i class="fa fa-x2 fa-user-md"></i>
                              </div>
                              <div class="col-10">
                                  <p class="mt-2 mb-0">Terapeuta 1</p>
                                  <p class="mb-2"><small>Terapia</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    
                      <div class="col-12 col-sm-6">
                        <a href="#">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta">
                                <i class="fa fa-x2 fa-user-md"></i>
                              </div>
                              <div class="col-10">
                                <p class="mt-2 mb-0">Terapeuta 2</p>
                                <p class="mb-2"><small>Terapia</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once("layout/footer.php"); ?>