<?php

//primera opcion
$numero_1 = $_POST['numero1'];
$numero_2 = $_POST['numero2'];

echo 'Primera opcion: '.$numero_1 + $numero_2 .'<br>';

//segunda opcion

echo 'Segunda opcion: '.$_POST['numero1'] + $_POST['numero2'].'<br>';

//opcion1

if(isset($_POST['numero1']) && isset($_POST['numero2'])){
    echo 'tienen valor'.'<br>';
}else {
    echo 'no tienen valor'.'<br>';
}

//opcion2 IF TERNARIO
echo (isset($_POST['numero1']) && isset($_POST['numero2']) ? 'tienen valor': 'no tienen valor'). '<br>';

//opcion3 
echo (isset($_POST['numero1']) + isset($_POST['numero2']) ?? 'no se puede sumar');


?>