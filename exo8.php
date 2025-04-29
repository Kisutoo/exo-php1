<?php
$nb = 7;
$i = 1;

echo "Table de $nb :<br>";
while($i <= 10)
{
    echo "$i x $nb =" . ($i*$nb). "<br>";
    $i++;
}
?>
<br>
<?php
$nb = 7;

echo "Table de $nb :<br>";
for ($i = 1; $i <= 10; $i++)
    echo "$i x $nb =". ($i*$nb). "<br>";
?>