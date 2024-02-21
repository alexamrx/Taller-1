<?php
$v = $_GET['velocidad'];
$t = $_GET['tiempo'];

$d = $v * $t;
echo "La distancia recorrida es de ", $d;
?>