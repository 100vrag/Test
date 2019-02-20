<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 1/10/2018
 * Time: 5:41 PM
 */

// Link : https://www.w3schools.com/php/php_datatypes.asp

// PHP String : A string can be any text inside quotes. You can use single or double quotes:

$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "</br>";
echo $y;

echo "</br></br>";

// PHP Integer : An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

/* Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)

*/

// In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

$x = 5985;
var_dump($x);

echo "</br></br>";

// PHP Float : A float (floating point number) is a number with a decimal point or a number in exponential form.

// In the following example $x is a float. The PHP var_dump() function returns the data type and value:

$x = 10.365;
var_dump($x);

echo "</br></br>";

// PHP Boolean : A Boolean represents two possible states: TRUE or FALSE.

$x = true;
$y = false;
var_dump($x);
echo "</br>";
var_dump($y);

echo "</br></br>";


// PHP Array : An array stores multiple values in one single variable.

// In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo "</br></br>";

// In the following example $mix is an array. The PHP var_dump() function returns the data type and value:


$mix = array("Volvo","BMW","Toyota", 1, 2, 3, -10, null, 3.5, -0.35, true);
var_dump($mix);

echo "</br></br>";

// PHP Object : An object is a data type which stores data and information on how to process that data.

// In PHP, an object must be explicitly declared.

// First we must declare a class of object. For this, we use the class keyword. A class is a structure that can contain properties and methods:


class Car {
    function car() {
        $this -> model = "VW";
    }
}

// create an object
$herbie = new car();

// show object properties
echo $herbie -> model;

echo "</br></br>";

// PHP NULL Value : Null is a special data type which can have only one value: NULL.

// A variable of data type NULL is a variable that has no value assigned to it.

// Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

// Variables can also be emptied by setting the value to NULL:

$x = "Hello world!";
$x = null;
var_dump($x);

echo "</br></br>";

// PHP Resource

/*

The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

A common example of using the resource data type is a database call.

We will not talk about the resource type here, since it is an advanced topic.

*/

echo "</br></br>";
echo "</br></br>";



// PHP String Functions :


// Get The Length of a String :
// outputs 12
echo strlen("Hello world!");


echo "</br></br>";

// Count The Number of Words in a String :
// outputs 2
echo str_word_count("Hello world!");

echo "</br></br>";

// Reverse a String :
// outputs !dlrow olleH
echo strrev("Hello world!");

echo "</br></br>";

// Search For a Specific Text Within a String : The example below searches for the text "world" in the string "Hello world!":
// outputs 6 jer prva pozicija karaktera krece od 0 pa se rec "world" pojavljuje od 6 pozicije
echo strpos("Hello world!", "world");

echo "</br></br>";

// Replace Text Within a String : The example below replaces the text "world" with "Dolly":
// outputs Hello Dolly!
echo str_replace("world", "Dolly", "Hello world!");

echo "</br></br>";
echo "</br></br>";



// PHP Data Types !!!

// Link : https://www.elated.com/articles/php-data-types/

// Returns true if value is an integer, false otherwise

echo "Function is_int : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_int(";
    var_export($value);
    echo ") = ";

    var_dump(is_int($value));
}

echo "</br></br>";

// Returns true if value is a float, false otherwise

echo "Function is_float : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_float(";
    var_export($value);
    echo ") = ";

    var_dump(is_float($value));
}

echo "</br></br>";

// Returns true if value is a string, false otherwise

echo "Function is_string : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_string(";
    var_export($value);
    echo ") = ";

    var_dump(is_string($value));
}

echo "</br></br>";

// Returns true if value is a Boolean, false otherwise

echo "Function is_bool : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_bool(";
    var_export($value);
    echo ") = ";

    var_dump(is_bool($value));
}

echo "</br></br>";

// Returns true if value is an array, false otherwise

echo "Function is_array : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_array(";
    var_export($value);
    echo ") = ";

    var_dump(is_array($value));
}
echo "</br>" . is_array($values);
echo "</br></br>";

// Returns true if value is an object, false otherwise

echo "Function is_object : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_object(";
    var_export($value);
    echo ") = ";

    var_dump(is_object($value));
}

echo "</br></br>";

// Returns true if value is a resource, false otherwise

echo "Function is_resource : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_resource(";
    var_export($value);
    echo ") = ";

    var_dump(is_resource($value));
}

echo "</br></br>";

// Returns true if value is null, false otherwise

echo "Function is_null : </br>";
$values = array(23, "23", 23.5, "23.5", null, true, false);

foreach ($values as $value) {

    echo "is_null(";
    var_export($value);
    echo ") = ";

    var_dump(is_null($value));
}

echo "</br></br>";

// Changing data types with settype() :

$x = 3.14;
echo "Pocetna vrednost promenljive je : $x </br>";
settype($x, "int");
echo "Nova vrednost promenljive je : $x </br>";

// Another way :

$x = 3.14;
echo "Pocetna vrednost promenljive je : $x </br>";
echo "Nova vrednost promenljive je : " . (integer) $x;
//echo (integer) $x;

echo "</br></br>";
echo "</br></br>";



// Primer iz knjige (za double) : povrsina kruga

/*
 * Function count area of ​​the circle
 *
 * @param $r - semicircle of the circle, arbitrary real number
 *
 * @return real number
 */
function povrsina($r)
{
    $pi = 3.14;
    $p = null;

    // vise se ne pise : double $pi, $r, $p;

    $p = $r * $r * $pi;
    echo "Povrsina kruga poluprecnika $r je : " . $p;
}
// 346.844714
povrsina(10.51);

echo "</br></br>";
echo "</br></br>";



// Link : https://www.tutorialrepublic.com/php-tutorial/php-data-types.php

// PHP Integers :

// decimal number
$a = 123;
var_dump($a);
echo "</br>";

// a negative number
$b = -123;
var_dump($b);
echo "</br>";

// hexadecimal number (base 16 - prefixed with 0x)
$c = 0x1A;
var_dump($c);
echo "</br>";

// octal number (base 8 - prefixed with 0) imamo : 3*(8 na o) + 2*(8 na 1) + 1*(8 na 2) + 0*(8 na 3) = 83
$d = 0123;
var_dump($d);

echo "</br></br>";



// PHP Strings :

$a = 'Hello world!';
echo $a;
echo "</br>";

$b = "Hello world!";
echo $b;
echo "</br>";

$c = 'Stay here, I\'ll be back.';
echo $c;

echo "</br></br>";



// PHP Floating Point Numbers or Doubles :

$a = 1.234;
var_dump($a);
echo "</br>";

$b = 10.2e3;
var_dump($b);
echo "</br>";

$c = 4E-10;
var_dump($c);

echo "</br></br>";



// PHP Booleans :

// Assign the value TRUE to a variable
$showError = true;
var_dump($showError);
echo "</br>";

// Assign the value FALSE to a variable
$showError = false;
var_dump($showError);
echo "</br></br>";



// PHP Arrays :

$colors = array("Red", "Green", "Blue");
echo "Colors : </br>";
var_dump($colors);
echo "</br>";

$color_codes = array("Red"   => "#ff0000",
                     "Green" => "#00ff00",
                     "Blue"  => "#0000ff"
);
echo "Color codes : </br>";
var_dump($color_codes);

echo "</br></br>";



// PHP Objects : Specijalan tip klase
// Elementi podataka koji se čuvaju u objektu nazivaju se njegovim svojstvima, a informacije ili kod koji opisuju način obrade podataka nazivaju se metodi objekta.

// Class definition
class greeting{
    // properties
    public $str = "Hello World!";

    // methods
    function show_greeting(){
        return $this->str;
    }
}
// Create object from class
$message = new greeting;
var_dump($message);

echo "</br></br>";



// PHP NULL :

$a = NULL;
var_dump($a);
echo "<br>";

$b = "Hello World!";
$b = NULL;
var_dump($b);

echo "</br></br>";



// Here's an example to clarify the differences between single and double quoted strings:

$my_str = 'World';
echo "Hello, $my_str!<br>";      // Displays: Hello, World!
echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!

echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
echo 'I\'ll be back';

echo "</br></br>";


// Integer overflow on a 32-bit system

$largeNumber = 2147483647;
// int(2147483647)
var_dump($largeNumber);

$largeNumber = 2147483648;
// int(2147483647)
var_dump($largeNumber);

$million = 1000000;
$largeNumber =  50000 * $million;
// float(50000000000)
var_dump($largeNumber);

echo "</br></br>";

echo chr(-159), chr(833), PHP_EOL;

echo "</br></br>";

// Example for boolean :

$height = 100;
$width = 50;

if ($width == 0) {
    echo "The width needs to be a non-zero number";
}

echo "</br></br>";



// Example for boolean :

$trueValue = true;

if ($trueValue) {

    print("that's true");
}else {
    print("that's false");
}

echo "</br></br>";



// Example for boolean :

$trueVal = 0;

if ($trueVal == 1) {

    print("that's true");
}else{
    print("that's false");
}
echo "</br></br>";


// Izracunati duzinu hipotenuze pravouglog trouga. (Pitagorina teorema)

/*
* Function count length of hypotenuse
*
* @param $kateta1 - arbitrary number
* @param $kateta2 - arbitrary number
*
* @return real number
*/
function duzinaHipotenuze($kateta1, $kateta2)
{
    $hipotenuza = null;
    $prva = pow($kateta1, 2);
    $druga = pow($kateta2, 2);
    $rezultat = $prva + $druga;

    $hipotenuza = sqrt($rezultat);
    return $hipotenuza;
}
echo "Duzina hipotenuze pravouglog trougla je : " . duzinaHipotenuze(3,4);

echo "</br></br>";

// Oblast vazenja promenljivih :

// Example 1 :

/*
 * Function vazenjePromenljivih - an example of the importance of variables
 *
 * @param $x - arbitrary number
 *
 * @return void
 */
function vazenjePromenljivih($x)
{
    echo "Gornja granica je x = " . $x . "</br>";

    for ($y = 1; $y < $x; $y++){

        echo "y = " . $y . "</br>";

        if ($z = 5 and $z < $y){

            echo "</br> Definisana je promenljiva z = $z</br>";
        }

    }
    $y--;
    // echo "</br>ovde nije definisana promenljiva : " . $z;
    // echo $z;   NE !!!
    echo "Ali jeste definisama promenljiva x = $x i y = $y";
}
vazenjePromenljivih(10);

echo "</br></br>";



// Example 2 :

for($a = 0; $a <= 4; $a++) {

    for($b = 0; $b <= $a; $b++) {

        echo "*";

        if($b < $a) {
            echo " ";
        }
    }
    echo "</br>";
}
echo "</br></br>";



// Example 3 : Zivotni vek promenljive je ogranicen na njenu oblast vazenja tj. promenljiva gubi svoju vrednost van bloka u kom je definisana

/*
 * Function zivotniVekPromenljivih - the lifetime of the variable is limited to its field of validity
 *
 * @param $x - arbitrary number
 *
 * @return void
 */
function zivotniVekPromenljivih($x)
{
    echo "Granica je x = " . $x . "</br>";

    for ($y = 1; $y < $x; $y++){

        echo "y = " . $y . "</br>";

        if ($z = 5 and $z < $y){

            echo "</br> Definisana je promenljiva z = $z </br>";
        }
    }
    $z = 100;
    echo "Nova vrednost promenljive z je : " . $z;
}
zivotniVekPromenljivih(10);

echo "</br></br>";



// Example 4 : Zivotni vek promenljive je ogranicen na njenu oblast vazenja tj. promenljiva gubi svoju vrednost van bloka u kom je definisana

/*
 * Function zivotniVekPromenljivih - the lifetime of the variable is limited to its field of validity
 *
 * @param $x - arbitrary number
 *
 * @return void
 */
function zivotniVekPromenljivih2($x)
{
    echo "Granica je x = " . $x . "</br>";

    for ($y = 1; $y < $x; $y++){

        echo "y = " . $y . "</br>";
        // ovo prolazi u php-u ali u javi ne!!!
        $x = 20;
    }
    echo "</br>Nova vrednost promenljive x = $x </br>";
}
zivotniVekPromenljivih2(10);

echo "</br></br>";



// KONVERZIJA RAZLICITIH TIPOVA PROMENLJIVIH U PHP-u : http://www.dyn-web.com/php/strings/type.php



// Function gettype — Get the type of a variable

// assign string
$val = 'Hello there!';
// string
echo gettype($val);


echo "</br></br>";



// Možete promeniti tip varijable tako što ćete dodijeliti novu vrijednost drugog tipa.

// now assign integer
$val = 21;
// integer
echo gettype($val);

echo "</br></br>";



// Javlja se greška kada pokušamo da koristimo echo da prikažemo varijablu koja trenutno ima vrijednost niza :

$val = array('one', 'two', 'three');
// echo $val;
// Notice: Array to string conversion in [file] on line [line number]
// Array

// idemo sa pirint_r ili var_dump, jer f-ja echo ne moze uspesno pretvoriti niz u string
var_dump($val);

echo "</br></br>";



// Number to String Conversion :

// integer
$val = 20;
var_dump('I will be ready in ' . $val . ' minutes.');
// string(30 - racuna i integer 20 kao string tj. numerička vrednost je neprimetno ugrađena u string!!!) "I will be ready in 20 minutes."


$x = "I will be ready in $val minutes.";
echo gettype($x);

echo "</br></br>";



// Boolean to String Conversion :

// U boolean to string konverziji, true se pretvara u '1', a false se pretvara u prazan string.
// Obratite pažnju da false ne dodaje duzinu stringa jer je pretvoren u prazan string.

// string(11) "How many? 1"
var_dump('How many? ' . true);

// slican nacin pomocu f-je gettype - ona samo vraca tip promenljive (ne vraca duzinu)
$x = "How many?" . true;
echo gettype($x);


// string(10) "How many? "
var_dump('How many? ' . false);

// slican nacin pomocu f-je gettype
$x = "How many?" . false;
echo gettype($x);

echo "</br></br>";



// Comparing Strings with Numbers

// Kada upoređujete string sa brojem pomoću operatora, niz se pretvara u broj.

// compare number to string that begins with number

if ( 123 == '123 Go' ) {
    echo 'equal';
} else {
    echo 'not equal';
}
// equal
// Možda je taj rezultat iznenađujući.
// Dve vrednosti su jednake (ne identične), jer kada PHP konvertuje string u broj, početni dio stringa se koristi ako je numerički.
// Ako nije, string se pretvara u 0.

echo "</br></br>";



// Sta se dešava kada upoređujete string sa brojem pomoću funkcije za upoređivanje stringova. U ovom slučaju broj se konvertuje u string :
// Nisu jednaka. Broj je manji od stringa.

// compare number with string using strcmp
echo strcmp(123, '123 Go');
// -3 jer 123 < 123 go za 3 karaktera

echo "</br></br>";



// Detaljnije na : http://www.dyn-web.com/php/strings/compare.php               !!!

echo "</br></br>";



// Determining a Variable's Type : function is_string

$val = '44';
if ( is_string($val) ) {
    echo 'string';
} else {
    echo 'not a string';
}
// string


// php nudi i druge f-je : is_int, is_array, is_bool, is_float, is_object.

echo "</br></br>";



// The settype Function : Pretpostavimo da imate promenljivu koja je trenutno dodeljena broju i želite da je pretvorite u string.
// Možete koristiti funkciju settipe da pored stringa postavite sljedeće tipove: integer, float, boolean, arrai, object, and null.

// integer
$val = 24;
// set $val type to string
settype($val, 'string');
// check type and value of $val
var_dump($val);
// string(2) "24"

echo "</br></br>";



// Type Conversion Functions :  funkcija strval može se koristiti za konvertovanje vrijednosti u string tj. strval — Get string value of a variable

// integer
$val = 88;
// check type and value of $val
var_dump($val);

// pass $val to strval and check return value with var_dump
var_dump( strval($val) );
// string(2) "88"


//  iako vidimo da je funkcija strval vratila vrijednost stringa,
// kada ponovo proveravamo vrednost varijable, vidimo da to nije string, već cijeli broj.
// Drugim riječima, funkcija srtval vraća konvertovanu vrijednost, ali ne menja tip samih varijabli !!!

// check type and value of $val
var_dump($val);

echo "</br></br>";



// Type Casting : boolean to a string

// boolean
$val = true;

// check type and value of $val
var_dump($val);
// bool(true)

// cast $val to string and check return value with var_dump
var_dump( (string)$val );
// string(1) "1"

// check type and value of $val
var_dump($val);
// bool(true)

echo "</br></br>";



// Link : http://php.net/manual/en/language.types.type-juggling.php

// $foo is string (ASCII 49)
$foo = "1";
var_dump($foo);

// $foo is now an integer (2)
$foo = 2;
var_dump($foo);

// $foo is now a float (2.6)
$foo = $foo * 1.3;
var_dump($foo);

echo "</br></br>";



// Example 1 : String access and modification by character :
// http://php.net/manual/en/language.types.string.php#language.types.string.substr

$a    = 'car';
// $a is a string

$a[0] = 'b';
// $a is still a string

echo $a;
// bar

echo "</br></br>";



// Example 2 :

// Get the first character of a string
$str = 'This is a test.';
var_dump($str);

$first = $str[0];
var_dump($first);

// Get the third character of a string
$third = $str[2];
var_dump($third);

// Get the last character of a string.
$str = 'This is still a test.';
$last = $str[strlen($str)-1];
var_dump($last);

// Modify the last character of a string
$str = 'Look at the sea';
var_dump($str);

$str[strlen($str)-1] = 'e';
var_dump($str);

// Another way : Modify the last character of a string

$str[14] = 'e';
var_dump($str);

echo "</br></br>";



// Type Casting Integer to boolean :

// $foo is an integer
$foo = 10;
var_dump($foo);

$bar = (boolean) $foo;
// $bar is a boolean
var_dump($bar);

// $foo is an integer
var_dump($foo);

echo "</br></br>";



//  Example 3 :

$foo = 10;
// $foo is an integer
var_dump($foo);

$str = "$foo";
// $str is a string
var_dump($str);

$fst = (string) $foo;
// $fst is also a string
var_dump($fst);

// This prints out that "they are the same"
if ($fst === $str) {
    echo "They are the same";
}

echo "</br></br>";



// Converting to boolean : http://php.net/manual/en/language.types.boolean.php#language.types.boolean.casting

var_dump((bool) "");
// bool(false)

var_dump((bool) 1);
// bool(true)

var_dump((bool) -2);
// bool(true)

var_dump((bool) "foo");
// bool(true)

var_dump((bool) 2.3e5);
// bool(true)

var_dump((bool) array(12));
// bool(true)

var_dump((bool) array());
// bool(false)

var_dump((bool) "false");
// bool(true)

echo "</br></br>";



// Converting to integer : http://php.net/manual/en/language.types.integer.php#language.types.integer.casting
// Function intval()
// FALSE će dati 0 (nula), a TRUE će dati 1 (jedan).

// Neispravno nikad u (int) ne stavljati nepoznatu vrednost jer moze doci do greske :
echo (int) ( (0.1+0.7) * 10 );
// echoes 7!

echo "</br>";

// Ispravno :
echo ( (0.1+0.7) * 10 );
// echoes 8!

echo "</br></br>";



// Casting to NULL :

$a = array();

$a = null;

echo is_null($a);
// return true

echo "</br></br>";



// PHP type comparison tables : http://php.net/manual/en/types.comparisons.php
// SUPER TABELA !!!

echo "</br></br>";