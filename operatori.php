<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 12/14/2017
 * Time: 4:02 PM
 */

echo " PHP Operators </br></br>";

/*
 * PHP deli operatere u sledeće grupe :

1. Aritmetički operatori
2. Operatori zaduženja/dodeljivanja
3. Operatori upoređivanja/komparacije
4. Operatori povećanja/smanjenja
5. Logički operatori
6. String operatori
7. Arrai operatori
 */

echo "1.  PHP Arithmetic Operators (Aritmetički operatori) </br></br>";

echo "+	Addition : </br>";
$x = 10;
$y = 6;
$sum = $x + $y;

echo "\$x + \$y = Sum of $x and $y is " . $sum;

echo "</br></br>";


echo "-	Subtraction : </br>";

$x = 10;
$y = 6;
$dif = $x - $y;

echo "\$x - \$y = Difference of $x and $y is " . $dif;

echo "</br></br>";


echo "*	Multiplication : </br>";

$x = 10;
$y = 6;
$pro = $x * $y;

echo "\$x * \$y =	Product of $x and $y is " . $pro;

echo "</br></br>";


echo "/	Division : </br>";

$x = 10;
$y = 6;
$div = $x / $y;

echo "\$x / \$y =	Quotient of $x and $y is " . $div;

echo "</br></br>";


echo "%	Modulus(mod - ostatak pri deljenju) : </br>";

$x = 10;
$y = 6;
$rem = $x % $y;

echo "\$x % \$y =	Remainder of $x divided by $y is " . $rem;

echo "</br></br>";


echo "**	Exponentiation : </br>";

$x = 10;
$y = 6;
$exp = $x ** $y;

echo "\$x ** \$y = \$x to the \$y'th power is " . $exp;

echo "</br></br></br>";


// Primer za sve Aritmeticke operatore :

echo "Primer za sve Aritmeticke operatore : </br>";

$x = 10;
$y = 4;

echo ($x + $y) . "</br>";
// 0utputs: 14

echo ($x - $y) . "</br>";
// 0utputs: 6

echo ($x * $y) . "</br>";
// 0utputs: 40

echo ($x / $y) . "</br>";
// 0utputs: 2.5

echo ($x % $y) . "</br>";
// 0utputs: 2

echo($x ** $y);
// 0utputs: 10 000

echo "</br></br></br>";


echo "2.  PHP Assignment Operators (Operatori zaduženja/dodeljivanja)</br></br>";

/*
 * Operatori dodeljivanja PHP se koriste sa numeričkim vrijednostima za upis vrijednosti na varijablu.
 * Osnovni operator zaduzenja u PHP-u je "=" . To znači da se vrednost levog operanda postavi na vrednost izraza zadatu s desne strane.
 */


echo "x = y	isto je kao : x = y	</br>";

// ovde je y = 10
$x = 10;
echo $x;
echo "</br>Levi operand se podesi na vrednost izraza s desne strane ";

echo "</br></br>";


echo "Dodeljivanje uz sabiranje x += y isto je kao : x = x + y </br>";

// ovde je y = 100
$x = 20;
$x += 100;
// isto kao x = x + 100

echo $x;

echo "</br></br>";


echo "Dodeljivanje uz oduzimanje x -= y isto je kao : x = x - y </br>";

// ovde je y = 30
$x = 50;
$x -= 30;
// isto kao x = x - 30

echo $x;

echo "</br></br>";


echo "Dodeljivanje uz mnozenje x *= y isto je kao : x = x * y </br>";

// ovde je y = 6
$x = 10;
$x *= 6;
// isto kao x = x * 6

echo $x;

echo "</br></br>";


echo "Dodeljivanje uz deljenje x /= y isto je kao : x = x / y </br>";

// ovde je y = 5
$x = 10;
$x /= 5;
// isto kao x = x / 5

echo $x;

echo "</br></br>";


echo "Dodeljivanje uz mod x %= y isto je kao : x = x % y </br>";

// ovde je y = 4
$x = 15;
$x %= 4;
// isto kao x = x % 4

echo $x;

echo "</br></br></br>";


// Primer za sve operatore zaduženja/dodeljivanja :

echo "Primer za sve operatore zaduženja/dodeljivanja : </br>";

$x = 10;
echo $x . "</br>";
// Outputs: 10

$x = 20;
$x += 30;
echo $x . "</br>";
// Outputs: 50

$x = 50;
$x -= 20;
echo $x . "</br>";
// Outputs: 30

$x = 5;
$x *= 25;
echo $x . "</br>";
// Outputs: 125

$x = 50;
$x /= 10;
echo $x . "</br>";
// Outputs: 5

$x = 100;
$x %= 15;
echo $x;
// Outputs: 10

echo "</br></br></br>";


echo "3.  PHP Comparison Operators (Operatori upoređivanja/komparacije)</br></br>";

/*
 * Operatori upoređivanja PHP koriste se za upoređivanje dve vrednosti (broja ili stringa):
 */

echo "Uporedjivanje  ==	 is equal isto je kao : x == y </br> Vraća true ako je x jednako y </br>";

$x = 100;
$y = "100";

var_dump($x == $y);
// vraca true jer su vrednosti jednake

echo "</br></br>";


echo "Uporedjivanje  ===  is identical isto je kao : x === y </br> Vraća true ako je x jednako y, i oni su istog tipa </br>";

$x = 100;
$y = "100";

var_dump($x === $y);
// vraca false jer su vrednosti jednake ali tipovi nisu (x - tipa int a y - tipa string)

echo "</br></br>";


echo "Uporedjivanje  !=  Not equal isto je kao : x != y </br> Vraća true ako x nije jednako y </br>";

$x = 100;
$y = "100";

var_dump($x != $y);
// vraca false jer su vrednosti jednake (tip podataka nije bitan u ovom slucaju)

echo "</br></br>";


echo "Uporedjivanje  <>	 Not equal isto je kao : x <> y </br> Vraća true ako x nije jednako y </br>";

$x = 100;
$y = "100";

var_dump($x <> $y);
// vraca false jer su vrednosti jednake

echo "</br></br>";


echo "Uporedjivanje  !==	Not identical isto je kao : x !== y </br> Vraća true ako x nije jednako y, ILI nisu istog tipa </br>";

$x = 100;
$y = "100";

var_dump($x !== $y);
// vraca true jer tipovi nisu isti (moraju se razlikovati bar vrednosti ILI bar tipovi)
// ako su iste i vrednosti i tipovi vraca false !

echo "</br></br>";


echo "Uporedjivanje  >  Greater than isto je kao :  x > y </br> Vraća true ako je x veće od y </br>";

$x = 100;
$y = 50;

var_dump($x > $y);
// vracca true jer je x vece od y

echo "</br></br>";


echo "Uporedjivanje  <  Less than isto je kao :  x < y </br> Vraća true ako je x manje od y </br>";

$x = 10;
$y = 50;

var_dump($x < $y);
// vracca true jer je x manje od y

echo "</br></br>";


echo "Uporedjivanje  >=	 Greater than or equal to isto je kao : x >= y </br> Vraća true ako je x veći ili jednak y </br>";

$x = 50;
$y = 50;

var_dump($x >= $y);
// vraca true jer je x vece ili jednako od y (ovde je = )

echo "</br></br>";


echo "Uporedjivanje  <=	 Less than or equal to isto je kao : x <= y </br> Vraća true ako je x manji ili jednak y </br>";

$x = 50;
$y = 50;

var_dump($x <= $y);
// vraca true jer je x manje ili jednako od y (ovde je = )

echo "</br></br></br>";


// Primer za sve operatore upoređivanja/komparacije :

echo "Primer za sve operatore upoređivanja/komparacije : </br>";

$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z);
// Outputs: boolean true jer su iste vrednosti , tip ovde nije bitan

var_dump($x === $z);
// Outputs: boolean false jer su iste vrednosti ali jedna je int druga string (moraju i tipovi biti isti da vraca true)

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
 * PHP increment operateri se koriste za povećanje vrednosti promenljive
 * PHP decrement operateri se koriste za smanjenje vrednosti promenljive
 */


echo "++\$x	Pre-increment : Povećava x za jedan, a zatim vraća novo x</br>";

$x = 10;
echo ++$x;

echo "</br></br>";


echo "\$x++	Post-increment : Vraća x, a zatim povećava x za jedan</br>";

$x = 10;
echo $x++;

echo "</br>Posle povecanja x je : " . $x;

echo "</br></br>";


echo "--\$x	Pre-decrement : Smanjuje x za jedan, a zatim vraća novo x</br>";

$x = 10;
echo --$x;

echo "</br></br>";


echo "\$x--	Post-decrement : Vraća x, a zatim smanji x za jedan</br>";

$x = 10;
echo $x--;

echo "</br>Posle smanjenja x je : " . $x;

echo "</br></br></br>";


// Primer za sve operatore povećanja/smanjenja :

echo "Primer za sve operatore povećanja/smanjenja : </br>";

$x = 10;

echo ++$x . "</br>";
// Outputs: 11
echo $x . "</br></br>";
// Outputs: 11


$x = 10;
echo $x++ . "</br>";
// Outputs: 10
echo $x . "</br></br>";
// Outputs: 11


$x = 10;
echo --$x . "</br>";
// Outputs: 9
echo $x . "</br></br>";
// Outputs: 9


$x = 10;
echo $x-- . "</br>";
// Outputs: 10
echo $x . "</br>";
// Outputs: 9

echo "</br></br></br>";


echo "5.  PHP Logical Operators (Logički operatori) </br></br>";

/*
 * PHP logični operatori se koriste za kombinovanje uslovnih izjava.
 */


// True je ako su i x i y istinite
echo "And \$x and \$y :</br></br> True je ako su i x i y istinite </br>";

$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";


// True je ako je x ili y istinito
echo "Or \$x or \$y :</br></br> True je ako je x ili y istinito </br>";

$x = 100;
$y = 50;

if ($x == 100 or $y == 80) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";


// True je ako je x ili y istinito, ali ne oboje
echo "Xor  \$x xor \$y :</br></br> True je ako je x ili y istinito, ali ne oboje </br>";

$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "True";
} else {

    echo "False";
}

echo "</br>";

// Drugi primer za Xor :

$x = 100;
$y = 50;

if ($x == 10 xor $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br>";

// Treci primer za Xor :

echo "Koristi se i oznaka ^ za xor operator</br>";

$x = 100;
$y = 50;

if ($x == 10 ^ $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";


// True ako su i x i y istinite
echo "&&   And	\$x && \$y :</br></br> True ako su i x i y istinite </br>";

$x = 100;
$y = 50;

if ($x == 100 && $y == 50) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";


// True ako je ili x ili y istinito
echo "||	Or	\$x || \$y :</br></br> True ako je x ili y istinito </br>";

$x = 100;
$y = 50;

if ($x == 100 || $y == 80) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br>";


// True ako $x nije istinito
echo "!	Not	!\$x :</br></br> True ako $x nije istinito (tj x nije jednako ili razlicito je od x)</br>";

$x = 100;

if ($x !== 90) {
    echo "True";
} else {

    echo "False";
}

echo "</br></br></br>";


// Primer za logičke operatore :

echo "Primer za logičke operatore : </br>";

$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
// Godina deljiva sa 400 ili (deljiva sa 4 ali nije deljiva sa 100)

if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) {

    echo "$year is a leap year.";

} else {

    echo "$year is not a leap year.";
}

echo "</br></br></br>";


echo "Prioriteti i razlike izmedju logickih operatora :";

echo "</br></br></br>";


// Razlika izmedju && i & :
echo "Razlika izmedju && i & : </br>";

/*
 * && se naziva operaterom AND i se takođe zove AND operatora, ali osnovna razlika između njih je u načinu na koji se izvršavaju. Sintaksa za && i & isto kao i za sledeće:

    bool_ekp1 && bool_ekp2
    bool_ekp1 & bool_ekp2

 * Sada sintaksa od 1 i 2 izgleda slično jedna drugoj, ali način na koji će se izvršiti je sasvim drugačiji :
 *
 * Nacin izvrsavanja za && :

 1.) U prvoj izjavi, prvi bool_ekp1 će se izvršiti i onda rezultat ovog izraza odlučuje o izvršenju druge izjave.
     Ako je false, AND će biti false, tako da nema smisla izvršiti drugu izjavu.

        Zatim :

 2.) Izjava bool_ekp2 se izvršava ako i samo ako bool_ekp1 vraća true na izvršenje.
     Poznat je i kao operater kratkog spoja, jer širi vezu (izvod) na osnovu rezultata prvog izraza
*/

$x = 0;
// kako 5 < 4 je false nece ni nastavljati dalje izvrsavanje (unutar if-a drugi usliov preskace jer i za true i za false prvo je false i nikako ne moze biti true ceo izraz)
if (5 < 4 && (7 / $x) == 0)
    echo "Won't execute!";
else {
    echo "&& wont execute the 7/0 so no divide by zero error.";
}

echo "</br></br>";


/*
 * Kompajler će izvršiti obe izjave i onda će rezultat biti ANDed. To je neefikasan način obavljanja stvari
 * zato što nema smisla izvršiti drugu izjavu ako je prva false jer je rezultat efikasan samo kada su obe izjave tačne.
 */


$x = 0;
if (5 < 4 & (7 / $x) == 0) {
    echo "Won't execute!";
} else {
    echo "&& wont execute the 7/0 so no divide by zero error.";
}

echo "</br></br></br>";


// Razlika izmedju “||” i “|” :
echo "Razlika izmedju “||” i “|” : </br>";

/*
 * U slučaju "||" samo jedna izjava se izvršava i ako je "true" onda se druga izjava neće izvršiti.
 * Ali ako je prva false onda će druga biti proverena za vrednost "true".
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
var_dump($bool); // false, TACNO zato sto sam dodala ZAGRADE !!!


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
var_dump($bool); // true, TACNO zato sto sam dodala ZAGRADE !!!


$bool = true || true;
var_dump($bool); // true

$bool = true or true;
var_dump($bool); // true


$bool = false || false;
var_dump($bool); // false

$bool = false or false;
var_dump($bool); // false


// Test :

echo "</br>Test :</br>";

$test = true and false;
var_dump($test); // true, NETACNO !!!

echo "</br>";

$test = (true and false);
var_dump($test); // false, TACNO zbog zagrada

echo "</br>";

$test = true && false;
var_dump($test); // false, TACNO jer '&&' ima veci prioritet nego '='

echo "</br>";

$test = (true && false);
var_dump($test); // false, TACNO jer '&&' ima veci prioritet nego '=' a postoje i zagrade

echo "</br></br></br>";


echo "6.  PHP String Operators (String operatori) </br></br>";


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


// // Primer za string operatore :

echo "Primer za string operatore : </br>";

$x = "Hello";
$y = " World!";
echo $x . $y . "</br>";
// Outputs: Hello World!

$x .= $y;
echo $x . "</br>";
// Outputs: Hello World!

echo "</br></br></br>";


echo "7.  PHP Array Operators (Array operatori) </br></br>";


echo "+	Union	\$x + \$y	Union of arrays \$x and \$y </br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

// union of $x and $y
print_r($x + $y);

echo "</br></br>";


echo "==	Jednakost	\$x == \$y	Vraća true ako \$x i \$y imaju iste parove ključa i vrijednosti (svi kljucevi i vrednosti moraju biti isti)</br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x == $y);
// false

echo "</br>";

// drugi primer za == :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x == $y);
// true

echo "</br></br>";


echo "===	Identitet	\$x === \$y	Vraća true ako \$x i \$y imaju iste parove ključa i vrijednosti u istom redosledu i istih tipova </br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x === $y);
// out : false

echo "</br>";

// drugi primer za === :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x === $y);
// out : true

echo "</br>";

// treci primer za === :

$c = array("a" => "blue", "b" => "yellow");
$d = array("a" => "red", "b" => "green");

var_dump($c === $d);
// out : false

echo "</br></br>";

// cetvrti primer za === :

$c = array("a" => "100", "b" => "yellow");
$d = array("a" => 100, "b" => "yellow");

var_dump($c === $d);
// out : false nije isti tip podatka 100 u prvom nizu string a u drugom int

echo "</br></br>";

// peti primer za === :

$c = array("a" => 100, "b" => 10, "c" => "yellow");
$d = array("a" => 100, "b" => 10, "c" => "yellow");

var_dump($c === $d);
// out : true isti kljucevi i vrednosti na istim pozicijama i isti tipovi podataka int-int i string-string

echo "</br></br>";


echo "!=	Nejednakost	\$x != \$y	Vraća true ako \$x nije jednako \$y </br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x != $y);
// true

echo "</br>";

// drugi primer za != :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x != $y);
// false

echo "</br>";

// treci  primer za != :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "c" => "green");

var_dump($x != $y);
// true razlikuje se kljuc b i c


echo "</br>";

// cetvrti  primer za != :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "yellow");

var_dump($x != $y);
// true razlikuju se vrednosti u kljucu b

echo "</br></br>";


echo "<>	Nejednakost	\$x <> \$y	Vraća true ako \$x nije jednako \$y </br>";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x <> $y);
// true

echo "</br>";

// drugi primer za <> :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x <> $y);
// false

echo "</br></br>";


echo "!==	Neidentican \$x !== \$y	Vraca true ako \$x nije identičan sa \$y";

$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");

var_dump($x !== $y);
// true

echo "</br>";

// drugi primer za !== :

$x = array("a" => "100", "b" => "green");
$y = array("a" => 100, "b" => "green");

var_dump($x !== $y);
// true jer se razlikuje tip 100 je string u prvom nizu a u drugom int

echo "</br>";

// treci primer za !== :

$x = array("a" => "red", "b" => "green");
$y = array("a" => "red", "b" => "green");

var_dump($x !== $y);
// false

echo "</br></br></br>";


// Primer za array operatore :

echo "Primer za array operatore : </br>";

$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

// Union of $x and $y
$z = $x + $y;
var_dump($z);

var_dump($x == $y);
// Outputs: boolean false

var_dump($x === $y);
// Outputs: boolean false

var_dump($x != $y);
// Outputs: boolean true

var_dump($x <> $y);
// Outputs: boolean true

var_dump($x !== $y);
// Outputs: boolean true

echo "</br></br></br>";


// PHP Spaceship Operator PHP 7 :

echo "PHP Spaceship Operator PHP 7 : </br>";

/*
 * PHP 7 uvodi novi operater svemirskog broda (<=>) koji se može koristiti za upoređivanje dva izraza.
 *
 * Poznat je i kao kombinovani operater poređenja.
 *
 * Operator svemirskog broda vraća 0 ako su oba operanda jednaka, 1 ako je levi veći i -1 ako je desni veći.
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


// Primer 1 :

echo "</br>--- BIT SHIFT RIGHT ON POSITIVE INTEGERS ---</br>";

$a = 32;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 42;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 20;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 20;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 3 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 3;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 17;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 4;
echo "Unet je broj : $a </br>";

// 3 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja (OVDE : bitovi se pomeraju u desno van granice = 0)
$a = $a >> 3;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = 4;
echo "Unet je broj : $a </br>";

// 4 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja (OVDE : takodje dobijamo = 0)
$a = $a >> 4;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


// Primer 2 :

echo "</br>--- BIT SHIFT RIGHT ON NEGATIVE INTEGERS ---</br>";

$a = -4;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 1 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 1;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = -4;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 2 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 2;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";

echo "</br></br>";


$a = -4;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 3 - broj pozicija za koje se udesnu stranu pomere svi bitovi vrednosti broja)
$a = $a >> 3;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja udesno dobijamo broj : $a";
// ne može se prebaciti preko -1 !!!

echo "</br></br>";


// Primer 3 :

echo "</br>--- BIT SHIFT LEFT ON POSITIVE INTEGERS ---</br>";

$a = 4;
echo "Unet je broj : $a </br>";

// vrednost << broj puta ( 1 - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << 1;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


$a = 31;
echo "Unet je broj : $a </br>";

// vrednost << broj puta ( 1 - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)

// PHP_INT_SIZE - je veličina celog broja u bytes
$places = (PHP_INT_SIZE * 8) - 4;
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


$a = 31;
echo "Unet je broj : $a </br>";

// PHP_INT_SIZE - je veličina celog broja u bytes
$places = (PHP_INT_SIZE * 8) - 3;

// vrednost << broj puta ( $places - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


$a = 31;
echo "Unet je broj : $a </br>";

// PHP_INT_SIZE - je veličina celog broja u bytes
$places = (PHP_INT_SIZE * 8) - 2;

// vrednost << broj puta ( $places - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


// Primer 4 :

echo "</br>--- BIT SHIFT LEFT ON NEGATIVE INTEGERS ---</br>";

$a = -4;
echo "Unet je broj : $a </br>";

// vrednost >> broj puta ( 1 - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << 1;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


$a = -4;
echo "Unet je broj : $a </br>";

// PHP_INT_SIZE - je veličina celog broja u bytes
$places = (PHP_INT_SIZE * 8) - 3;

// vrednost >> broj puta ( $places - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


$a = -4;
echo "Unet je broj : $a </br>";

// PHP_INT_SIZE - je veličina celog broja u bytes
$places = (PHP_INT_SIZE * 8) - 2;

// vrednost >> broj puta ( $places - broj pozicija za koje se ulevu stranu pomere svi bitovi vrednosti broja)
$a = $a << $places;
echo "Kada se za odredjen broj pozicija pomere svi bitovi vrednosti broja ulevo dobijamo broj : $a";

echo "</br></br>";


echo "</br></br>";


// Primer 5 : Ispituje parnost broja

function parnost($num)
{
    if (($num % 2) == 1) {
        echo "$num is odd.";
    }
    if (($num % 2) == 0) {
        echo "$num is even.";
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


// ako je argument v == 1 dodeli argumentu r 'Yes'
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