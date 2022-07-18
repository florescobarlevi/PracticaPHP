<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento de Flor :)</title>
</head>

<body>
    <form action="practicaGET.php" method="GET" enctype="multipart/form">
        <h2>Ejercicio 1</h2>
        <h3>Se mostraran los numeros impares menores al numero que se ingrese</h3>
        <label for="text">Ingrese un numero:</label>
        <input type="number" name="num1">
        <button>Averiguar</button>
    </form>
<br>
    <form action="practicaGET.php" method="GET">
        <h2>Ejercicio 2</h2>
        <h3>Se suman dos elementos y se muestra el resultado</h3>
        <label for="text">Ingrese numero 1</label>
        <input type="number" name="numerosuma1">
        <br>
        <label for="text">Ingrese numero 2</label>
        <input type="number" name="numerosuma2">
        <br>
        <button>SUMAR!</button>
    </form>
<br>
<h2>Ejercicio 3</h2>
    <h3>Se muestran los numeros pares del 0 al 20</h3>    
    <?php 
    
    $ejercicio3 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
    $array3 = count ($ejercicio3);
    
   for ($i=0; $i < $array3 ; $i++){
    if ($ejercicio3[$i] % 2 == 0){
        echo "$ejercicio3[$i] <br>";
    }
   }
   
    ?>
<h2>Ejercicio 4</h2>
<h3>Se traducen los dias de la semana de ingles a español</h3>
<input type=date name=fechas>
<br>
<br>

<h2>Ejercicio 5</h2>
<h3>Costos de envio</h3>
<?php 
$total_compra = 45;

if ($total_compra <= 30){
 echo "<strong>Compra más o te cobraremos el gasto de envío que es igual al valor de compra'.</strong>";
}else if ($total_compra > 30 && $total_compra <= 90){
    $importe_faltante = 90 - $total_compra;
    echo "<strong> ¡¡¡Con solo ". $importe_faltante." pesos más podrás tener gastos de envío gratis!!!'</strong>";
} else {
    echo "<strong>Gastos de envío incluidos, ¡Vuelve pronto!</strong> ";
}
?>
<br>
<br>
<h2>Ejercicio 6</h2>
<h3>String invertido</h3>
<h4>Hola soy MENEM</h4>
<?php
echo strrev("Hola soy MENEM");
?>
<br>
    <form action="practicaGET.php" method="GET">
        <h2>Ejercicio 7</h2>
        <h3>Script para mensajes demasiado largos</h3>
        <h4>Primer opcion</h4>
        <label for="text">Deje aqui su comentario:</label>
        <textarea type="text" name="comentario" maxlength="150" placeholder="Comentario de 150 caracteres">
            Ingrese aqui su comentario
        </textarea>
        <br>
        <button>ENVIAR :)</button>
        <br>
        <br>
    </form>
<h4>Segunda opcion</h4>
<?php
$comentario = 'hola si que tal aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'; 
$caracteres = strlen($comentario);
if ($caracteres <= 20){
    echo"Gracias por dejarnos tu comentario!";
} else {
    echo "La longitud del comentario es de 20 caracteres, tu comentario tiene' .$caracteres.' caracteres";
}
?>
</body>
</html>