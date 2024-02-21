<?php
$hermano1 = $_GET['hermanoUno'];
$hermano2 = $_GET['hermanoDos'];


$diferencia = $hermano1 - $hermano2;

if($hermano1>$hermano2){
    if($hermano1>$hermano2){
        echo $hermano1, "Se llevan ", $diferencia, "años de diferencia ";
    }else{
        echo $hermano2, "es mayor que ", $diferencia, "años de diferencia ";
    }
}
?>