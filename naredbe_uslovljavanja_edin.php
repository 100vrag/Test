<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 13.2.2019
 * Time: 22:52
 */
echo " Naredbe uslovljavanja : </br></br>";

/* Amra:
 * U PHP-u imamo sledeće uslovne izjave:

IF izjava - izvršava neki kod ako je jedan uslov tačan
IF ... ELSE izjava - izvršava neki kod ako je uslov tačan i drugi kod ako je to stanje lažno
IF ... ELSEIF .... ELSE izjava - izvršava različite kodove za više od dva uslova
switch statement - bira jedan od mnogih blokova koda koji će se izvršiti
 */

echo "Naredba IF </br></br>";

// Primjer 1 :
$a = 10;
$b = 20;

if ($a < $b){
    $a = 0;
    echo "Promenljiva a je : ". $a . "</br>";
}
else $b = 0;
echo "Promenljiva b je : " . $b;

echo "</br></br>";

// Primjer 2 :

$t = date("H"); // Funkcija date () formatira lokalni datum i vrijeme i vraća formatirani datum
if ($t < "20") {
    echo "Prijatan dan!";
} else {
    echo "Prijatno vece!";
}
echo "</br></br>";

// Primjer 3 :
$t = date("H");

if ($t < "10") {
    echo "Prijatno jutro!";
} elseif ($t < "20") {
    echo "Prijatan dan!";
} else {
    echo "Prijatna noc!";
}
echo "</br></br>";

// Primer 4 :

$bool = true;

if ($bool) {
    $hi = 'Zdravo svima!';
    echo $hi;
}

echo "</br></br>";

$bool = false;

if ($bool) {
    $hi = 'Hello to all people!';
}else
    echo "False";

echo "</br></br>";

// Primjer 5 : Alphabetical Comparison

$a = "Edin";
$b = "Amra";

if ($a < $b){

    echo $a . " je prije " . $b . " po abecedi";
}
else{
    echo $a . " je posle " . $b . " po abecedi";
}
// Rezultat: Edin je posle Amra po abecedi

echo "</br></br>";

// Primjer 6 : Detaljnije sa Amrom

$var = TRUE;

echo $var==TRUE ? 'TRUE' : 'FALSE';
// get TRUE
echo $var==FALSE ? 'TRUE' : 'FALSE';
// get FALSE

echo "</br></br>";


}
// Primer 7 : Number comparison

$a = "C";
$b = "X";
if ($a < $b) {

    echo $a . "je manji od" . $b;
}
// Result : C je manji od X

echo "</br></br>";


// Primer 8 :

$a = 10;
$b = 20;

// Ovakav zapis bi samo promjenljivoj a dodelio vrijednost promjenljive b jer imamo znak =
if ($a = $b)
{
    print("Vrednost promenljive a sada je : " .$a);
}

echo "</br>";

// ovdje vec poredimo vrijednosti promjenljive a i b
if ($a == $b) {

    print("Sada je : a = b");
}
echo "</br></br>";


// Primjer 9 :

$a = 10;
$b = 20;

if ($a > $b) {

    echo "a je vece od b";
} elseif ($a == $b) {

    echo "a je jednako b";
} else {

    echo "a je manje od b";
}
echo "</br></br>";


// Primjer 10 :

if ($a > $b):

    echo $a . " je vece od " . $b;

elseif ($a == $b):

    echo $a . " je jednako " . $b;

else:

    echo $a . " nije ni vece a ni jednako " . $b;

endif;

echo "</br></br>";

// Primjer 11 :

if(true) {
    echo 'true';
    // show this
} else {
    echo 'false';
}

echo "</br>";

if(false) {
    echo 'true';
} else {
    echo 'false';
    // show this
}
echo "</br></br>";

// Primjer 12 :

$i = 2;

if ($i == 0) {

    echo "i je jednako 0";

} elseif ($i == 1) {

    echo "i je jednako 1";

} elseif ($i == 2) {

    echo "i je jednako 2";
}

echo "</br></br></br>";


echo "Naredba SWITCH </br></br>";

/* Amra:
 * Evo kako to funkcioniše : prvo imamo jedan izraz n (najčešće varijabla), koja se jednom procenjuje.
 * Vrednost izraza zatim se upoređuje sa vrednostima za svaki slučaj u strukturi.
 * Ako postoji podudaranje, blok koda povezan sa tom slučajem se izvršava.
 * Koristite pauzu kako biste spriječili da se kod automatski pokreće u sljedeći slučaj.
 * Podrazumevana reč se koristi ako se ne pronađe nijedno podudaranje.
 */

// Primjer 1 :

$boja = "zelena";

switch ($boja) {

    case "crvena":
        echo "Vasa omiljena boja je crvena!";
        break;

    case "plava":
        echo "Vasa omiljena boja je plava!";
        break;

    case "Zelena":
        echo "Vasa omiljena boja je zelena!";
        break;

    default:
        echo "Vasa omiljena boja nije ni crvena ni plava a ni zelena!";
}
echo "</br></br>";

// Primjer 2 :

$i = 2;

switch ($i) {

    case 0:
        echo "i je jednako 0";
        break;

    case 1:
        echo "i je jednako 1";
        break;

    case 2:
        echo "i je jednako 2";
        break;
}
echo "</br></br>";


// Primjer 3 :

$i = 'kolac';

switch ($i) {

    case "jabuka":
        echo "i je jabuka";
        break;

    case "tastatura":
        echo "i je tastatura";
        break;

    case "kolac":
        echo "i je kolac";
        break;
}

echo "</br></br>";


// Primjer 4 : OVO NIJE DOBRO mora se pisati "break"

/*
 * Ako ne napišete izjavu o prekidu "break" na kraju liste izjava slučaja, PHP će nastaviti da izvršava izjave o sledećem slučaju.
 * Na primer:
 * Ovde, ako je $i = 0, PHP bi izvršio sve eho izjave!
 * Ako je $i = 1, PHP bi izvršio poslednja dva eha.
 * Dobili biste očekivano ponašanje ('i equals 2' biće prikazano) samo ako je $i = 2.
 */

switch ($i) {
    case 0:
        echo "i je jednako 0 ";

    case 1:
        echo "i je jednako 1 ";

    case 2:
        echo "i je jednako 2 ";
}
echo "</br></br>";

// Primjer 5 :

$i = 2;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i je manje od 3 ali nije negativan broj";
        break;

    case 3:
        echo "i je 3";
}

echo "</br></br>";


// Primjer 6 :

$i = 3;

switch ($i) {
    case 0:
    case 1:
    case 2:
        echo "i je manje od 3 ali nije negativno";
        break;

    case 3:
        echo "i je 3";
}
echo "</br></br>";

// Primjer 7 : Poseban slučaj je podrazumevani slučaj. Ovaj slučaj odgovara svemu što nije u skladu sa prethodno navedenim slučajevima

$i = 3;
switch ($i) {

    case 0:
        echo "i je  0";
        break;

    case 1:
        echo "i je  1";
        break;

    case 2:
        echo "i je 2";
        break;

    default:
        echo "i nije 0, nije ni 1 a ni 2";
}

echo "</br></br>";


// Primjer 8 : isti kao prethodni, samo sto se umjesto { koristi :

switch ($i):

    case 0:
        echo "i je 0";
        break;

    case 1:
        echo "i je 1";
        break;

    case 2:
        echo "i je 2";
        break;

    default:
        echo "i nije 0, nije ni 1 a ni 2";

endswitch;

echo "</br></br>";

// Primejer 9 :

$pivo = '';

switch($pivo) {

    case 'niksicko';
    case 'bavaria';
    case 'heineken';
        echo 'Dobar izbor';
        break;

    default;
        echo 'Izaberite ponovo...';
        break;
}

echo "</br></br>";


// Primjer 10 :

$a = 'niksicko';
switch($a) {

    case 'tuborg';
    case 'niksicko';
    case 'heineken';
        echo 'Dobar izbor';
        break;

    default;
        echo 'Izaberite ponovo...';
        break;
}

echo "</br></br>";


// Primjer 11 :

switch(2) {

    case 1:
        echo "Jedan\n";
        break;

    case 2:
        echo "Dva\n"; // Ispunjen uslov
        break;

    case 3:
        echo "Tri\n";
        break;

    // Ovaj ne dostize
    case 2:
        echo "Dva ponovo\n";
        break;
}

echo "</br></br>";


switch(2) {

    case 1:
        echo "Jedan\n";
        break;

    case 2:
        echo "Dva ponovo\n"; // Ispunjen uslov
        break;

    // Sada ovaj ne dostize
    case 2:
        echo "Dva\n";
        break;

    case 3:
        echo "Tri\n";
        break;
}

echo "</br></br>";


// Primjer 12 :

$out = ' ';

for ($i = 1; $i < 10; $i++) {

    switch ($i) {

        case 1:
        case 2:
        case 3: echo $i . "</br>";
            break;

        default: $out .= ' '; // za Amru, da se doda prazan prostor?
            echo "$i je vece od 3 </br>";
            break;
    }
}
echo $out;

echo "</br></br>";


// Primjer 13 :

$dan = date("D");
switch($dan){
    case "Mon":
        echo "Danas je Ponedeljak. Ocisti kucu.";
        break;
    case "Tue":
        echo "Danas je Utorak. Kupi hranu.";
        break;
    case "Wed":
        echo "Danas je Srijeda. Posjeti doktora.";
        break;
    case "Thu":
        echo "Danas je Cetvrtak. Popravi auto.";
        break;
    case "Fri":
        echo "Danas je Petak. Nocas je zurka.";
        break;
    case "Sat":
        echo "Danas je Subota. Konsultacije u BILD-u.";
        break;
    case "Sun":
        echo "Danas je Nedelja. Odmori se covjece.";
        break;

    default:
        echo "Nepoznat dan.";
        break;
}

echo "</br></br>";


// Primjer 14 :

$vrijednost = 1;

switch ($vrijednost) {

    case 1 || 2:
        echo 'Vrijednost je 1 ili 2';
        break;

    default:
        echo "";
}

echo "</br></br>";


// Primjer 15 :

$destinacija = "New York";

echo "Putovanje u $destinacija</br>";

switch ($destinacija){
    case "Las Vegas":
        echo "Donesite dosta novca";
        break;
    case "Amsterdam":
        echo "Budite slobodnoumni";
        break;
    case "Egypt":
        echo "Donesite dosta pakovanja kreme za suncanje";
        break;
    case "Tokyo":
        echo "Donesite dosta love";
        break;
    case "Caribbean Islands":
        echo "Donesite odijelo za plivanje / ronjenje";
        break;

    default:
        echo "Donesite dosta donjeg vesa, he he!";
        break;
}

echo "</br></br></br>";