<?php

include './init_smarty.php';

session_start();

if (!$_SESSION['access_token'] || $_SESSION['expires_in'] < time()) {
    header("Location: http://localhost/OOSHack/index.php");
}

$mySmarty->assign('idarticulo', $_GET['id_art']);
$mySmarty->assign('idvendedor', $_SESSION['client_id']);
$mySmarty->display("editar-pagina-admin.tpl.html");

?>