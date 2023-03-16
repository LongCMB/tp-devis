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
<ul class="totaux">
    <li><strong>Total HT : </strong> 25,65</li>
    <li><strong>TVA 10% : </strong> 2,565</li>
    <li><strong>Total TTC : </strong> 28,22</li>
</ul>


<footer>
    <a href="index.php">Nouveau devis</a>
</footer>
<?php
$content = ob_get_clean();
require __DIR__ . '/template.php';
