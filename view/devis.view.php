<?php


$title = 'Votre devis';

ob_start();
?>

<div class="infos_client">
    <strong>M. David LEGRAND</strong>
    <address>
        129 rue du bouchon <br>
        complément <br>
        CP ville
        <p>Mail : <a href="mailto:meil">mail</a></p>
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
        <tr>
            <td>Stylo plume</td>
            <td>2,95</td>
            <td>7</td>
            <td>20,65</td>
        </tr>
        <tr>
            <td>Stylo plume</td>
            <td>2,95</td>
            <td>7</td>
            <td>20,65</td>
        </tr>
    </tbody>
</table>
<dl class="totaux">
    <dt>Total HT</dt><dd>25,65€</dd>
    <dt>TVA 10%</dt><dd>2,565€</dd>
    <dt>Total TTC</dt><dd>28,22€</dd>
</dl>

<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';
