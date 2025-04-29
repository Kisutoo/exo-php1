<?php
$age = 33;
$sexe = "F";
$form = "Age : $age <br>Sexe : $sexe<br>";

if ($sexe == "F")
{    
    if ($age >= 18 && $age <= 35)
    {    
        echo $form;
        echo "La personne est imposable.";
    }
    elseif ($age < 18 || $age > 35)
    {
        echo $form;
        echo "La personne est non imposable";
    }
}
elseif ($sexe == "H")
{
    if ($age >= 20)
    {
        echo $form;
        echo "La personne est imposable";
    }
    elseif ($age < 20)
    {
        echo $form;
        echo "La personne est non imposable";
    }
}
elseif ($sexe != "H" && $sexe != "F")
    echo "Veuillez indiquer si la personne est un Homme (H) ou une Femme (F)";
?>


<?php
$age = 36;
$sexe = "Z";
$form = "Age : $age <br>Sexe : $sexe<br>";

switch ($sexe)
{
    case $sexe == 'H';
        switch ($age)
        {
            case $age >= 20;
                echo $form;
                echo "La personne est imposable";
                break;
            case $age < 20;
                echo $form;
                echo "La personne est non imposable";
                break;
        }
        break;
    case $sexe == 'F';
        switch ($age)
        {
            case $age >= 18 && $age <= 35;
                echo $form;
                echo "La personne est imposable";
                break;
            case $age < 18 || $age > 35;
                echo $form;
                echo "La personne est non imposable";
                break;
        }
        break;
    case $sexe != 'H' || $sexe != 'F';
        echo "Veuillez indiquer si la personne est un Homme (H) ou une Femme (F)";
        break;
}
?>