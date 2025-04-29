<?php
$tab = [12,20,4,1,15,20,20,13,8,7,15];
$nbnote = count($tab);
$i = 0;
$calcul = 0;

echo "Les notes obtenues par l'élève sont : ";
while ($i < $nbnote)
{
    echo $tab[$i]. " ";
    $i++;
}
$i = -1;
$nbnote = $nbnote - 1;
echo "<br>Sa moyenne générale est donc de : ";
while ($i++ < $nbnote)
{
    $calcul = $calcul + $tab[$i];
}
$nbnote = $nbnote + 1;
$calcul /= $nbnote; 
echo round($calcul, 2);
?>


