<?php


$title = 'Votre devis';

ob_start();
?>

<div class="infos_client">
    <strong>
        <?= $_POST['civilite'] == 'monsieur' ? 'M.' : 'Mme' ?>
        <?= strtoupper(htmlspecialchars($_POST['nom'])) ?>
        <?= ucfirst(htmlspecialchars($_POST['prenom'])) ?></strong>
    <address>
        <?= htmlspecialchars($_POST['adresse']) ?>
        <?= !empty($_POST['complement_adresse']) ?? '<br>' . htmlspecialchars($_POST['complement_adresse']) ?> <br>
        <?= htmlspecialchars($_POST['code_postal']) ?> <?= htmlspecialchars($_POST['ville']) ?>
        <p>Mail : <a href="mailto: <?= htmlspecialchars($_POST['mail']) ?> "> <?= htmlspecialchars($_POST['mail']) ?> </a></p>
    </address>
</div>
<table class="produits">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix unitaire HT</th>
            <th>Quantité</th>
            <th>Sous total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($total as $key => $value) : ?>
            <?php if ($value != 0) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= number_format($prix[$key] / 100, 2, ',', '.') ?></td>
                    <td><?= $_POST[$key] ?></td>
                    <td><?= number_format($total[$key] / 100, 2, ',', '.') ?></td>
                </tr>
            <?php endif ?>

        <?php endforeach ?>
    </tbody>
</table>
<ul class="totaux">
    <li><strong>Total HT : </strong><?= number_format($total_ht / 100, 2, ',', '.') ?></li>
    <li><strong>TVA 10% : </strong><?= number_format($tva / 100, 2, ',', '.') ?></li>
    <li><strong>Total TTC : </strong> <?= number_format($total_ttc / 100, 2, ',', '.') ?></li>
</ul>


<footer>
    <a href="index.php">Nouveau devis</a>
</footer>
<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';
