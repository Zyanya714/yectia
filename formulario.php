
<style>
.containercheckbox {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.containercheckbox input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}
.containercheckbox:hover input ~ .checkmark {
  background-color: #ccc;
}
.containercheckbox input:checked ~ .checkmark {
  background-color: #2196F3;
}
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}
.containercheckbox input:checked ~ .checkmark:after {
  display: block;
}
.containercheckbox .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<form method="POST">
    <div class="container">
        <div class="row">
            <!-- [Inicia] Datos demográficos -->
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_curp">CURP</label>
                    <input type="text" id="pcp_curp" name="pcp_curp" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_nombre">Nombre completo</label>
                    <input type="text" id="pcp_nombre" name="pcp_nombre" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_poblacion">Población indígena</label>
                    <select class="form-select" id="pcp_poblacion" name="pcp_poblacion" required>
                        <option hidden>seleccione</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_disc">Discapacidad</label>
                    <select class="form-select" id="pcp_disc" name="pcp_disc" required>
                        <option hidden>seleccione</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_esc">Escolaridad</label>
                    <select class="form-select" id="pcp_esc" name="pcp_esc" required>
                        <option hidden>seleccione</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_fnac">Fecha de nacimiento</label>
                    <input type="date" id="pcp_fnac" name="pcp_fnac" class="form-control" readonly required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_edad">Edad</label>
                    <input type="number" id="pcp_edad" name="pcp_edad" class="form-control" pattern="\d*" readonly required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_sexo">Sexo</label>
                    <input type="text" id="pcp_sexo" name="pcp_sexo" class="form-control" readonly required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_raza">Raza</label>
                    <select class="form-select" id="pcp_raza" name="pcp_raza" required>
                        <option hidden>seleccione</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_talla">Talla</label>
                    <input type="number" id="pcp_talla" name="pcp_talla" class="form-control" pattern="\d*" step=".01" onchange="calculaIMC()" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_peso">Peso</label>
                    <input type="number" id="pcp_peso" name="pcp_peso" class="form-control" pattern="\d*" step=".01" onchange="calculaIMC()" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_imc">IMC</label>
                    <input type="number" id="pcp_imc" name="pcp_imc" class="form-control" pattern="\d*" readonly required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_estadoR">Estado de residencia</label>
                    <select class="form-select" id="pcp_estadoR" name="pcp_estadoR" required>
                        <option hidden>seleccione</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_municipio">Municipio</label>
                    <input type="text" id="pcp_municipio" name="pcp_municipio" class="form-control" readonly required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_referenciado">Referenciado</label>
                    <input type="text" id="pcp_referenciado" name="pcp_referenciado" class="form-control" readonly required/>
                </div>
            <!-- [Termina] Datos demográficos -->

            <!-- [Inicia] Antecedentes heredofamiliares -->
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Cáncer
                        <input type="checkbox" name="pcp_antHeredo1" value="Cáncer">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Diabetes
                        <input type="checkbox" name="pcp_antHeredo2" value="Diabetes">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Artritis
                        <input type="checkbox" name="pcp_antHeredo3" value="Artritis">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Cardiopatias
                        <input type="checkbox" name="pcp_antHeredo4" value="Cardiopatias">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Neurologicos
                        <input type="checkbox" name="pcp_antHeredo5" value="Neurologicos">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Alergias
                        <input type="checkbox" name="pcp_antHeredo6" value="Alergias">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Hipertensión
                        <input type="checkbox" name="pcp_antHeredo7" value="Hipertensión">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Enfermedad Hematologica
                        <input type="checkbox" name="pcp_antHeredo8" value="Enfermedad Hematologica">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Enfermedad Genética
                        <input type="checkbox" name="pcp_antHeredo9" value="Enfermedad Genética">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Otra
                        <input type="checkbox" onclick="mostrarOtraHeredo();">
                        <span class="checkmark"></span>
                    </label>
                    <div class="form-group" id="panel_pcp_antHeredo10" style="display:none;">
                        <center>Especificar</center>
                        <input name="pcp_antHeredo10" id="pcp_antHeredo10" class="form-control form-control-sm" type="text" maxlength="50">
                    </div>
                </div>
            <!-- [Termina] Antecedentes heredofamiliares -->

            <!-- [Inicia] Antecedentes patológicos -->
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Tabaquismo
                        <input type="checkbox" name="pcp_antPato1" value="Tabaquismo">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Hipertensión arterial
                        <input type="checkbox" name="pcp_antPato2" value="Hipertensión arterial">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Enfermedad Renal Cronica
                        <input type="checkbox" name="pcp_antPato3" value="Enfermedad Renal Cronica">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Diabetes Mellitus
                        <input type="checkbox" name="pcp_antPato4" value="Diabetes Mellitus">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="col-12 col-sm-3 mb-2">
                    <label class="containercheckbox">Otra
                        <input type="checkbox" onclick="mostrarOtraPato();">
                        <span class="checkmark"></span>
                    </label>
                    <div class="form-group" id="panel_pcp_pcp_antPato5" style="display:none;">
                        <center>Especificar</center>
                        <input name="pcp_pcp_antPato7" id="pcp_pcp_antPato5" class="form-control form-control-sm" type="text" maxlength="50">
                    </div>
                </div>
            <!-- [Termina] Antecedentes patológicos -->

            <!-- [Inicia] Atención Clínica -->
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_fconsulta">Fecha de consulta 1ra vez</label>
                    <input type="date" id="pcp_fconsulta" name="pcp_fconsulta" class="form-control" max="<?php echo(date('Y-m-d')); ?>" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_fdiag">Fecha de diagnostico</label>
                    <input type="date" id="pcp_fdiag" name="pcp_fdiag" class="form-control" max="<?php echo(date('Y-m-d')); ?>" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_ftrata">Fecha de inicio de tratamiento</label>
                    <input type="date" id="pcp_ftrata" name="pcp_ftrata" class="form-control" max="<?php echo(date('Y-m-d')); ?>" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_PSA">PSA (Antigeno prostatico)</label>
                    <input type="text" id="pcp_PSA" name="pcp_PSA" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_PSA_destity">PSA density</label>
                    <input type="text" id="pcp_PSA_destity" name="pcp_PSA_destity" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_gradoRiesgo">Grado de riesgo</label>
                    <input type="text" id="pcp_gradoRiesgo" name="pcp_gradoRiesgo" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_etClinic">Etapa Clínica</label>
                    <input type="text" id="pcp_etClinic" name="pcp_etClinic" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_fusg">USG (fecha)</label>
                    <input type="date" id="pcp_fusg" name="pcp_fusg" class="form-control" max="<?php echo(date('Y-m-d')); ?>" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_estudios">Estudios</label>
                    <select class="form-select" id="pcp_estudios" name="pcp_estudios" required>
                        <option hidden>seleccione</option>
                        <option>Biopsia</option>
                        <option>RTUP</option>
                    </select>
                </div>
                <div class="col-12">
                    <h4>TNM (metastasis)</h4>
                    <div class="row">
                        <div class="col-12 col-sm-4 form-outline mb-4">
                            <label class="form-label" for="pcp_TNM_T">Clinical/Pathological (<strong>T</strong>)</label>
                            <select class="form-select" id="pcp_TNM_T" name="pcp_TNM_T" required>
                                <option hidden>seleccione</option>
                                <option>TX</option>
                                <option>T0</option>
                                <option>T1a</option>
                                <option>T1b</option>
                                <option>T1c</option>
                                <option>T2a</option>
                                <option>T2b</option>
                                <option>T2c</option>
                                <option>T3a</option>
                                <option>T3b</option>
                                <option>T4</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 form-outline mb-4">
                            <label class="form-label" for="pcp_TNM_N">Regional Lymph Nodes (<strong>N</strong>)</label>
                            <select class="form-select" id="pcp_TNM_N" name="pcp_TNM_N" required>
                                <option hidden>seleccione</option>
                                <option>NX</option>
                                <option>N0</option>
                                <option>N1</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-4 form-outline mb-4">
                            <label class="form-label" for="pcp_TNM_M">Distant Metastasis (<strong>M</strong>)</label>
                            <select class="form-select" id="pcp_TNM_M" name="pcp_TNM_M" required>
                                <option hidden>seleccione</option>
                                <option>MX</option>
                                <option>M0</option>
                                <option>M1a</option>
                                <option>M1b</option>
                                <option>M1c</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_ext">Extensión</label>
                    <select class="form-select" id="pcp_ext" name="pcp_ext" required>
                        <option hidden>seleccione</option>
                        <option>Local</option>
                        <option>Regional</option>
                        <option>A distancia</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_tratHorm">Tratamiento hormonal</label>
                    <select class="form-select" id="pcp_tratHorm" name="pcp_tratHorm" onchange="desplegarCatalogoTratamientoHormonal();" required>
                        <option hidden>seleccione</option>
                        <option>NO</option>
                        <option>SI</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_ftratHormonal" style="display:none;">
                    <label class="form-label" for="pcp_ftratHormonal">Fecha inicio tratamiento</label>
                    <input type="date" id="pcp_ftratHormonal" name="pcp_ftratHormonal" class="form-control"/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_tipotratHormonal" style="display:none;">
                    <label class="form-label" for="pcp_tipotratHorm">Tipo</label>
                    <select class="form-select" id="pcp_tipotratHorm" name="pcp_tipotratHorm">
                        <option hidden>seleccione</option>
                        <option>Bicalutamida</option>
                        <option>Leuprorelina</option>
                        <option>Goserelina</option>
                        <option>Enzalutamida</option>
                        <option>Abiraterona</option>
                        <option>Apalutamida</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_cirugia">Cirugía</label>
                    <select class="form-select" id="pcp_cirugia" name="pcp_cirugia" onchange="desplegarCatalogoCirugia();" required>
                        <option hidden>seleccione</option>
                        <option>NO</option>
                        <option>SI</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_fcirugia" style="display:none;">
                    <label class="form-label" for="pcp_fcirugia">Fecha</label>
                    <input type="date" id="pcp_fcirugia" name="pcp_fcirugia" class="form-control"/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_tipocirugia" style="display:none;">
                    <label class="form-label" for="pcp_tipocirugia">Tipo</label>
                    <select class="form-select" id="pcp_tipocirugia" name="pcp_tipocirugia">
                        <option hidden>seleccione</option>
                        <option>RTUP</option>
                        <option>Prostatectomía radical</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_radio">Recibió Radioterapia</label>
                    <select class="form-select" id="pcp_radio" name="pcp_radio" onchange="desplegarCatalogoRadioTerapia();" required>
                        <option hidden>seleccione</option>
                        <option>NO</option>
                        <option>SI</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_fradio" style="display:none;">
                    <label class="form-label" for="pcp_fradio">Fecha</label>
                    <input type="date" id="pcp_fradio" name="pcp_fradio" class="form-control"/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_tiporadio" style="display:none;">
                    <label class="form-label" for="pcp_tiporadio">Tipo</label>
                    <select class="form-select" id="pcp_tiporadio" name="pcp_tiporadio">
                        <option hidden>seleccione</option>
                        <option>Tratamiento Radical</option>
                        <option>Tratamiento Paliativo</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_dradio" style="display:none;">
                    <label class="form-label" for="pcp_dradio">Dosis de radiación</label>
                    <input type="number" id="pcp_dradio" name="pcp_dradio" class="form-control"/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_quimio">Recibió quimioterapia</label>
                    <select class="form-select" id="pcp_quimio" name="pcp_quimio" onchange="desplegarCatalogoQuimio();" required>
                        <option hidden>seleccione</option>
                        <option>NO</option>
                        <option>SI</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_fquimio" style="display:none;">
                    <label class="form-label" for="pcp_fquimio">Fecha</label>
                    <input type="date" id="pcp_fquimio" name="pcp_fquimio" class="form-control"/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4" id="pcp_div_tipoquimio" style="display:none;">
                    <label class="form-label" for="pcp_tipoquimio">Tipo</label>
                    <select class="form-select" id="pcp_tipoquimio" name="pcp_tipoquimio">
                        <option hidden>seleccione</option>
                        <option>Docetaxel</option>
                        <option>Prednisona</option>
                        <option>Cabazitaxel</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_tipoMeta">Tipo metástasis</label>
                    <select class="form-select" id="pcp_tipoMeta" name="pcp_tipoMeta" required>
                        <option hidden>seleccione</option>
                        <option>Oseos</option>
                        <option>Ganglionares</option>
                        <option>Viscerales</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_ECOG">ECOG</label>
                    <select class="form-select" id="pcp_ECOG" name="pcp_ECOG" required>
                        <option hidden>seleccione</option>
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <!-- Laboratorios -->
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_lab1">Fosfatos alcalinos</label>
                    <input type="text" id="pcp_lab1" name="pcp_lab1" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_lab2">Testosterona total</label>
                    <input type="text" id="pcp_lab2" name="pcp_lab2" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_IRF">IRF (riesgo)</label>
                    <select class="form-select" id="pcp_IRF" name="pcp_IRF" required>
                        <option hidden>seleccione</option>
                        <option>Muy bajo</option>
                        <option>Bajo</option>
                        <option>Intermedio</option>
                        <option>Alto</option>
                        <option>Muy Alto</option>
                        <option>Metastasico</option>
                    </select>
                </div>
            <!-- [Termina] Atención Clínica -->

            <!-- [Inicia] Patologia (Anatomopatologia) -->
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_tipoCancer">Tipo de cancer</label>
                    <select class="form-select" id="pcp_tipoCancer" name="pcp_tipoCancer" required>
                        <option hidden>seleccione</option>
                        <option>Ajenocorcinoma</option>
                        <option>Acinor</option>
                        <option>Prostatico</option>
                    </select>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_fechaPatologia">Fecha</label>
                    <input type="date" id="pcp_fechaPatologia" name="pcp_fechaPatologia" class="form-control" max="<?php echo(date('Y-m-d')); ?>" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_GLEASON_S">GLEASON (score)</label>
                    <input type="text" id="pcp_GLEASON_S" name="pcp_GLEASON_S" class="form-control" required/>
                </div>
                <div class="col-12 col-sm-4 form-outline mb-4">
                    <label class="form-label" for="pcp_GLEASON_P">GLEASON (pattern)</label>
                    <input type="text" id="pcp_GLEASON_P" name="pcp_GLEASON_P" class="form-control" required/>
                </div>
            <!-- [Termina] Patologia (Anatomopatologia) -->
        </div>
    </div>
</form>
<script>
    function calculaIMC(){
        var estatura=0.00; estatura = document.getElementById('pcp_talla').value;if(estatura<=0){estatura=0.01;}
        var peso=0.00;peso = document.getElementById('pcp_peso').value;if(peso<=0){peso=0.01;}
        var imc = peso/(estatura*estatura);
        document.getElementById('pcp_imc').value = '';
        document.getElementById("pcp_imc").value=imc.toFixed(2);
    }
    function mostrarOtraHeredo(){
        element=document.getElementById('panel_pcp_antHeredo10');
        if (element.style.display=='none') {
        element.style.display = "block";
        document.getElementById('pcp_antHeredo10').required=true;
        }else{
        document.getElementById('pcp_antHeredo10').value='';
        document.getElementById('pcp_antHeredo10').required=false;
        element.style.display = "none";
        }
    }
    function mostrarOtraPato(){
        element=document.getElementById('panel_pcp_pcp_antPato7');
        if (element.style.display=='none') {
        element.style.display = "block";
        document.getElementById('pcp_pcp_antPato7').required=true;
        }else{
        document.getElementById('pcp_pcp_antPato7').value='';
        document.getElementById('pcp_pcp_antPato7').required=false;
        element.style.display = "none";
        }
    }
    function desplegarCatalogoTratamientoHormonal(){
        element=document.getElementById('pcp_tratHorm').value;
        if(element=='SI'){
            document.getElementById('pcp_div_ftratHormonal').style.display='';
            document.getElementById('pcp_div_tipotratHormonal').style.display='';
            document.getElementById('pcp_ftratHormonal').required=true;
            document.getElementById('pcp_tipotratHorm').required=true;
        }else{
            document.getElementById('pcp_div_ftratHormonal').style.display='none';
            document.getElementById('pcp_div_tipotratHormonal').style.display='none';
            document.getElementById('pcp_ftratHormonal').required=false;
            document.getElementById('pcp_ftratHormonal').value='';
            document.getElementById('pcp_tipotratHorm').required=false;
            document.getElementById('pcp_tipotratHorm').selectedIndex=0;
        }
    }
    function desplegarCatalogoCirugia(){
        element=document.getElementById('pcp_cirugia').value;
        div_fecha=document.getElementById('pcp_div_fcirugia')
        fecha=document.getElementById('pcp_fcirugia');
        div_tipo=document.getElementById('pcp_div_tipocirugia');
        tipo=document.getElementById('pcp_tipocirugia');
        if(element=='SI'){
            div_fecha.style.display='';
            div_tipo.style.display='';
            fecha.required=true;
            tipo.required=true;
        }else{
            div_fecha.style.display='none';
            div_tipo.style.display='none';
            fecha.required=false;
            fecha.value='';
            tipo.required=false;
            tipo.selectedIndex=0;
        }
    }
    function desplegarCatalogoRadioTerapia(){
        element=document.getElementById('pcp_radio').value;
        div_fecha=document.getElementById('pcp_div_fradio')
        fecha=document.getElementById('pcp_fradio');
        div_tipo=document.getElementById('pcp_div_tiporadio');
        tipo=document.getElementById('pcp_tiporadio');
        div_dosis=document.getElementById('pcp_div_dradio');
        dosis=document.getElementById('pcp_dradio');
        if(element=='SI'){
            div_fecha.style.display='';
            div_tipo.style.display='';
            fecha.required=true;
            tipo.required=true;
        }else{
            div_fecha.style.display='none';
            div_tipo.style.display='none';
            div_dosis.style.display='none';
            fecha.required=false;
            fecha.value='';
            dosis.required=false;
            dosis.value='';
            tipo.required=false;
            tipo.selectedIndex=0;
        }
    }
    function desplegarCatalogoQuimio(){
        element=document.getElementById('pcp_quimio').value;
        div_fecha=document.getElementById('pcp_div_fquimio')
        fecha=document.getElementById('pcp_fquimio');
        div_tipo=document.getElementById('pcp_div_tipoquimio');
        tipo=document.getElementById('pcp_tipoquimio');
        if(element=='SI'){
            div_fecha.style.display='';
            div_tipo.style.display='';
            fecha.required=true;
            tipo.required=true;
        }else{
            div_fecha.style.display='none';
            div_tipo.style.display='none';
            fecha.required=false;
            fecha.value='';
            tipo.required=false;
            tipo.selectedIndex=0;
        }
    }
</script>
