<?php
$cout = 1;
$verse = 50;
$rendu = $verse - $cout;
$billetdix = intdiv($rendu, 10);
$billetcinq = intdiv($rendu % 10, 5);
$deuxeuro = intdiv($rendu % 10 % 5, 2) ;
$uneuro = intdiv($rendu % 10 % 5 % 2, 1);

echo "Montant à payer : $cout €<br>";
echo "Montant versé : $verse €<br>";
echo "Reste à payer : $rendu €<br>"; 
echo "******************************************************************************<br>";
echo "<br>Rendu de monnaie :<br>$billetdix billets de 10 € - $billetcinq billets de 5 €
- $deuxeuro pièces de 2 € - $uneuro pièce de 1 €";
?>


