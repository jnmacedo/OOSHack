<?php
session_start();

if (!$_SESSION['access_token'] || $_SESSION['expires_in'] < time()) {
    header("Location: localhost/ooshack/index.php");
}

$artId = $_POST['art_id'];
$artDesc = $_POST['art_desc'];

$description = array(
  "html" => $artDesc
);
$item = $meli->put("/items/" . $artId . "/description", $description, array('access_token' => $_SESSION['access_token']));
