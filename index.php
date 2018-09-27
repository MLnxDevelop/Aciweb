<?php
@session_start();
require_once './config/SysConfig.php';
require_once AWPROOT . '/config/SysConfig.php';
require_once MLIBPATH . 'Access/SessionVars.php';

$sess = new SessionVars();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="<?php echo AWPROOTHTML . '/views/img/logo.png' ?>" sizes="32x32">
        <title>Aciweb</title>
        <?php include_once AWPROOT . '/links.php'; ?>
        <script type="text/javascript" src="views/js/login.js"></script>
    </head>
    <body onload="onLoadBody();">
        <div class="row">
            <div class="col m3 l4"></div>
            <div class="frm-login col s12 m6 l4 center-align">
                <div class="row">
                    <form>
                        <div class="row">
                            <div class="col s12">
                                    <img class="logoSize" src="views/img/logo.png">
                                <h3 class="name-aplication">Aciweb</h3>
                            </div>
                            <div class="input-field col s12">
                                <input id="inUser" type="text" class="validate">
                                <label for="inUser">Usuario</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="inPass" type="password" class="validate">
                                <label for="inPass">Contraseña</label>
                            </div>
                            <div class="col s12">
                                <a class="waves-effect waves-light btn light-blue blueb" onclick="login();">Iniciar Sesión</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
