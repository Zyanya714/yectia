<?php
require_once("controller/config.php");
require_once("controller/session_ck.php");
if(isset($_SESSION['id'])) {
    if(isset($_REQUEST['mdl'])){
        $module=$_REQUEST['mdl'];
        $module=base64_decode($module);
        $url="views/".$module.".php";
        if(file_exists($url)) {
            require_once($url);
        }else{
            //Agregar pagina de error (403 forbidden)
            require_once("views/layout/403.html");
        }
    }else{
        require_once("views/main.php");
    }
}else{
    require_once("views/login.php");
}
echo("<script>console.log(".$_SESSION['ULTIMA_ACTIVIDAD'].")</script>");
echo("<script>console.log(".MAX_SESSION_TIEMPO.")</script>");
?>