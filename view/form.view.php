<?php


$title = 'Générer un devis';

ob_start();
?>
<form action="index.php" method="post">
    <div class="flex ecarte fields">
        <fieldset class="col left">
            <legend>Informations client</legend>
            <div class="field civilite">
                Civilite :
                <div class="flex">
                    <div>
                        <input type="radio" name="civilite" id="madame" value="madame" checked>
                        <label for="madame">Madame</label>
                    </div>
                    <div>
                        <input type="radio" name="civilite" id="monsieur" value="monsieur">
                        <label for="monsieur">Monsieur</label>
                    </div>
                    
                </div>
            </div>
            <div class="field nom">
                <label for="nom">Nom</label><br>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="field prenom">
                <label for="prenom">Prenom</label><br>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="field adresse">
                <label for="adresse">Adresse</label><br>
                <input type="text" name="adresse" id="adresse">
            </div>
            <div class="field complement_adresse">
                <label for="complement_adresse">Complément d'adresse</label><br>
                <input type="text" name="complement_adresse" id="complement_adresse">
            </div>
            <div class="field code_postal">
                <label for="code_postal">Code postal</label><br>
                <input type="text" name="code_postal" id="code_postal">
            </div>
            <div class="field ville">
                <label for="ville">Ville</label><br>
                <input type="text" name="ville" id="ville">
            </div>
            <div class="field mail">
                <label for="mail">Mail</label><br>
                <input type="email" name="mail" id="mail">
            </div>
        </fieldset>
        <div class="col right">
            <fieldset>
                <legend>Produits commandés</legend>

                <?php foreach($products as $key=>$value) :?>
                <div class="field  flex ecarte">
                    <label for="<?= $key ?>"><?= ucfirst($key) ?> (<?= number_format($value/100, 2, ',') ?>€ HT)</label>
                    <input type="number" name="<?= $key ?>" id="<?= $key ?>" value="0" min="0" step="1">
                </div>
                <?php endforeach ?>
                
            </fieldset>
            <div class="illustration">

            </div>

        </div>
    </div>
    <div class="submit">
        <input type="submit" value="Générer">
    </div>
</form>


<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';
