<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 13.2.2019
 * Time: 21:31
 */
// while
$x=1;
$y=5;
    while ($x<5) {
        echo "Broj je: $x <br>";
        $x++;
    }
echo "<br><br>";
    $x=0;
    while ($x<3):
    echo "Broj je: $x <br>";
    $x++;
    endwhile;
echo "<br><br>";
$i=1;

while ($i<=5) {
    $j=1;
    while ($j<=$i) {
        echo"*&nbsp&nbsp"; // no-brake space - razmak
        $j++;
    }
echo "<br>";
    $i++;
}
echo "<br><br>";

$x=1;
do {
    echo "Broj je: $x <br>";
    $x++;
} while ($x<=5);
echo "</br></br>";

echo "FOR petlja <br>";
for ($i=0; $i<5; $i++) {
    echo "Broj je $i <br>";
}
echo "</br></br>";
$a=date('H');
if ($a<'20') {
    echo "Dobar dan";
}
else {
    echo "Dobro vece";
}
$d=date('D');
echo "</br></br>";
echo "SWITCH petlja <br>";
switch ($d){
    case "Mon":
        echo "Lalalala...";
        break;
    case "Thu":
        echo "Cetvrtak je, posalji fajlove.";
        break;

    default:
        echo "Sto se radi?";
}
echo "</br></br>";
$i=2;
switch ($i) {
    case 1:
        echo "i je 1";
        break;
    case 2:
        echo "i je 2";
        break;
    case 3:
        echo "i je 3";
        break;
}