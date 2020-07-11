<?php

$mensaje_validacion = '';
if (isset($_POST) && count($_POST) > 0){

    $year = (int)$_POST['year'];
    $siglo  = 0;

    if($year >= 1 && is_numeric($year)){

        if($year <= 100){
            $siglo = 1;
        } elseif ($year % 100 === 0){
            $siglo = $year / 100;
        } else {
            $siglo = floor($year / 100) + 1;
        }

        $mensaje_validacion =  "El año ingresado es: $year y pertenece al siglo $siglo";
    } else {
        $mensaje_validacion =  'Ingrese un año valido!';
    }


    echo <<<HTML
    <p>$mensaje_validacion</p>
    <p><a href="index.php">back</a> Regresar</p>
HTML;

}
