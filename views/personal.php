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
                    <input class="form-control input-busqueda" type="text" id="myInput" onkeyup="buscarTerapeuta()" placeholder="Búsqueda" title="Búsqueda">
                  </div>
                </div>
                <div class="container px-4" id="myUL">

                    <div class="row">
                      <div class="col-12 col-sm-6 show px-2 py-3">
                        <a href="#" class="texto-card-terapeuta">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta" style="background-image: url(https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg);">  
                              </div>
                              <div class="col-10">
                                  <p class="mt-2 mb-0">Terapeuta 1</p>
                                  <p class="mb-2"><small class="nombre-terapeuta">Terapia especial</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    
                      <div class="col-12 col-sm-6 show px-2 py-3">
                        <a href="#" class="texto-card-terapeuta">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta" style="background-image: url(https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg);">  
                              </div>
                              <div class="col-10">
                                <p class="mt-2 mb-0">Terapeuta 2</p>
                                <p class="mb-2"><small class="nombre-terapeuta">Terapia operacional</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-6 show px-2 py-3">
                        <a href="#" class="texto-card-terapeuta">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta" style="background-image: url(https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg);">  
                              </div>
                              <div class="col-10">
                                <p class="mt-2 mb-0">Terapeuta 3</p>
                                <p class="mb-2"><small class="nombre-terapeuta">Terapia operacional</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <div class="col-12 col-sm-6 show px-2 py-3">
                        <a href="#" class="texto-card-terapeuta">
                          <div class="fondo-card-terapeuta">
                            <div class="row">
                              <div class="col-2 fondo-foto-terapeuta" style="background-image: url(https://img.freepik.com/vector-premium/icono-circulo-usuario-anonimo-ilustracion-vector-estilo-plano-sombra_520826-1931.jpg);">  
                              </div>
                              <div class="col-10">
                                <p class="mt-2 mb-0">Terapeuta 4</p>
                                <p class="mb-2"><small class="nombre-terapeuta">Terapia clínica</small></p>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="container">
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-primary-custom" data-bs-toggle="modal" data-bs-target="#modalAgregar">
                      <i class="fa fa-plus"></i> Agregar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Agregar -->
<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="modalAgregarLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title titulo-seccion fs-5" id="modalAgregarLabel">Nuevo terapeuta</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="controller/crud/ingresaPersonal.php">
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-8">
                <div class="row">
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="nombre_terapeuta">Nombre</label>
                      <input type="text" id="nombre_terapeuta" name="nombre_tera" placeholder="Nombre" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-12 form-outline mb-4">
                      <label class="form-label" for="cargo_tera">Cargo</label>
                      <input type="text" id="cargo_tera" name="cargo_tera" placeholder="Nombre" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="numero_terapeuta">Núm de empleado</label>
                      <input type="number" pattern="\d*" id="numero_terapeuta" name="num_tera" placeholder="Núm de empleado" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="tipo_tera">Terapia</label>
                      <select class="form-select input-custom" id="tipo_tera" name="tipo_tera" required>
                        <option hidden>Terapia</option>
                        <option>Terapia Física</option>
                        <option>Terapia Ocupacional</option>
                        <option>Terapia de lenguaje</option>
                        <option>Deglución</option>
                        <option>Neuropsicología</option>
                      </select>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="telefono_tera">Teléfono</label>
                      <input type="number" pattern="\d*" id="telefono_tera" name="telefono_tera" placeholder="Teléfono" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="correo_tera">Correo electrónico</label>
                      <input type="text" id="correo_tera" name="correo_tera" placeholder="Correo electrónico" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="usu_tera">Usuario</label>
                      <input type="text" id="usu_tera" name="usu_tera" placeholder="Correo electrónico" class="form-control input-custom" required/>
                  </div>
                  <div class="col-12 col-sm-6 form-outline mb-4">
                      <label class="form-label" for="pass_tera">Contraseña</label>
                      <input type="text" id="pass_tera" name="pass_tera" placeholder="Correo electrónico" class="form-control input-custom" required/>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-4">
                <h3 class="azul text-center mt-2">Agregar foto</h3>
                <div class="profile-pic">
                  <label class="-label" for="file">
                    <span class="fa fa-plus"></span>
                  </label>
                  <input id="file" accept="image/*" capture="camera" type="file" name="foto_tera" onchange="loadFile(event)" required/>
                  <img src="views/img/fonto_usuario.png" id="output" width="200" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary-custom"><i class="fa fa-plus"></i> Agregar</button>
        </div>
      </form>
    </div>
  </div>
</div>
  <?php require_once("layout/footer.php"); ?>