<?php
$HL = $_GET['horas'];
$VH = $_GET['valor'];

$total = $HL*$VH;
echo "Valor total: ", $total;
?>