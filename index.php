<?php
require_once 'consts.php';
require_once 'functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
?>


<?= render_template('head');?>

<?php require 'sections/main.php';?>

<pre hidden>
    <h2>Data en crudo</h2>
    <h4>Ignorar</h4>
    <?php var_dump($data); ?>
</pre>


<?php require 'sections/styles.php'; ?>