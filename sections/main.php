<main>
    <section>
        <h2>La próxima película de Marvel</h2>
        <img 
            src="<?= $data["poster_url"]; ?>" width="300" alt="<?= $data["title"];?>"
            style="border-radius: 10px;">
    </section>

    <hgroup>
        <h1><?= $data["title"]?></h1>
        <h3><?= $untilMessage?></h3>
        <h4>Fecha de estreno: <?= $data["release_date"]; ?></h4>
        <p>Luego: <?= $data["following_production"]["title"];?></p>
    </hgroup>
</main>