<?php
    // //Para que sea estricto con los tipos
    // declare(strict_types=1);

    //Proyecto pelicula Marvel
    const API_URL = "https://whenisthenextmcufilm.com/api";
    // # Inicializar una nueva sesión de cURL; ch = curl handle
    // $ch = curl_init(API_URL);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $result = curl_exec($ch);
    // $data = json_decode($result, true);
    // curl_close($ch);

    function get_data(string $url){    
        //Método solo para GET
        $result = file_get_contents($url);
        $data = json_decode($result, true);
        return $data;
    }

    function get_until_message(int $days): string
    {
        return match(true){
            $days == 0 => "Se estrena hoy!!!",
            $days == 1 => "Se estrena mañana",
            $days < 7  => "Se estrena esta semana",
            $days < 30 => "Se estrena este mes",
            default    => "Se estrena en $days días",
        };
    }
    
    $data = get_data(API_URL);
    $untilMessage = get_until_message($data["days_until"]);
?>


<head>
    <meta charset="UTF-8">
    <title>Primer proyecto php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>


<main>
    <section>
        <h2>La próxima película de Marvel</h2>
        <img 
            src="<?= $data["poster_url"]; ?>" width="300" alt="<?= $data["title"];?>"
            style="border-radius: 10px;">
    </section>

    <hgroup>
        <h3><?= $data["title"]?></h3>
        <h3><?= $untilMessage?></h3>
        <h4>Fecha de estreno: <?= $data["release_date"]; ?></h4>
        <p>La próxima película es: <?= $data["following_production"]["title"];?></p>
    </hgroup>
</main>


<pre hidden>
    <h2>Data en crudo</h2>
    <h4>Ignorar</h4>
    <?php var_dump($data); ?>
</pre>


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