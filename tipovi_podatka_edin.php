<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 10.2.2019
 * Time: 19:51
 */

// PHP String

echo 'Tipovi podataka';
echo "</br></br>";
echo 'String';
echo "</br></br>";
$x='Zdravo Amra!';
$y="Zdravo Edine!";
echo "Edin: " . $x;
echo "<br/>";
echo "Amra: " . $y;
echo "</br>";
$c = 'Stay here, I\'ll be back.';
echo $c;
echo "</br></br>";

// PHP String Functions :
// Duzina stringa
$l=strlen("Zdravo, zdravo, sta se radi?");
echo "String: Zdravo, zdravo, sta se radi? .<br>";
echo "Duzina zadatog stringa je: " . $l . "<br>";

// Broj rijeci u stringu
$br=str_word_count("Zdravo, zdravo, sta se radi?");
echo "Broj rijeci u zadatom stringu je: " . $br . "<br>";

// obrni string
echo strrev("Zdravo, zdravo, sta se radi?") . "<br>";

//vraca poziciju na kojoj pocinje trazaena rijec
echo strpos("Zdravo, zdravo, sta se radi?","sta") . "<br>";

// zamjena rijeci u stringu
echo str_replace("se radi", "ima", "Zdravo, zdravo, sta se radi?");

/* Za Amru: Sta predstavljaju Heredoc i Nowdoc i gdje se koriste ? */

echo "</br></br>";

// PHP Integer
echo 'Integer';
$x=2356;
var_dump($x);
$y=5415;
var_dump($y);
$z=$x+$y;
var_dump($z);
$a = 0123;
var_dump($a);
$b = -123;
var_dump($b);
var_dump((int) (25/6));
$c = 0x1A;
var_dump($c);
echo "</br>";

// Promjena tipa podataka pomocu settype() :
$x = 3.14;
echo "Pocetna vrednost promenljive je : $x </br>";
settype($x, "int");
echo "Nova vrednost promenljive je : $x </br>";

// Drugi nacin :

$x = 3.14;
echo "Pocetna vrednost promenljive je : $x </br>";
echo "Nova vrednost promenljive je : " . (integer) $x;
echo "</br></br>";

// PHP Boolean

echo 'Boolean';
$x=true;
var_dump($x);
$y=false;
var_dump($y);
var_dump((bool) -2);
$vrijednost = 0;
echo "</br>";
if ($vrijednost == 1) {
    print("Vrijednost je jednaka zadatom broju!");
}else{
    print("Vrijednost nije jednaka zadatom broju!");
}
echo "</br></br>";

// PHP Float

echo 'Float';
$x = 55.251;
var_dump($x);
$y = 1.2e3;
var_dump($y);
$z=14.955876;
var_dump(round($z,2));
echo "</br></br>";

// PHP Object - pitati Amru za ovo, malo detaljnije objasniti

// Objekat je tip podataka koji cuva podatke i informacije o tome kako obraditi te podatke.
// U PHP-u objekt mora biti eksplicitno deklarisan.
// Prvo moramo deklarisati klasu objekta. Za ovo koristimo ključnu reč klase. Klasa je struktura koja može da sadrži svojstva i metode

echo 'PHP Object';
echo "</br>";
class Auto {
    var $tockovi=4;
    var $motor=1;
    var $vrata=5;

    function auto() {
        $this -> model = "Nissan";
    }
    function broj_vrata () {
        $this -> vrata=6;
    }
}

// kreiranje objekta
$tip = new Auto();
$kamion = new Auto();

// Svojstva objekta
echo "<br/>";
echo $tip -> model ."</br>";
echo $tip -> tockovi ."<br/>";
echo $kamion -> model="Kamion" ."<br/>";
echo "Broj tockova kod kamiona: " . $kamion -> tockovi=10 ."</br>";
$kamion->broj_vrata();
echo "Broj vrata kod kamiona: " . $kamion->vrata;
echo "</br>";

// nasledjivanje klasa
class Avion extends Auto {

}
$boing = new Avion();
echo $boing -> model='Avion' ."<br/>";
echo $boing->tockovi;
echo "</br></br>";

// PHP NULL: Null je poseban tip podataka koji može imati samo jednu vrednost: NULL.

// Varijabla tipa podataka NULL je promenljiva koja nema dodeljenu vrednost.

// Ako se varijabla kreira bez vrijednosti, automatski joj se dodjeljuje vrijednost NULL.

// Varijable se takođe mogu isprazniti postavljanjem vrednosti na NULL.

echo "PHP NULL Value" . "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);
echo "</br></br>";

// KONVERZIJA RAZLICITIH TIPOVA PROMENLJIVIH U PHP-u
echo "KONVERZIJA RAZLICITIH TIPOVA PROMENLJIVIH U PHP-u" . "</br></br>";

// Funkcija gettype
// promjenljiva je tipa STRING
$val = 'Zdravo ljudi!';
echo gettype($val);
echo "</br></br>";

// Možemo promeniti tip varijable tako što ćemo dodijeliti novu vrijednost drugog tipa.
// Sada je promjenljiva tipa INTEGER
$val = 50;
echo gettype($val);
echo "</br></br>";

// Number to String Conversion :
// integer
$val = 20;
var_dump('Bicu spreman za ' . $val . ' minuta.');
$x = "Bicu spreman za $val minuta.";
echo gettype($x);
echo "</br></br>";