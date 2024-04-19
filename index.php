<?php
	$name = "Martin";
    $is_dev = true;
    $age = 20;
    
    $is_adult = $age >= 18;
    
    $output = "Nombre: $name <br>Edad: $age";
    
    //Comprobar tipo de dato
    var_dump($is_adult);
    echo gettype($is_adult);
    
    //Constante global
    define('SALUDO', 'Hola Mundo');
    
    const NAME = 'Martinn';
?>

<h1><?= SALUDO?></h1>

<h2>
	<?= $output ?>
   	
</h2>

<style>

    body {
        display: grid;
        place-content:center;
    }

</style>