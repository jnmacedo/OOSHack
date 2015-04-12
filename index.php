<?php
session_start();
require 'libs/meli.php';
$meli = new Meli('4605892858784063', 'JVrRoV30tyxc5KGX7hrSWvv0Q8cZESDJ');
if (!$_SESSION['access_token'] || $_SESSION['expires_in'] < time()) {
    Header("Location: " . $meli->getAuthUrl('http://localhost/OOSHack/login.php'));
}
else {
    Header("Location: http://localhost/OOSHack/initListElements.php");
}
?>