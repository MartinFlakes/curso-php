<?php
    //Variables de entrada
	$name = "MartinFlakes";
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
        $age <2 => "Es un bebeto $name",
        $age <10 => "Eres un niño $name",
        $age <18 => "Eres un adolescente $name",
        $age <25 => "Eres un adulto joven $name",
        default => 'Es un adulto'
    };

    //Arrays
    $languages = ["PHP", 'JS', 'C#'];
    //Añadir un elemento al final
    $languages[] = 'Java';
    //Añadir un elemento al principio
    array_unshift($languages, 'Python');
    //Reemplazar un elemento
    $languages[2] = 'JavaScript';

    //Arrays asociativos
    $person = [
        'name' => 'Martin',
        'age' => 20,
        'is_dev' => true,
        'languages' => ['PHP', 'JavaScript', 'C#']
    ];
    $person["name"] = "Martín";
    $person["languages"][] = "Java";
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

<ul>
    <?php foreach ($languages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach; ?>
</ul>

<style>
    body {
        background-color:whitesmoke;
        display: grid;
        /* place-content: center; */
    }
    section {
        display: grid;
        justify-content: center;
        text-align: center;
    }
    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img {
        margin: 0 auto;
    }
</style>