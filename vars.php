<?php
$sql="START TRANSACTION";
mysqli_query($con,$sql);
// Tabla pcp_pacientes
$pcp_curp=mysqli_real_escape_string($con,$_POST['pcp_curp']);
$pcp_nombre=mysqli_real_escape_string($con,$_POST['pcp_nombre']);
$pcp_poblacion_i=mysqli_real_escape_string($con,$_POST['pcp_poblacion']);
$pcp_disc=mysqli_real_escape_string($con,$_POST['pcp_disc']);
$pcp_sexo=mysqli_real_escape_string($con,$_POST['pcp_sexo']);
$pcp_edad=mysqli_real_escape_string($con,$_POST['pcp_edad']);
$pcp_fnac=mysqli_real_escape_string($con,$_POST['pcp_fnac']);
$pcp_talla=mysqli_real_escape_string($con,$_POST['pcp_talla']);
$pcp_peso=mysqli_real_escape_string($con,$_POST['pcp_peso']);
$pcp_imc=mysqli_real_escape_string($con,$_POST['pcp_imc']);
$pcp_referenciado=mysqli_real_escape_string($con,$_POST['pcp_referenciado']);
$id_estado=mysqli_real_escape_string($con,$_POST['pcp_estadoR']);
$id_municipio=mysqli_real_escape_string($con,$_POST['pcp_municipio']);
$pcp_escolaridad=mysqli_real_escape_string($con,$_POST['pcp_esc']);
$pcp_raza=mysqli_real_escape_string($con,$_POST['pcp_raza']);
$sql="INSERT INTO `pcp_pacientes`(`pcp_curp`, `pcp_nombre`, `pcp_poblacion_i`, `pcp_fnac`, `pcp_sexo`, `pcp_edad`, `pcp_disc`, `pcp_talla`, `pcp_peso`, `pcp_imc`, `pcp_referenciado`, `id_estado`, `id_municipio`, `pcp_escolaridad`, `pcp_raza`) VALUES ('$pcp_curp','$pcp_nombre','$pcp_poblacion_i','$pcp_fnac','$pcp_sexo','$pcp_edad','$pcp_disc','$pcp_talla','$pcp_peso','$pcp_imc','$pcp_referenciado','$id_estado','$id_municipio','$pcp_escolaridad','$pcp_raza');";
$res_1=mysqli_query($con,$sql);
$id_paciente=mysqli_insert_id($con);

// Tabla - pcp_clinica
$pcp_PSA=mysqli_real_escape_string($con,$_POST['pcp_PSA']);
$pcp_PSA_destity=mysqli_real_escape_string($con,$_POST['pcp_PSA_destity']);
$pcp_fconsulta=mysqli_real_escape_string($con,$_POST['pcp_fconsulta']);
$pcp_fdiag=mysqli_real_escape_string($con,$_POST['pcp_fdiag']);
$pcp_ftrata=mysqli_real_escape_string($con,$_POST['pcp_ftrata']);
$pcp_estudios=mysqli_real_escape_string($con,$_POST['pcp_estudios']);
$pcp_gradoRiesgo=mysqli_real_escape_string($con,$_POST['pcp_gradoRiesgo']);
$pcp_etClinic=mysqli_real_escape_string($con,$_POST['pcp_etClinic']);
$pcp_fusg=mysqli_real_escape_string($con,$_POST['pcp_fusg']);
$sql="INSERT INTO `pcp_clinica`(`id_paciente`, `pcp_PSA`, `pcp_PSA_destity`, `pcp_fconsulta`, `pcp_fdiag`, `pcp_ftrata`, `pcp_estudios`, `pcp_gradoRiesgo`, `pcp_etClinic`, `pcp_fusg`) VALUES ('$id_paciente','$pcp_PSA', '$pcp_PSA_destity', '$pcp_fconsulta', '$pcp_fdiag', '$pcp_ftrata', '$pcp_estudios', '$pcp_gradoRiesgo', '$pcp_etClinic', '$pcp_fusg')";
$res_2=mysqli_query($con,$sql);

// Tabla - tnm
$pcp_ext=mysqli_real_escape_string($con,$_POST['pcp_ext']);
$pcp_tratHorm=mysqli_real_escape_string($con,$_POST['pcp_tratHorm']);
$pcp_ftratHormonal=mysqli_real_escape_string($con,$_POST['pcp_ftratHormonal']);
$pcp_tipotratHorm=mysqli_real_escape_string($con,$_POST['pcp_tipotratHorm']);
$pcp_cirugia=mysqli_real_escape_string($con,$_POST['pcp_cirugia']);
$pcp_fcirugia=mysqli_real_escape_string($con,$_POST['pcp_fcirugia']);
$pcp_tipocirugia=mysqli_real_escape_string($con,$_POST['pcp_tipocirugia']);
$pcp_radio=mysqli_real_escape_string($con,$_POST['pcp_radio']);
$pcp_fradio=mysqli_real_escape_string($con,$_POST['pcp_fradio']);
$pcp_tiporadio=mysqli_real_escape_string($con,$_POST['pcp_tiporadio']);
$pcp_dradio=mysqli_real_escape_string($con,$_POST['pcp_dradio']);
$pcp_quimio=mysqli_real_escape_string($con,$_POST['pcp_quimio']);
$pcp_fquimio=mysqli_real_escape_string($con,$_POST['pcp_fquimio']);
$pcp_tipoquimio=mysqli_real_escape_string($con,$_POST['pcp_tipoquimio']);
$pcp_esquema=mysqli_real_escape_string($con,$_POST['pcp_esquema']);
$pcp_tipoMeta=mysqli_real_escape_string($con,$_POST['pcp_tipoMeta']);
$pcp_lab1=mysqli_real_escape_string($con,$_POST['pcp_lab1']);
$pcp_lab2=mysqli_real_escape_string($con,$_POST['pcp_lab2']);
$pcp_TNM_T=mysqli_real_escape_string($con,$_POST['pcp_TNM_T']);
$pcp_TNM_N=mysqli_real_escape_string($con,$_POST['pcp_TNM_N']);
$pcp_TNM_M=mysqli_real_escape_string($con,$_POST['pcp_TNM_M']);
$pcp_ECOG=mysqli_real_escape_string($con,$_POST['pcp_ECOG']);
$pcp_IRF=mysqli_real_escape_string($con,$_POST['pcp_IRF']);
$pcp_tipoCancer=mysqli_real_escape_string($con,$_POST['pcp_tipoCancer']);
$pcp_fechaPatologia=mysqli_real_escape_string($con,$_POST['pcp_fechaPatologia']);
$pcp_GLEASON_P=mysqli_real_escape_string($con,$_POST['pcp_GLEASON_P']);
$pcp_GLEASON_S=mysqli_real_escape_string($con,$_POST['pcp_GLEASON_S']);
$sql="INSERT INTO `pcc_tnm`(`id_paciente`, `pcp_ext`, `pcp_tratHorm`, `pcp_ftratHormonal`, `pcp_tipotratHorm`, `pcp_cirugia`, `pcp_fcirugia`, `pcp_tipocirugia`, `pcp_radio`, `pcp_fradio`, `pcp_tiporadio`, `pcp_dradio`, `pcp_quimio`, `pcp_fquimio`, `pcp_tipoquimio`, `pcp_esquema`, `pcp_tipoMeta`, `pcp_lab1`, `pcp_lab2`, `pcp_ECOG`, `pcp_TNM_T`, `pcp_TNM_N`, `pcp_TNM_M`, `pcp_IRF`, `pcp_tipoCancer`, `pcp_fechaPatologia`, `pcp_GLEASON_P`, `pcp_GLEASON_S`) VALUES ('$id_paciente', '$pcp_ext', '$pcp_tratHorm', '$pcp_ftratHormonal', '$pcp_tipotratHorm', '$pcp_cirugia', '$pcp_fcirugia', '$pcp_tipocirugia', '$pcp_radio', '$pcp_fradio', '$pcp_tiporadio', '$pcp_dradio', '$pcp_quimio', '$pcp_fquimio', '$pcp_tipoquimio', '$pcp_esquema', '$pcp_tipoMeta', '$pcp_lab1', '$pcp_lab2', '$pcp_ECOG', '$pcp_TNM_T', '$pcp_TNM_N', '$pcp_TNM_M', '$pcp_IRF', '$pcp_tipoCancer', '$pcp_fechaPatologia', '$pcp_GLEASON_P', '$pcp_GLEASON_S')";
$res_3=mysqli_query($con,$sql);

//Tabla pcp_antecedentes
//Antecedentes heredofamiliares
if(isset($_POST['pcp_antHeredo1'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo1']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo2'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo2']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo3'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo3']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo4'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo4']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo5'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo5']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo6'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo6']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo7'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo7']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo8'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo8']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo9'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo9']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antHeredo10'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antHeredo10']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Heredofamiliar','$pcp_ant')";
    mysqli_query($con,$sql);
}
//Antecedentes patológicos
if(isset($_POST['pcp_antPato1'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antPato1']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Personal Patológico','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antPato2'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antPato2']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Personal Patológico','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antPato3'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antPato3']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Personal Patológico','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antPato4'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antPato4']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Personal Patológico','$pcp_ant')";
    mysqli_query($con,$sql);
}
if(isset($_POST['pcp_antPato5'])){
    $pcp_ant=mysqli_real_escape_string($con,$_POST['pcp_antPato5']);
    $sql="INSERT INTO `pcp_antecedentes`(`id_paciente`, `pcp_tipoAntecedente`, `pcp_antecedente`) VALUES ('$id_paciente','Personal Patológico','$pcp_ant')";
    mysqli_query($con,$sql);
}
if($res_1==TRUE && $res_2==TRUE && $res_3==TRUE){
    mysqli_query($con,"COMMIT");
    //alert
}else {
    mysqli_query($con,"ROLLBACK");
    //alert
}