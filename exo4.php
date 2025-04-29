<?php

$phrase = "Engage le jeu que je le gagne" ;
$temp1 = strtolower($phrase);
$temp1 = str_replace(" ", "", $temp1);
$temp2 = strrev($temp1);

if ($temp1 == $temp2)
    echo "La phrase < $phrase > est un palindrome.";
else
    echo "La phrase < $phrase > n'est pas un palindrome.";
?>