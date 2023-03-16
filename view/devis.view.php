<?php


$title = 'Votre devis';

ob_start();
?>

<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';