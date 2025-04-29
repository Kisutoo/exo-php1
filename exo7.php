<?php
$age = 13;

if ($age >= 6 && $age <= 7)
    echo "L'enfant qui a $age ans appartient à la catégorie < Poussin >.";
elseif ($age >= 8 && $age <= 9)
    echo "Lenfant qui a $age ans appartient à la catégorie < Pupille >.";
elseif ($age >= 10 && $age <= 11)
    echo "Lenfant qui a $age ans appartient à la catégorie < Minime >.";
elseif ($age == 12)
    echo "Lenfant qui a $age ans appartient à la catégorie < Cadet >.";
else
    echo "L'âge entré ne permet pas de classer l'enfant dans une catégorie.";
?>