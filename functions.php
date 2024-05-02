<?php
    //Para que sea estricto con los tipos
    // declare(strict_types=1);

    //Proyecto pelicula Marvel
    
    // # Inicializar una nueva sesión de cURL; ch = curl handle
    // $ch = curl_init(API_URL);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // $result = curl_exec($ch);
    // $data = json_decode($result, true);
    // curl_close($ch);

    function render_template (string $template, array $data = []){       
        //Extrae las variables del array
        extract($data);
        require "templates/$template.php";
    }

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
?>