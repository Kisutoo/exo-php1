<?php
$montant = 9.99;
$quantité = 6;
$tva = 0.2;
$total = ($montant*$quantité)+($montant/100*($tva*100)*$quantité);

echo "Prix unitaire de l'article : $montant €<br>";
echo "Quantité : $quantité<br>";
echo "Taux de TVA : $tva<br>";
echo "Le montant de la facture à régler est de : " . round($total, 2) ." €";
?>