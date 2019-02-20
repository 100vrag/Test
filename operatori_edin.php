<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 12.2.2019
 * Time: 19:35
 */

echo " Operatori u PHP-u </br></br>";
echo "1.  PHP Aritmetički operatori </br></br>";
    echo "+	Sabiranje : </br>";
$x = 20;
$y = 5;
$sum = $x + $y;

echo "\$x + \$y = Zbir brojeva $x i $y je " . $sum;
echo "</br></br>";

echo "-	Oduzimanje : </br>";

$x = 20;
$y = 10;
$dif = $x - $y;
echo "\$x - \$y = Razlika brojeva $x i $y je " . $dif;
echo "</br></br>";

echo "*	Mnozenje : </br>";

$x = 5;
$y = 8;
$pro = $x * $y;
echo "\$x * \$y =	Proizvod brojeva $x i $y je " . $pro;
echo "</br></br>";

echo "/	Djeljenje : </br>";

$x = 20;
$y = 5;
$div = $x / $y;
echo "\$x / \$y =	Kolicnik brojeva $x i $y je " . $div;
echo "</br></br>";

echo "%	Mod - ostatak pri deljenju : </br>";

$x = 10;
$y = 6;
$rem = $x % $y;
echo "\$x % \$y =	Ostatak pri djeljenju brojeva $x i $y je " . $rem;
echo "</br></br>";

echo "**	Stepenovanje : </br>";

$x = 10;
$y = 6;
$exp = $x ** $y;
echo "\$x ** \$y = $x na $y je " . $exp;
echo "</br></br></br>";
// Primjeri za aritmeticke operatore
$x = 20;
$y = 5;

echo ($x + $y) . "</br>";
echo ($x - $y) . "</br>";
echo ($x * $y) . "</br>";
echo ($x / $y) . "</br>";
echo ($x % $y) . "</br>";
echo($x ** $y);
echo "</br></br></br>";

echo "2.  PHP Operatori dodeljivanja)</br></br>";
/*
 * Operatori dodeljivanja PHP se koriste sa numeričkim vrijednostima za upis vrijednosti na varijablu.
 * Osnovni operator zaduzenja u PHP-u je "=" . To znači da se vrednost lijevog operanda postavi na vrednost izraza zadatu s desne strane.
 * = ne predstavlja znak jednakosti vec znak dodjele
 */
echo "x = y	isto je kao : x = y	</br>";
$x = 10;
echo $x;
echo "</br>Lijevi operand se podesi na vrijednost izraza s desne strane ";
echo "</br></br>";

echo "Dodeljivanje uz sabiranje x += y isto je kao : x = x + y </br>";
$x = 50;
$x += 150;
// isto kao x = x + 150
echo $x;
echo "</br></br>";

echo "Dodeljivanje uz oduzimanje x -= y isto je kao : x = x - y </br>";
$x = 70;
$x -= 20;
// isto kao x = x - 20
echo $x;
echo "</br></br>";

echo "Dodeljivanje uz mnozenje x *= y isto je kao : x = x * y </br>";
$x = 10;
$x *= 5;
// isto kao x = x * 5
echo $x;
echo "</br></br>";

echo "Dodeljivanje uz deljenje x /= y isto je kao : x = x / y </br>";
$x = 20;
$x /= 4;
// isto kao x = x / 5   x=20/4
echo $x;
echo "</br></br>";

echo "Dodeljivanje uz mod x %= y isto je kao : x = x % y </br>";
$x = 20;
$x %= 7;
// isto kao x = x % 7
echo $x;
echo "</br></br></br>";

echo "3.  PHP Operatori upoređivanja/komparacije</br></br>";
/*
 * Operatori upoređivanja PHP koriste se za upoređivanje dvije vrijednosti (broja ili stringa):
 */
echo "Uporedjivanje  ==	 is equal isto je kao : x == y </br> Vraća true ako je x jednako y </br>";

$x = 220;
$y = "220";

var_dump($x == $y);
// vraca true jer su vrijednosti jednake
echo "</br></br>";

echo "Uporedjivanje  ===  is identical isto je kao : x === y </br> Vraća true ako je x jednako y, i oni su istog tipa </br>";
$x = 500;
$y = "500";

var_dump($x === $y);
// vraca false jer su vrijednosti jednake ali tipovi nisu (x - tipa int a y - tipa string)
echo "</br></br>";

echo "Uporedjivanje  !=  Not equal isto je kao : x != y </br> Vraća true ako x nije jednako y </br>";
$x = 200;
$y = "200";

var_dump($x != $y);
// vraca false jer su vrijednosti jednake (tip podataka nije bitan u ovom slucaju)
echo "</br></br>";

echo "Uporedjivanje  <>	 Not equal isto je kao : x <> y </br> Vraća true ako x nije jednako y </br>";
$x = 300;
$y = "300";

var_dump($x <> $y);
// vraca false jer su vrijednosti jednake
echo "</br></br>";

echo "Uporedjivanje  !==	Not identical isto je kao : x !== y </br> Vraća true ako x nije jednako y, ILI nisu istog tipa </br>";
$x = 200;
$y = "200";

var_dump($x !== $y);
// vraca true jer tipovi nisu isti (moraju se razlikovati bar vrijednosti ILI bar tipovi)
// ako su iste i vrijednosti i tipovi vraca false !
echo "</br></br>";

echo "Uporedjivanje  >  Greater than isto je kao :  x > y </br> Vraća true ako je x veće od y </br>";
$x = 70;
$y = 50;

var_dump($x > $y);
// vracca true jer je x vece od y
echo "</br></br>";

echo "Uporedjivanje  <  Less than isto je kao :  x < y </br> Vraća true ako je x manje od y </br>";
$x = 20;
$y = 50;

var_dump($x < $y);
// vracca true jer je x manje od y
echo "</br></br>";

echo "Uporedjivanje  >=	 Greater than or equal to isto je kao : x >= y </br> Vraća true ako je x veći ili jednak y </br>";

$x = 30;
$y = 30;

var_dump($x >= $y);
// vraca true jer je x vece ili jednako od y (ovdje je = )
echo "</br></br>";

echo "Uporedjivanje  <=	 Less than or equal to isto je kao : x <= y </br> Vraća true ako je x manji ili jednak y </br>";
$x = 40;
$y = 40;

var_dump($x <= $y);
// vraca true jer je x manje ili jednako od y (ovdje je = )
echo "</br></br></br>";

// Primjeri za sve operatore upoređivanja/komparacije :
echo "Primjeri za sve operatore upoređivanja/komparacije : </br>";

$x = 20;
$y = 50;
$z = "20";

var_dump($x == $z);
// Outputs: boolean true jer su iste vrijednosti , tip ovde nije bitan

var_dump($x === $z);
// Outputs: boolean false jer su iste vrijednosti ali jedna je int druga string (moraju i tipovi biti isti da vraca true)

var_dump($x != $y);
// Outputs: boolean true

var_dump($x !== $z);
// Outputs: boolean true jer se tip razlikuje nisu jednaki x i z

var_dump($x < $y);
// Outputs: boolean true

var_dump($x > $y);
// Outputs: boolean false

var_dump($x <= $y);
// Outputs: boolean true

var_dump($x >= $y);
// Outputs: boolean false
echo "</br></br></br>";

echo "4.  PHP Increment/Decrement Operators (Operatori povećanja/smanjenja) </br></br>";
/*
 * PHP increment operateri se koriste za povećanje vrijednosti promenljive
 * PHP decrement operateri se koriste za smanjenje vrijednosti promenljive
 */
echo "++\$x	Pre-increment : Povećava x za jedan, a zatim vraća novo x</br>";
$x = 5;
echo ++$x;
echo "</br></br>";

echo "\$x++	Post-increment : Vraća x, a zatim povećava x za jedan</br>";
$x = 5;
echo $x++;
echo "</br>Posle povecanja x je : " . $x;
echo "</br></br>";

echo "--\$x	Pre-decrement : Smanjuje x za jedan, a zatim vraća novo x</br>";
$x = 5;
echo --$x;
echo "</br></br>";

echo "\$x--	Post-decrement : Vraća x, a zatim smanji x za jedan</br>";
$x = 5;
echo $x--;

echo "</br>Posle smanjenja x je : " . $x;
echo "</br></br></br>";

// Primjer za sve operatore povećanja/smanjenja :

echo "Primjer za sve operatore povećanja/smanjenja : </br>";
$x = 5;
echo ++$x . "</br>";
// Outputs: 6
echo $x . "</br></br>";
// Outputs: 6
$x = 5;
echo $x++ . "</br>";
// Outputs: 5
echo $x . "</br></br>";
// Outputs: 6
$x = 5;
echo --$x . "</br>";
// Outputs: 4
echo $x . "</br></br>";
// Outputs: 4
$x = 5;
echo $x-- . "</br>";
// Outputs: 5
echo $x . "</br>";
// Outputs: 4
echo "</br></br></br>";

echo "5.  PHP Logical Operators (Logički operatori) </br></br>";
/*
 * PHP logički operatori se koriste za kombinovanje uslovnih izjava.
 */
// True je ako su i x i y istinite
echo "And \$x and \$y :</br></br> True je ako su i x i y istinite </br>";
$x = 70;
$y = 20;

if ($x == 70 and $y == 20) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br>";

// True je ako je x ili y istinito
echo "Or \$x or \$y :</br></br> True je ako je x ili y istinito </br>";
$x = 200;
$y = 50;

if ($x == 200 or $y == 80) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br>";

// True je ako je x ili y istinito, ali ne oboje
echo "Xor  \$x xor \$y :</br></br> True je ako je x ili y istinito, ali ne oboje </br>";
$x = 200;
$y = 50;

if ($x == 200 xor $y == 80) {
    echo "True";
} else {
    echo "False";
}
echo "</br>";

// Drugi Primjer za Xor :
$x = 100;
$y = 60;

if ($x == 10 xor $y == 60) {
    echo "True";
} else {
    echo "False";
}
echo "</br>";

// Treci Primjer za Xor :
echo "Koristi se i oznaka ^ za xor operator</br>";
$x = 200;
$y = 70;

if ($x == 200 ^ $y == 70) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br>";

// True ako su i x i y istinite
echo "&&   And	\$x && \$y :</br></br> True ako su i x i y istinite </br>";
$x = 200;
$y = 50;

if ($x == 200 && $y == 50) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br>";

// True ako je ili x ili y istinito
echo "||	Or	\$x || \$y :</br></br> True ako je x ili y istinito </br>";
$x = 200;
$y = 50;

if ($x == 200 || $y == 80) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br>";

// True ako $x nije istinito
echo "!	Not	!\$x :</br></br> True ako $x nije istinito (tj x nije jednako ili razlicito je od x)</br>";
$x = 200;

if ($x !== 90) {
    echo "True";
} else {
    echo "False";
}
echo "</br></br></br>";

// Primjer za logičke operatore :
echo "Primjer za logičke operatore : </br>";

$year = 2018;
// Godina deljiva sa 400 ili (deljiva sa 4 ali nije deljiva sa 100)

if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) {
    echo "$year je prestupna godina.";

} else {
    echo "$year nije prestupna godina.";
}
echo "</br></br></br>";

echo "Prioriteti i razlike izmedju logickih operatora :";
echo "</br></br></br>";

// Razlika izmedju && i & :
echo "Razlika izmedju && i & : </br>";

$x = 0;
// kako 5 < 4 je false nece ni nastavljati dalje izvrsavanje (unutar if-a drugi uslov preskace jer i za true i za false prvo je false i nikako ne moze biti true cijeli izraz)
if (5 < 4 && (7 / $x) == 0)
    echo "Nece se izvrsiti!";
else {
    echo "&& nece se izvrsiti tako da nemamo dijeljenja 7/0 ni greske koja bi se javila prilikom djeljenja.";
}
echo "</br></br>";

/*
 * Kompajler će izvršiti obe izjave i onda će rezultat biti AND. To je neefikasan način obavljanja stvari
 * zato što nema smisla izvršiti drugu izjavu ako je prva false jer je rezultat efikasan samo kada su obe izjave tačne.
 */
$x = 0;
if (5 < 4 & (7 / $x) == 0) {
    echo "Won't execute!";
} else {
    echo "&& wont execute the 7/0 so no divide by zero error."; // Ipak se javlja greska, provjeriti sa Amrom!!
}
echo "</br></br></br>";

// Razlika izmedju “||” i “|” :
echo "Razlika izmedju “||” i “|” : </br>";
/*
 * U slučaju "||" samo jedna izjava se izvršava i ako je "true" onda se druga izjava neće izvršiti.
 * Ali ako je prva false onda će druga biti provjerena za vrednost "true".
 *
 * Razlog za to je način na koji "ili" operater radi.
 * Operator "Or" zavisi samo od jedne istine, drugim riječima ako je neki od izraza true, rezultat će biti true.
 */
$x = 0;
if (5 > 4 || (7 / $x) == 0)
    echo "|| executed because 5 > 4 evaluates to true. No divide by zero error.";
else {
    echo "Won't execute!";
}
echo "</br></br>";

/*
 * To je u redu, ali način na koji se "|" ponaša je isti kao i "&",
 * drugim rečima obe izjave se izvršavaju bez obzira na rezultat prve izjave.
 */
$x = 0;
if (5 > 4 | (7 / $x) == 0)
    echo "|| executed because 5 > 4 evaluates to true. No divide by zero error.";
else {
    echo "Won't execute!";
}
echo "</br></br></br>";

// Razlika izmedju && i AND i Razlika izmedju || i OR : Zato što 'and / or' imaju niži prioritet od '=', ali '|| / &&' imaju veći prioritet.

echo "Razlika izmedju && i AND : </br>";

$bool = true && false;
var_dump($bool); // false, that's expected

$bool = true and false;
var_dump($bool); // true, ouch! NETACNO zato sto = ima veci prioritet nego AND !!!

$bool = (true and false);
var_dump($bool); // false, TACNO zato sto smo dodali ZAGRADE !!!

$bool = false && true;
var_dump($bool); // false, that's expected

$bool = false and true;
var_dump($bool); // false

$bool = true && true;
var_dump($bool); // true, that's expected

$bool = true and true;
var_dump($bool); // true

$bool = false && false;
var_dump($bool); // false, that's expected

$bool = false and false;
var_dump($bool); // false
echo "</br></br>";

echo "Razlika izmedju || i OR : </br>";

$bool = true || false;
var_dump($bool); // true

$bool = true or false;
var_dump($bool); // true

$bool = false || true;
var_dump($bool); // true zato sto '|| / &&' imaju veći prioritet od '='

$bool = false or true;
var_dump($bool); // false, NETACNO zato sto 'and / or' imaju niži prioritet od '=' !!!

$bool = (false or true);
var_dump($bool); // true, TACNO zato sto smo dodali ZAGRADE !!!

$bool = true || true;
var_dump($bool); // true

$bool = true or true;
var_dump($bool); // true

$bool = false || false;
var_dump($bool); // false

$bool = false or false;
var_dump($bool); // false

echo "6.  PHP String Operators (String operatori) </br></br>";
// vec radio nesto slicno i u fajlu za tipove podataka
echo "  .  Concatenation  \$txt1  .  \$txt2	 Concatenation of \$txt1 and \$txt2 :</br>";

$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "</br></br>";

echo "  .=	Concatenation dodeljivanje	\$txt1 .= \$txt2	\$txt2 dodajemo \$txt1 :</br>";

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
echo "</br></br></br>";

// // Primjer za string operatore :
echo "Primjer za string operatore : </br>";

$x = "Hello";
$y = " World!";
echo $x . $y . "</br>";
// Outputs: Hello World!

$x .= $y;
echo $x . "</br>";
// Outputs: Hello World!
echo "</br></br></br>";

// PHP Spaceship Operator PHP 7 :

echo "PHP Spaceship Operator PHP 7 : </br>";

/*
 * PHP 7 uvodi novi operater Spaceship (<=>) koji se može koristiti za upoređivanje dva izraza.
 *
 * Poznat je i kao kombinovani operater poređenja.
 *
 * Operator Spaceship vraća 0 ako su oba operanda jednaka, 1 ako je levi veći i -1 ako je desni veći.
 *
 * U osnovi nudi trosmerno upoređivanje kao što je prikazano u sledećoj tabeli:
 *
 * Operator	<=> Equivalent
    $x < $y	   ($x <=> $y) === -1
    $x <= $y   ($x <=> $y) === -1 || ($x <=> $y) === 0
    $x == $y   ($x <=> $y) === 0
    $x != $y   ($x <=> $y) !== 0
    $x >= $y   ($x <=> $y) === 1 || ($x <=> $y) === 0
    $x > $y    ($x <=> $y) === 1
 */

// Comparing Integers
echo 1 <=> 1;
// Outputs: 0 jednaki su L i D
echo "</br>0 znaci Levi = Desni";
echo "</br>";

echo 1 <=> 2;
// Outputs: -1 znaci D > L
echo "</br>-1 znaci Desni > Levi";
echo "</br>";

echo 2 <=> 1;
// Outputs: 1 znaci L > D
echo "</br>1 znaci Levi > Desni";
echo "</br>";

// Comparing Floats
echo 1.5 <=> 1.5;
// Outputs: 0
echo "</br>";

echo 1.5 <=> 2.5;
// Outputs: -1
echo "</br>";

echo 2.5 <=> 1.5;
// Outputs: 1
echo "</br></br>";

// Comparing Strings
echo "x" <=> "x";
// Outputs: 0
echo "</br>";

echo "x" <=> "y";
// Outputs: -1
echo "</br>";

echo "y" <=> "x";
// Outputs: 1
echo "</br></br></br>";

echo "Operatori nad bitovima :</br></br>";

/* Kada operateri imaju jednak prioritet, njihova asocijativnost odlučuje kako su operateri grupisani.
* Na primjer "-" je levo-asocijativan, tako da je 1 - 2 - 3 grupisano kao (1 - 2) - 3 i ocjenjuje na -4.
* "=" s druge strane je desno-asocijativan, tako da je $ a = $ b = $ c grupisano kao $ a = ($ b = $ c).
*/

/*
 * Operatori jednakih prioriteta koji nisu asocijativni ne mogu se koristiti jedni pored drugih,
 * na primer 1 <2> 1 je nezakonito u PHP-u.
 * Izraz 1 <= 1 == 1 je s druge strane legalan, jer operator == ima manji prioritet od operatora <=.
 */

// Primjer 1 :

echo "</br>--- BIT SHIFT RIGHT ON POSITIVE INTEGERS ---</br>"; // Amra - gdje ovo ima prakticnu primjenu

$a = 32; // 100000 u binarnom
echo "Unijet je broj : $a </br>";

// vrijednost >> broj puta ( 2 - broj pozicija za koje se u desnu stranu pomere svi bitovi vrednosti broja) 100000 - 1000
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";
echo "</br></br>";

$a = 42; // 101010
echo "Unijet je broj : $a </br>";

// vrijednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2; // 1010 to dodje 10
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";
echo "</br></br>";

$a = 4;
echo "Unet je broj : $a </br>";
// 3 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja (OVDE : bitovi se pomeraju u desno van granice = 0)
$a = $a >> 3;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";
echo "</br></br>";

// za negativne brojeve, invertuju se sve cifre i doda 1 i na taj nacin smo dobili negativni broj
$a = -5;
echo "Unijet je broj : $a </br>";
// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";
echo "</br></br>";

echo "</br>--- BIT SHIFT LEFT ON POSITIVE INTEGERS ---</br>";

$a = 31;
echo "Unijet je broj : $a </br>";

// vrijednost << broj puta ( 2 - broj pozicija za koje se u lijevu stranu pomjere svi bitovi vrijednosti broja)
$a = $a << 2;
echo "Kada se za odredjen broj pozicija pomjere svi bitovi vrednosti broja ulijevo dobijamo broj : $a";
echo "</br></br>";

$a = 31;
echo "Unet je broj : $a </br>";

// PHP_INT_SIZE - je veličina cijelog broja u bytes
$places = (PHP_INT_SIZE * 8) - 2; // pitati Amru

// vrijednost << broj puta ( $places - broj pozicija za koje se ulijevu stranu pomjere svi bitovi vrijednosti broja)
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";
echo "</br></br>";

// Primer 5 : Ispituje parnost broja

function parnost($num) // funkcije, pogledao i ovaj primjer
{
    if (($num % 2) == 1) {
        echo "$num je neparan broj.";
    }
    if (($num % 2) == 0) {
        echo "$num je paran broj.";
    }
}
parnost(10);

echo "</br></br></br>";

// Operator ? Ternarni operator :
/*
Jednostavan nacin za izvrsavanje uslovnog : html / javascript / css / other language code with php if else:

<?php if (condition): ?>

   html code to run if condition is true

<?php else: ?>

    html code to run if condition is false

<?php endif ?>
*/

echo "</br></br></br>";

// An other way for controls is the ternary operator (see Comparison Operators) that can be used as follows :

$v = 1;

// ako je argument v == 1 dodeli argumentu r 'Yes'  proci sa Amrom ove ternary operatore
$r = (1 == $v) ? 'Yes' : 'No';
// $r is set to 'Yes'
echo $r;

echo "</br>";

// ako je argument v == 1 dodeli argumentu r 'No'
$r = (3 == $v) ? 'Yes' : 'No';
// $r is set to 'No'
echo $r;

echo "</br></br>";

// and since PHP 5.3

$v = 'My Value';

$r = ($v) ?: 'No Value';
// $r is set to 'My Value' because $v is evaluated to TRUE
echo $r . "</br>";

$v = '';
echo ($v) ?: 'No Value';
// 'No Value' will be printed because $v is evaluated to FALSE

echo "</br></br></br>";

/*
Note that in php the ternary operator ?: has a left associativity unlike in C and C++ where it has right associativity.

You cannot write code like this (as you may have accustomed to in C/C++):
*/


$a = 2;

echo(
$a == 1 ? 'one' :
    $a == 2 ? 'two' :
        $a == 3 ? 'three' :
            $a == 4 ? 'four' : 'other');
// prints 'four'
echo "</br>";

// Moramo dodati zagrade da biste dobili željene rezultate :


$a = 2;

echo ($a == 1 ? 'one' :
    ($a == 2 ? 'two' :
        ($a == 3 ? 'three' :
            ($a == 4 ? 'four' : 'other') ) ) );
//prints 'two'



echo "</br>";

$a = 1;

echo ($a == 1 ? 'one' :
    ($a == 2 ? 'two' :
        ($a == 3 ? 'three' :
            ($a == 4 ? 'four' : 'other') ) ) );
//prints 'two'

echo "</br></br></br>";