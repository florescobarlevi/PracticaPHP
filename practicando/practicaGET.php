<?php
/*/ EJ. 1 =
Diseñar un programa para imprimir los números impares menores que N.
a. Ingresando N por variable GET.
b. Asumiendo en el código que N=30
/*/

$numero = $_GET ['num1'];
$i=0;
while ($i<$numero){
    $funcion= $i % 2;
    if($funcion % 2 != 0){
        echo 'los numeros impares menores que '.$numero.' son: '.$i.'<br>';
}
$i++;
}
/*/ EJ. 2 =
Crea dos variables y sumarlas y muestra el resultado.
/*/

echo 'El valor de la suma es: '.$_GET['numerosuma1'] + $_GET['numerosuma2'].'<br>';

/*/EJ. 7 =
inserta un comentario que no debe superar los 150 caracteres
/*/
$letras = $_GET ['comentario'];
if ($letras !=0 && $letras <= 150){
    echo "Gracias por dejar su comentario!";
} else if ($letras > 150){
    echo "Su comentario no puede superar los 150 caracteres";
}


/*/EJ 4 
traducir dias de la semana -sin GET-
/*/

$dia_ingles = date('D');
if ($dia_ingles == 'Mon'){
    echo 'El dia de la semana es: Lunes';
} else if ($dia_ingles == 'Tue'){
    echo 'El dia de la semana es: Martes';
} elseif ($dia_ingles == 'Wed'){
    echo 'El dia de la semana es: Miercoles';
} elseif ($dia_ingles == 'Thu'){
    echo 'El dia de la semana es: Jueves';
}  elseif ($dia_ingles == 'Fri'){
    echo 'El dia de la semana es: Viernes';
} elseif ($dia_ingles == 'Sat'){
    echo 'El dia de la semana es:Sabado';
} else {
    echo 'El dia de la semana es: Domingo';
}


?>