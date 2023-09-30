<?php

require_once 'responses/consultarTodosResponse.php';
require_once '../../configuracion/database.php';
require_once '../../modelo/auto.php';

header('Content-Type: application/json');
$resp = new ConsultarTodosResponse();

$resp->ListAutos = auto::BuscarTodas();

echo json_encode($resp);