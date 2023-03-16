<?php

//model
 $prix = [
    'plume'=>295,
    'bille'=>50,
    'crayon_papier'=>50,
    'gomme'=>35

];

//fin du model
$total['plume'] = intval($_POST['plume']) * $prix['plume'];
$total['bille'] = intval($_POST['bille']) * $prix['bille'];
$total['crayon_papier'] = intval($_POST['crayon_papier']) * $prix['crayon_papier'];
$total['gomme']= intval($_POST['gomme']) * $prix['gomme'];

$total_ht = 0;
foreach($total as $value){
    $total_ht += $value;
}

$tva = $total_ht * 0.1;
$total_ttc = $total_ht + $tva;

require_once 'view/devis.view.php';