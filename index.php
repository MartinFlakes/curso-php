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


    //Proyecto pelicula Marvel
    const API_URL = "https://whenisthenextmcufilm.com/api";
    # Inicializar una nueva sesión de cURL; ch = curl handle
    $ch = curl_init(API_URL);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);


?>



<head>
    <meta charset="UTF-8">
    <title>Primer proyecto php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>
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


    <section>
        <h2>La próxima película de Marvel</h2>
        <img 
            src="<?= $data["poster_url"]; ?>" width="300" alt="<?= $data["title"];?>"
            style="border-radius: 10px;">
    </section>

    <hgroup>
        <h3><?= $data["title"]?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <h4>Fecha de estreno: <?= $data["release_date"]; ?></h4>
        <p>La próxima película es: <?= $data["following_production"]["title"];?></p>
    </hgroup>

    <pre>
        <h2>Data en crudo</h2>
        <h4>Ignorar</h4>
        <?php var_dump($data); ?>
    </pre>

</main>


<style>
    body {
        background-color:whitesmoke;
        display: grid;
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