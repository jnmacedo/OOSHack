<?php

session_start();
require 'libs/meli.php';
$response = array("result" => "", "error" => "");
//appId and secret
$meli = new Meli("4605892858784063", 'JVrRoV30tyxc5KGX7hrSWvv0Q8cZESDJ');
$cust_id = $_SESSION["client_id"];
$access_token = $_SESSION["access_token"];
$params = array();
$resultado = $meli->get('/users/' . $cust_id . '/items/search?access_token=' . $access_token, $params);
$last = array();
for ($i = 0; $i < count($resultado['body']->results); $i = $i + 1) {
    $idElem = $resultado['body']->results[$i];
    $params = array();
    $resultado2 = $meli->get('/items/' . $idElem, $params);
    $listaDatos = $resultado2['body'];
    $aux = array();
    $aux["id"] = $listaDatos->id;
    $aux["nombre"] = $listaDatos->title;
    $aux["imagen"] = $listaDatos->pictures[0];
    array_push($last, $aux);
}
$response["elements"] = $last;
echo json_encode($response);
?>
