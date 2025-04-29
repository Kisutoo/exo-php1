<?php
$tab = ['Peugeot','Renault','BMW','Mercedes','Toyota'];
$tab = array_reverse($tab);
$nb = count($tab);
$i = $nb - 1;

echo "Il y a $i marques de voitures dans le tableau :<br>";
for($i = $nb - 1 ; $i >= 0 ; $i--)
    echo $tab[$i]."<br>";