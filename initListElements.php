<?php
require_once './init_smarty.php';

session_start();

if (!$_SESSION['access_token'] || $_SESSION['expires_in'] < time()) {
    header("Location: http://localhost/OOSHack/index.php");
}

$mySmarty->display('listElements.html.tpl');


