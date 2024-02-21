<?php
$volante = $_GET['volante'];
$poster = $_GET['poster'];
$tarjeta = $_GET['tarjeta'];

$volante = $volante*2000;
$poster = $poster*5000;
$tarjeta = $tarjeta*500;

$total = $volante+$poster+$tarjeta;
echo "Total de puntos: ", $total;
?>