<?php
    require_once('Persona.php');
    $alumno = new Persona('Jose Manuel', 17)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<header>
        <?php include('header.php')?>
    </header>    
    <h1>Programacion orientada a objetos en phn</h1>
    <nav>
        <?php include("enlaces.php")?>
    </nav>
    <main>
        <pre class="resultado">
        <?php echo $alumno->getNombre(); ?>
        <?php echo $alumno->getEdad(); ?>
        </pre>
    </main>
    
</body>
</html>