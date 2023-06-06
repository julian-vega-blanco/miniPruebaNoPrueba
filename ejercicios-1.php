<?php
//hacer una impresion en la pagina con echo

echo "Hola mundooooooooooooooo";


echo "<br>";
echo "<br>";

// recordar siempre al terminar una linea en php porner el punto y coma para evitar errores

//hacer una impresion en la pagina con print

$texto = "me cai y";
$Texto = "me pegue en la pata";
print ($texto.$Texto . "<br>". "<br>");


//hacer una impresion en la pagina con sprintf
$texto = "Julian";
$mensaje = sprintf("Hola mi nombre es %s", $texto . "<br>");
echo $mensaje . "<br>". "<br>";

//declarar variables

$nombre = "Pedro Pascasio";
$edad = 34;

$es_valido = true;
echo var_dump($nombre . "<br>". "<br>");

//Declarar constantes en php

define("MI_EDAD", 18);
define("MI_NOMBRE", "Julian");
define("VIVO", true);

//imprimir un numero que tiene decimales como entero

$numero = 13.453;
var_dump($numero);
echo (int)$numero . "<br>". "<br>";


//imprimir un array 

$array1 = array ("hola", "bueno", "dias", "mi", "nombre", "es", "julian");
print_r($array1);
print "<br>". "<br>";

//algunos operadores aritmeticos

$numero1 = 23;
$numero2 = 54;

$suma = $numero1 + $numero2;
echo "resultado de la suma:" . $suma . "<br>". "<br>"; 

$subtraction = $numero1 - $numero2;
echo "resultado de la substracion:" . $subtraction . "<br>". "<br>";

$multiplication = $numero1 * $numero2;
echo "resultado de la multiplicacion:" . $multiplicacion . "<br>". "<br>";

$division = $numero1 / $numero2;
echo "resultado de la division:" . $division . "<br>". "<br>";

$modulo = $numero1 % $numero2;
echo "resultado del modulo:" . $modulo . "<br>". "<br>";

$exponentiation = $numero1 ** $numero2;
echo "resultado de la exponenciacion:" . $exponentiation . "<br>". "<br>";

//algunos metodos de array

$miarray = array("numero1", "numero2", "numero3", "numero4");

var_dump($miarray);

echo "<br>";
echo "<br>";

echo $miarray[3];

echo "<br>";
echo "<br>";

$miarray [3] = "esto ya no es un numero"; 
echo $miarray[3];

echo "<br>";
echo "<br>";

array_push($miarray, "esto es un numero nuevo");
var_dump($miarray);

echo "<br>";
echo "<br>";

array_unshift($miarray, "numero0");

echo "<br>";
echo "<br>";

var_dump($miarray);

// array asociativo 

$arrayasoci = array(
    "clase1" => "valor1", 
    "clase2" => "valor2", 
    "clase3" => "valor3", 
    "clase4" => "valor4", 
    "clase5" => "valor5"  
);

echo "<br>";
echo "<br>";


echo $arrayasoci["clase1"]. "<br>";
echo $arrayasoci["clase2"]. "<br>";
echo $arrayasoci["clase3"]. "<br>";
echo $arrayasoci["clase4"]. "<br>";
echo $arrayasoci["clase5"]. "<br>";

echo "<br>";


foreach ($arrayasoci as $clase => $valor){
    echo "clase: " . $clase . ", valor: " . $valor. "<br>";
}

echo "<br>";
echo "<br>";


//isseet() y Empty()

$mivar = "Hola php";

if (isset($mivar)){
    echo "la variable definida tiene un valor";
}
else{
    echo "la variable no tiene valores, revisa tu codigo";
}


$clientes = [];
$clientes2 = array();
$clientes3 = array("pedro", "juan", "karen");
$cliente = [
    "nombre" => "juan",
    "saldo" => 200
];

var_dump(empty($cientes));
var_dump(empty($ciente2));
var_dump(empty($ciente3));


















?>