<?php
    //Variables de entrada
	$name = "Martin";
    $is_dev = true;
    $age = 20;
    #$is_adult = $age >= 18;
    
    //Variables de salida
    $output = "Nombre: $name <br>Edad: $age";
    #$outputAge = $is_adult ? 'Es mayor de edad' : 'Es menor de edad';
    
    // //Comprobar tipo de dato
    #var_dump($is_adult);
    #echo gettype($is_adult);
    
    //Constante global
    define('SALUDO', 'Hola Mundo');
    
    const NAME = 'Martin';

    //match (Mejor que switch)
    $outputAge = match (true) {
        $age <2 => "Es un bebe $name",
        $age <10 => "Eres un niño $name",
        $age <18 => "Eres un adolescente $name",
        $age <25 => "Eres un joven $name",
        default => 'Es un adulto',
    };
?>







<h1><?= SALUDO?></h1>

<h2>
    <?= $output ?>
</h2>
<h2>
    <?= $outputAge ?>
</h2>



<?php if ($is_dev) : ?>
    <h2>Desarrollador</h2>
<?php elseif ($is_dev) : ?>
    <h2>Usuario</h2>
<?php else : ?>
    <h2>Usuario</h2>
<?php endif; ?>









<style>

    body {
        display: grid;
        place-content:center;
    }

</style>