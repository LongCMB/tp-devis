<?php
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';


*/

/*
$ecrire =  'if(';

foreach($_POST as $key=>$value){
    $ecrire .=  '!empty($_POST[\'' . $key . '\']) &&';
}
$ecrire = substr($ecrire, 0, -2);

$ecrire .= ')';


echo $ecrire;
*/



if (isset($_POST['civilite'], $_POST['nom'], $_POST['prenom'], $_POST['adresse'], $_POST['complement_adresse'], $_POST['code_postal'], $_POST['ville'], $_POST['mail'], $_POST['plume'], $_POST['bille'], $_POST['crayon_papier'], $_POST['gomme'])) {
    if (
        !empty($_POST['civilite']) &&
        !empty($_POST['nom']) &&
        !empty($_POST['prenom']) &&
        !empty($_POST['adresse']) &&
        !empty($_POST['code_postal']) && 
        !empty($_POST['ville']) && 
        !empty($_POST['mail']) &&
        (!empty($_POST['plume']) or $_POST['plume'] == '0') &&
        (!empty($_POST['bille']) or $_POST['bille'] == '0') &&
        (!empty($_POST['crayon_papier']) or $_POST['crayon_papier'] == '0') &&
        (!empty($_POST['gomme']) or $_POST['gomme'] == '0')
    ) {
        require_once 'controller/devis.controller.php';
       
    } else {
        $msg = [
            'code' => 'is-warning',
            'txt' => 'merci de compléter tous les champs'
        ];
        require_once 'view/form.view.php';
    }
} else {
    require_once 'view/form.view.php';
}
