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
echo "resultado de la multiplicacion:" . $multiplication . "<br>". "<br>";

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

echo "<br>";
echo "<br>";

$cliente = [];
$cliente2 = array();
$cliente3 = array("pedro", "juan", "karen");
$cliente = [
    "nombre" => "juan",
    "saldo" => 200
];

var_dump(empty($cliente));

echo "<br>";

var_dump(empty($cliente3));

echo "<br>";

var_dump(empty($cliente2));

echo "<br>";

var_dump(isset($cliente["nombre"]));

echo "<br>";

var_dump(isset($cliente ["codigo"]));

echo "<br>";

//ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);
sort($numeros);
rsort($numeros);

var_dump($numeros);

echo "<br>";  

//operadores de ordenacion en arrays

$cliente = array("a", "b", "z", "k", "p", "r", "w");

asort($cliente);

echo "<br>";

var_dump($cliente);

echo "<br>";

arsort($cliente);

echo "<br>";

var_dump($cliente);

echo "<br>";

ksort($cliente);

echo "<br>";

var_dump($cliente);

echo "<br>";

krsort($cliente);

echo "<br>";

var_dump($cliente);


echo "<br>";

//cliclos, if, while, foreach

$salario = 900000;
    $noSubsidioMsg = "Usted (NO) tiene derecho a subsidio";
    $siSubsidioMsg = "Usted (SI) tiene derecho a subsidio";
    
    if ($salario >= 3000000){
        echo $noSubsidioMsg;
    }
    
    elseif($salario >= 1000000){
        echo $siSubsidioMsg;
    }
    else{
        echo "Usted tiene derecho a un subcidio de vivivenda <br>";
    }

    
    echo "<br>";


    $temperatura = 15;
    
    
    if ($temperatura < 0 || $temperatura > 30){
        echo "El clima no esta bonito hoy";
    }
    else{
        echo "el clima esta bonito hoy<br>";

    }

    
    echo "<br>";

    $hora = "03:00 P.M";

        switch($hora){
            case "06:00 A.M";
            echo "Camper, Tienes Software skill";
            break;
            case "08:00 A.M";
            echo "Camper, Tienes Break";
            break;
            case "10:00 A.M";
            echo "Camper, Tienes clase de inglés";
            break;
            case "12:00 A.M";
            echo "Camper, Tienes que comerrrr";
            break;
            case "02:00 P.M";
            echo "Camper, Tienes Software review";
            break;
            default:
            echo "camper, a mimir";
            break;
        
        }

        
        echo "<br>";

        if($_POST){
            $counter = $_POST["counter"];
            for($i=1; $i<= $counter;$i++){
            
            echo $i . " ";
            }
        }

        echo "<br>";

        $contador = 0;

        while ($contador < 10){
            $contador ++;
            echo $contador . " ";
        }

        echo "<br>";

        $palabra = array("hola", "mundo", "como", "estan", "yo","bien");

        echo $palabra[0] . " ";
        echo $palabra[1] . " ";
        echo $palabra[2] . " ";
        echo $palabra[3] . " ";
        echo $palabra[4] . " ";
        echo $palabra[5] . " ";


       array_push ($palabra, "julian");
       array_pop($palabra);
       array_shift($palabra);

       echo "<br>";

       foreach($palabra as $e){
        echo $e . " ";
    }

    echo "<br>";

    //funciones 

    //funcion con la palabra reservada void

    declare(stric_type=1);
    function sumar (int $numero1 = 0, array $numero2):void{
        echo $numero1 + $numero2;
    }
    sumar(10,[]);

    //funcion sin la palabra reservada void
    
    /*
    declare(strict_types=1);
    function sumar(int $numero1 = 0, array $numero2){
        echo $numero1 + $numero2;
    }
    sumar(10,[]);
    
    */






?>