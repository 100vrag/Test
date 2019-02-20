<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 10/8/2017
 * Time: 2:36 PM
 */

// Definisati f-ju koja menja vrednost globalne promenljive:

/**
 * Function that changes the global variable value
 *
 * @param integer $num - Arbitrary number
 *
 * @return integer - Arbitrary number
 */
function function1($num)
{
    $GLOBALS['num'] = $num;
}

// Definisati funkciju koja vrši aritmetičku operaciju sabiranja dva broja:

/**
 * Function sum of two numbers
 *
 * @param integer $num1 - Arbitrary number
 * @param integer $num2 - Arbitrary number
 *
 * @return integer
 */
function sum($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}

// Definisati funkciju koja vrši aritmetičku operaciju oduzimanja dva broja:

/**
 * Function difference of two numbers
 *
 * @param integer $num1 - Arbitrary number
 * @param integer $num2 - Arbitrary number
 *
 * @return integer
 */
function difference($num1, $num2)
{
    $dif = $num1 - $num2;
    return $dif;
}

// Definisati funkciju koja vrši aritmetičku operaciju mnozenja dva broja:

/**
 * Function product of two numbers
 *
 * @param integer $num1 - Arbitrary number
 * @param integer $num2 - Arbitrary number
 *
 * @return integer
 */
function product($num1, $num2)
{
    $product = $num1 * $num2;
    return $product;
}

// Definisati funkciju koja vrši aritmetičku operaciju deljenja dva broja:

/**
 * Function quotient of two numbers
 *
 * @param integer $num1 - Arbitrary number
 * @param integer $num2 - Arbitrary number
 *
 * @return float|integer
 */
function quotient($num1, $num2)
{
    $quotient = $num1 / $num2;
    return $quotient;
}


function printMessages ($messages) {

    foreach ($messages as $index => $message) {
        echo $message;
    }
}

// Definisati funkciju koja sortira elemente niza po abecednom redu:

/**
 * Function that sorts array elements in alphabetical order
 *
 * @param array $array1 - Arbitrary array
 */
function sortsArrayElements($array1)
{
    // count($array1) length of the array
    for ($i = 0; $i < count($array1); $i++){

        // sorts array elements in alphabetical order
        sort($array1);
    }
    echo " Nakon sortiranja niz je: </br>";
    // When make a loop only once print!!!
    print_r($array1);
}

// Definisati funkciju koja sortira elemente niza brojeva od najveceg do najmanjeg:

/**
 * Function that sorts the elements of a number of numbers from the highest to the smallest
 *
 * @param array $array_num - Arbitrary array
 */
function sortsArrayElementsNum($array_num)
{
    for ($i = 0; $i < count($array_num); $i++){

        // sorts array elements of a number of numbers from the largest to the smallest
        rsort($array_num);
    }
    echo " Nakon sortiranja niz je: </br>";
    // When make a loop only once print!!!
    print_r($array_num);
}


/*
$a = [];
$b = 'Amra';
for ($i = 0; $i<4; $i++){
    $a[]= $b[$i];
//    $a[] = $i;
}
print_r(implode($a));*/

?>