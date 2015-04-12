<?php
session_start();
require 'libs/meli.php';
$meli = new Meli('4605892858784063', 'JVrRoV30tyxc5KGX7hrSWvv0Q8cZESDJ');

// If code exist and session is empty
if ($_GET['code'] && !($_SESSION['access_token'])) {
// If the code was in get parameter we authorize
    $user = $meli->authorize($_GET['code'], 'http://localhost/OOSHack/login.php');

// Now we create the sessions with the authenticated user
    $_SESSION['access_token'] = $user['body']->access_token;
    $_SESSION['expires_in'] = time() + $user['body']->expires_in;
    $_SESSION['refresh_token'] = $user['body']->refresh_token;
    $_SESSION['client_id'] = $user['body']->user_id;

} else if ($_SESSION['expires_in'] < time()) {
    try {
// Make the refresh proccess
        $refresh = $meli->refreshAccessToken();
// Now we create the sessions with the new parameters
        $_SESSION['access_token'] = $refresh['body']->access_token;
        $_SESSION['expires_in'] = time() + $refresh['body']->expires_in;
        $_SESSION['refresh_token'] = $refresh['body']->refresh_token;
        $_SESSION['client_id'] = $refresh['body']->user_id;

    } catch (Exception $e) {
        echo "Exception: ", $e->getMessage(), "\n";
    }
}
Header("Location: http://localhost/OOSHack/index.php");