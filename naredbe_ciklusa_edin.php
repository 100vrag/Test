<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 13.2.2019
 * Time: 21:18
 */

echo "Naredbe ciklusa : </br></br>";

/* od Amre:
 * U PHP-u imamo sledeće petlje :
 *
WHILE - petlja kroz blok koda sve dok je navedeno stanje tačno

DO...WHILE - petlje kroz blok koda jednom, a zatim ponavlja petlju sve dok je navedeno stanje tačno

FOR - petlje kroz blok koda određeni broj puta

FOREACH - petlje kroz blok koda za svaki element u nizu - za sad preskocio, dok ne budemo radili nizove
*/

echo "while loop : </br></br>";

// Primjer 1 :
$x = 0;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}


// Primjer 2 :
$i = 1;

while ($i <= 10):
    echo $i . ", ";
    $i++;
endwhile;
echo "</br></br>";

// Primjer 3 :
$i = 1;

while ($i <= 5) {
    $j = 1;
    while ($j <= $i) {
        echo"*&nbsp&nbsp"; // no-brake space - razmak
        $j++;
    }
    echo"<br>";
    $i++;
}
echo "</br></br>";

// ili
$i = 1;

while ($i <= 5):
    $j = 1;
    while ($j <= $i):

        echo"*&nbsp&nbsp";
        $j++;

    endwhile;
    echo "<br>";
    $i++;
endwhile;
echo "</br></br>";


// Primjer 4 : -- Preskocio, koncept manje/vise jasan

$arr = array("orange", "banana", "apple", "raspberry");
$i = 0;
while ($i < count($arr)) {

    $a = $arr[$i];
    echo $a . "\n";
    $i++;
}
echo "</br></br>";

// or

$i = 0;
$c = count($arr);
while ($i < $c) {

    $a = $arr[$i];
    echo $a . "\n";
    $i++;
}
echo "</br></br>";

// Primjer 5 :

$i = 0;
$n = 50;
while( $i < 10) {
    $n--;
    $i++;
}
echo ("Petlja se zaustavlja kada je i = $i i kada je n = $n" );
echo "</br></br></br>";

echo "do ... while loop : </br></br>";
// Primjer 1 :
$x = 1;

do {
    echo "Broj je: $x <br>";
    $x++;
} while ($x <= 5);
echo "</br></br>";

// Primjer 2 :

$x = 6;

do {
    echo "Broj je: $x <br>";
    $x++;
} while ($x <= 5); // izvrsava se prvi put bez obzira sto uslov nije ispunjen
echo "</br></br>";

// Primjer 3 :

$i = 0;
do {
    echo $i;
} while ($i > 0); // Isti slucaj kao i prethodni, izvrsava se prvi put bez obzira na to sto nije ispunjen uslov
echo "</br></br>";

// Primjer 4 :

$i = 0;
$num = 0; // ovo ovdje ne sluzi ni za sta?

do {
    $i++;
}
while( $i < 10 );
echo ("Petlja se zaustavlja kada je i = $i" );
echo "</br></br></br>";

echo "for loop : </br></br>";

// Primjer 1 :
for ($x = 0; $x <= 10; $x++) {

    echo "Broj je: $x <br>";
}
echo "</br></br>";

// Primjer 2 :
$a = 0;
$b = 0;

for( $i = 0; $i < 5; $i++ ) {
    $a += 10;
    $b += 5;
}

echo ("Na kraju petlje a = $a i b = $b" );
echo "</br></br>";

// Preskocio ovaj dio zbog rada sa nizovima

echo "foreach loop : </br></br>";


// Primer 1 :

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value </br>";
}

echo "</br></br>";


// Primer 2 :

$array = array( 1, 2, 3, 4, 5);

foreach( $array as $value ) {

    if( $value == 3 )continue;

    echo "Value is $value </br>";
}

echo "</br></br></br>";