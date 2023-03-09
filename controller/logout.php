<?php
include_once("config.php");
session_start();
function destruir_session() {
    $_SESSION = array();
    if ( ini_get('session.use_cookies') ) {
        $params = session_get_cookie_params();
        setcookie(
            session_name(),
            '',
            time() - MAX_SESSION_TIEMPO,
            $params['path'],
            $params['domain'],
            $params['secure'],
            $params['httponly']);
    }
    @session_destroy();
    return true;
}
if(destruir_session()){echo('<script>window.location.replace("../'.urlsite.'");</script>');}
?>
