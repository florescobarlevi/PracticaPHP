
<?php

    $str = 'mary had a little dog' ;
    $str = strtoupper($str);
    echo $str. '<br>';

    //Ejemplo
    $edad = 19;
    $sexo = 'F';
    //verificamos que sea mayor a 18 y sexo F
    if( $edad > 18 && $sexo == 'F') {
        echo 'es una mujer que tiene $edad años'.'<br>'; //comilla simple muestra literal lo q dice la variable, no el valor
        echo 'es una mujer que tiene '.$edad.' años'. '<br>';
        echo "es una mujer que tiene $edad". '<br>';  
    }
// sumar todos los multiplos de 2 entre el 0 y 20 

//BUCLES 
//WHILE = mientras - evalua y dsp ejecuta
//FOR = para hacer una cantidad definidas de veces - ejecuta y dsp evalua
//FOREACH = para cada
//SWITCH = otra estructura de decicion  

//ej uno
//$a = 10;
//$b = 20;

//while ($a < $b){
 //   echo "el valor de A es :$a <br>"; 
//}
// ej 
$nota = 7;
if ($nota > 8) {
    echo "promocion";
}
elseif ($nota > 6) {
    echo "aprobado";
}
else {
    echo "desaprobado";
}

//algoritmo para sumar numeros del 1 al 10
    $numero = 0;
    $suma = 0;

    echo "el valor inicial de la suma es: $suma y el numero uinicial es: $numero <br><br>";
    
    while ($numero <=10){
        $suma += $numero; //esto seria lo mismo q $suma = $suma + $numero
        echo "la suma parcial es: $suma".'<br>';
        $numero++;
        echo "el numero nuevo es: $numero".'<br><br>';
    }
    echo "el resultado de la suma es: $suma".'<br><br>';

//Ejercicio 2: (duda: como lo hacen con el ENTONCES y con el ELSE)
echo "Ejercicio 2 : mostrar el mayor de tres <br>";
$A = 5;
$B = 3;
$C = 2;

if ($A > $B && $A > $C)
    echo "$A es el mayor <br>"; 
    if( $B > $A && $B > $C)
        echo "$B es el mayor <br>";
        if ($C > $A && $C > $B)
            echo "$C es el mayor <br><br>";

if ($A > $B && $A > $C){
    echo "$A es el mayor <br>"; 
}
else {
    if($B > $A && $B > $C)
    echo "$B es el mayor";
    else{
        echo "por defecto el mayor es $C";
    }
    
}
//ej 3: 
$N = 0;
$suma = 0;
$Suma = 0;

while ($N < 10){
    $N++; 
    $suma = $suma + $N;
    echo "el valor de la suma hasta el momento es $suma <br>"; 
}
echo "el valor de suma es $suma <br>";
 
for ($M = 0; $M<=10 ; $M++){
    $Suma += $M;
}
echo "el valor de suma es : $Suma <br><br>";


//ejercicio 4 : Calcular hipotenusa de dos catetos
echo "Ejercicio 4 <br>";
    $CatA = 2;
    $CatB = 2;
    
    $Hip = sqrt($CatA + $CatB);
    echo "La hipotenusa del triangulo rectangulo es igual a $Hip <br><br>";

//ejercicio 6 : INGRESAR UN NUMERO Y DETERMINAR SI ES PAR O NO
  echo "Ejercicio 6 <br>";
    $num = 5;
   if($num % 2 == 0)
   echo "es un numero par <br>"; else {
    echo "es un numero impar <br>";
   } 

// EJ 6 hecho por youtube
   $resultado = determinarPar(6); 
   if ($resultado == true) {
    echo "El numero es par <br>";
   } else {
    echo "El numero es impar <br><br>";
   }
  
   function determinarPar($numero) {
    if ($numero % 2 == 0){
        return true;
    } else{
        return false;
    }
   }
// ejercicio 6 segun yo -->SALIO BIEN
   $N = 7;
   
    if ($N % 2 == 0)
    echo "Es par <br>"; else{
        echo "Es impar <br><br>"; 
    }
   
// ejercicio 7 COMO SE HACE EL OR???
//    $Nuevanota = $resultado; 
 //   $Nota = 18;

 //   if($Nota >= 19) || ($Nota <= 20)
 //   echo "$resultado = A"; else {
//        ($Nota >= 16) || ($Nota <= 18)
 //       echo "$resultado = B"; else {
   //         ($Nota >= 13) || ($Nota <= 15)
 //           echo "$resultado = C"; else {
  //              ($Nota >= 10) || ($Nota <= 12)
  //              echo "$resultado = D"; else {
  //                  ($Nota >= 1) || ($Nota <= 9)
//                    echo "$resultado = D";
 //               }
  //          }
  //      }
  //  }

 /*Ejerc. web*/
 $x = 6;

do {
  echo "The number is: $x <br><br>";
  $x++;
} while ($x <= 5);

$L = 1;

do {
  echo "The number is: $L <br>";
  $L++;
} while ($L <= 5);
?>
