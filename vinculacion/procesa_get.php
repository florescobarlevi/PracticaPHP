<?php

//primera opcion de suma
$numero_1 = $_GET['numero1'];
$numero_2 = $_GET['numero2'];

echo 'Primera opcion: '.$numero_1 + $numero_2 .'<br>';

//segunda opcion de suma - aca escribis todo en una sola linea, pones menos codigo

echo 'Segunda opcion: '.$_GET['numero1'] + $_GET['numero2'].'<br>';

//opcion1 ISSET es para verificar que la variable este definida y tenga contenido - que tenga valor diferente al otro
//arroja valor booleano (Verdadero O Falso - 1 o falso)
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    echo 'tienen valor'.'<br>';
}else {
    echo 'no tienen valor'.'<br>';
}

//opcion2 IF TERNARIO - tiene la condicion de que hacer tanto en caso verdadero como en el falso (como tres opcioens)
// el ? es como decir if = 'lo que sucede en caso de true' y despues el : = 'lo que seria en caso de false' 
echo (isset($_GET['numero1']) && isset($_GET['numero2']) ? 'tienen valor': 'no tienen valor'). '<br>';

//opcion3 - por default muestra el valor de la primera parte (suma los isset en este caso)
//sino '??' = 'lo que seria false'
echo (isset($_GET['numero1']) + isset($_GET['numero2']) ?? 'no se puede sumar');


?>