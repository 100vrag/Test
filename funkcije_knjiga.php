<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 10/17/2017
 * Time: 12:25 PM
 */

// Reverse a string
echo strrev(" .dlrow olleH");   // outputs: "Hello world."

echo "</br>";

// Repeat a string
echo str_repeat("Hip ", 2);   // outputs: Hip Hip

echo "</br>";

// Make a string uppercase
echo strtoupper("hooray!");    // outputs: HOORAY!

echo "</br>";
echo "</br>";

// Make a string lowercase
echo strtolower("aNY # of Letters and Punctuation you WANT");

echo "</br>";

// Or different way:
$lowered = strtolower("aNY # of Letters and Punctuation you WANT");
echo $lowered;

echo "</br>";
echo "</br>";

// Make a string's first character uppercase
$ucfixed = ucfirst("any # of letters and punctuation you want");
echo $ucfixed;

echo "</br>";
echo "</br>";

/**
 * The arbitrary string function changes the same string in lowercase
 *
 * @param string $string - The arbitrary string
 *
 * @return string
 */
function strtolower_utf8($string){
    $convert_to = array(
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u",
        "v", "w", "x", "y", "z", "à", "á", "â", "ã", "ä", "å", "æ", "ç", "è", "é", "ê", "ë", "ì", "í", "î", "ï",
        "ð", "ñ", "ò", "ó", "ô", "õ", "ö", "ø", "ù", "ú", "û", "ü", "ý", "а", "б", "в", "г", "д", "е", "ё", "ж",
        "з", "и", "й", "к", "л", "м", "н", "о", "п", "р", "с", "т", "у", "ф", "х", "ц", "ч", "ш", "щ", "ъ", "ы",
        "ь", "э", "ю", "я"
    );
    $convert_from = array(
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U",
        "V", "W", "X", "Y", "Z", "À", "Á", "Â", "Ã", "Ä", "Å", "Æ", "Ç", "È", "É", "Ê", "Ë", "Ì", "Í", "Î", "Ï",
        "Ð", "Ñ", "Ò", "Ó", "Ô", "Õ", "Ö", "Ø", "Ù", "Ú", "Û", "Ü", "Ý", "А", "Б", "В", "Г", "Д", "Е", "Ё", "Ж",
        "З", "И", "Й", "К", "Л", "М", "Н", "О", "П", "Р", "С", "Т", "У", "Ф", "Х", "Ц", "Ч", "Ш", "Щ", "Ъ", "Ъ",
        "Ь", "Э", "Ю", "Я"
    );

    return str_replace($convert_from, $convert_to, $string);
}
echo strtolower_utf8("AMRA");


echo "</br>";
echo "</br>";


/**
 * Function that returns the correctly written name
 *
 * @param string $n1 - Arbitrary string
 * @param string $n2 - Arbitrary string
 * @param string $n3 - Arbitrary string
 *
 * @return string
 */
function fixNames($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return $n1 . " " . $n2 . " " . $n3;
}
echo fixNames("WILLIAM", "henry", "gatES");


echo "</br>";

// Or different way (Returning more value to array):

/**
 * Function that returns the correctly written name in array
 *
 * @param string $n1 - Arbitrary string
 * @param string $n2 - Arbitrary string
 * @param string $n3 - Arbitrary string
 *
 * @return array
 */
function fixNames1($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1, $n2, $n3);
}
$names = fixNames1("WILLIAM", "henry", "gatES");
echo $names[0] . " " . $names[1] . " " . $names[2];


echo "</br>";
echo "</br>";


// Returns the value from the reference function. NOT!!!
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fixNames2(&$n1, &$n2, &$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}
fixNames2($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3;


echo "</br>";
echo "</br>";


/**
 * Function returns the correctly written name in global variables
 *
 * @param string $n1 - Arbitrary string
 * @param string $n2 - Arbitrary string
 * @param string $n3 - Arbitrary string
 *
 * @return void
 */
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fixNames3()
{
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));
}

fixNames3();
echo $a1 . " " . $a2 . " " . $a3;


echo "</br>";
echo "</br>";

/**
 * Function that returns a function exists or not
 *
 * @param string $function_name - Arbitrary function
 *
 * return void
 */
if (function_exists("is_array"))
{
    echo "Function exists";
}
else
{
    echo "Function does not exist - better write our own";
}

?>