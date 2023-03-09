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
                <h3 class="mt-4 titulo-seccion">Personal</h3>
                <div class="container px-4">
                  <div class="row">
                    <div class="col-12 col-sm-6 fondo-card-terapeuta">
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
                  </div>
                  <hr>
                  <table id="table_personal" class="table table-borderless table-striped table-hover" style="width: 100%;">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">area</th>
                        <th scope="col">cargo</th>
                        <th scope="col">n_empleado</th>
                        <th scope="col">email</th>
                        <th scope="col">tel</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
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