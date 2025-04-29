<?php
$fra = "Bonjour";
$eng = "Hello";
$esp = "Holla";
$array = array(
    'ENG' => 'Mickaël',
    'ESP' => 'Virgile',
    'FRA' => 'Marie-Claire'
);
sort($array);

foreach($array as $key => $value)
{
    switch ($key)
    {
        case $key == 'FRA' :
            echo $fra. " " .$value ."<br>";
            break;
        case $key == 'ESP' :
            echo $esp ." " .$value ."<br>";
            break;
        case $key == 'ENG' :
            echo $eng. " " .$value ."<br>";
            break;
        case $key != 'FRA' || $key != 'ESP' || $key != 'ENG':
            echo "La langue n'est pas prise en compte";
            break;
    }
}
