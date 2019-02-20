<?php
/**
 * Created by PhpStorm.
 * User: Amra
 * Date: 11/10/2017
 * Time: 2:52 PM
 */

        // Numeric array


// Example 1 :

$name = array(1,2,3,4,5);
print_r($name);
var_dump($name);
echo "Na poziciji broj 2 u ovom nizu imamo broj: " . $name[2];
echo "</br></br>";


// Example 2 :

$name0 = array('Ana', 'Alex', 'Billy', 'Dale', 'Tom');

// '<pre>'-samo za lepsi prikaz niza!
echo '<pre>', print_r($name0, true), '</pre>';

echo "Na poziciji broj 2 u ovom nizu imamo ime: " .$name0[2];
echo "</br></br>";


        // Associative array


// Example 3 :

$name1 = array(
    'key1' => 1,
    'key2' => 2,
    'key3' => 3,
    'key4' => 4,
    'key5' => 5,
);
print_r($name1);
// '<pre>'-samo za lepsi prikaz niza!
echo '<pre>', print_r($name1, true), '</pre>';


// Example 4 :

$person = array(
    'name'      => 'Ana',
    'age'       =>  24,
    'location'  => 'London',
);
echo '<pre>', print_r($person, true), '</pre>';

echo $person['name'] . "</br>";

echo "My name is {$person['name']} and I am {$person['age']} years old and I live in {$person['location']}";
echo "</br></br>";


        // Multidimensional arrays

// Example 5 :

$person = array(
    'name'      => 'Ana',
    'age'       =>  24,
    'locations' => array(
        'London',
        'Greenwich',
        'Feltham'
        )
);
print_r($person);
// '<pre>'-samo za lepsi prikaz niza!
echo '<pre>', print_r($person, true), '</pre>';


// Example 6 :

$person = array(
    'name'      => 'Ana',
    'age'       =>  24,
    'locations' => array(
        'Greenwich' => array(
            'New Eltham',
            'Central Greenwich'
        ),
        'London',
        'Feltham'
    )
);
print_r($person);
// '<pre>'-samo za lepsi prikaz niza!
echo '<pre>', print_r($person, true), '</pre>';


// Da pristupimo New Eltham:
echo $person['locations']['Greenwich'][0];    // out: New Eltham

echo "</br></br>";


// Example 7 :

$person = array(
    'name'      => 'Ana',
    'age'       =>  24,
    'locations' => array(
        'Greenwich' => array(
            'New Eltham',
            'Central Greenwich'
        ),
        'London',
        'Feltham'
    )
);

// Ako zelimo da dodamo jos jedan clan niza ispod 'Central Greenwich'
$person['locations']['Greenwich'][2] = 'Outer Greenwich';

echo '<pre>', print_r($person, true), '</pre>';

echo "</br></br>";


// Example 8 :

/*
    0 - First item
    1 - Second item
        1.1 - Another item
        1.2 - Last item
    2 - Third item
        2.1 - Further item

    0 - Array
        0 - Bob
 */

$people = array(
    array('Bob'), 'Dave', 'Jim'
);

echo $people[1];   // out: Dave

echo "</br>";

echo $people[0][0];             // out: Bob

echo "</br></br>";


// Example 8:

$people = array(
    array(
        'name' => 'Bob',
        'shopping_list' => array('fruit', 'veg', 'milk')
    ),
    'Dave',
    'Jim'
);
echo $people[0]['name'];        // out: Bob

echo "</br></br>";

echo '<pre>' . print_r($people) . '</pre>';

echo "</br></br>";


// Example 9 :

$people = array(
    array(
        'name' => 'Bob',
        'shopping_list' => array('fruit', 'veg', 'milk')
    ),
    array(
        'name' => 'Dave',
        'shopping_list' => array('veg', 'milk')
    ),
    array(
        'name' => 'Jim',
        'shopping_list' => array('milk')
    )
);


/*    $person = array(
                    'name' => 'Bob',
                    'shopping_list' => array('fruit', 'veg', 'milk')
*/

foreach ($people as $index => $person) {

    foreach ($person['shopping_list'] as $ind => $item) {

        echo "\t" . $item . "\t";

    }
}


echo "</br></br>";

foreach ($people as $index => $person) {

        echo "\t" . $person['name'] . "\t";

}

echo "</br></br>";


// Example 9:

$arrayOld=array(
    '1'=>'32',
    '2'=>'34',
    '3'=>'36',
    '4'=>'38',
    '5'=>'40',
    '6'=>'42',
    '7'=>'44',
);

$arrayNew=array(
    '2'=>'32',
    '1'=>'34',
    '3'=>'36',
    '4'=>'38',
    '5'=>'46',
    '6'=>'42',
    '7'=>'44',
);

// vraca niz brojeva koji su jednaki za ova dva niza i koji se nalaze na istim pozicijama u nizu
$xArray = array_intersect_assoc($arrayOld, $arrayNew);
print_r($xArray);

echo "</br></br>";

// vraca niz brojeva iz $arrayOld koji su razliciti od elem iz niza $arrayNew a koji se nalaze na istim pozicijama u nizu
$yArray = array_diff_assoc($arrayOld, $arrayNew);
print_r($yArray);


echo "</br></br>";


// vraca elemente koji se nalaze u $arrayNew a ne nalaze u $xArray
$result = array_diff($arrayNew,array_intersect_assoc($arrayOld, $arrayNew));
print_r($result);

echo "</br></br>";


// Example 10 : Spaja dva niza u jedan

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);


// u prvom nizu 'color' red je zamenjena sa green ostali clanovi oba niza idu redom jedan iza drugog
// bez obzira na to sto i u prvom i u drugom nizu imamo broj 4!!!
$result = array_merge($array1, $array2);
print_r($result);

echo "</br></br>";


// Example 11 : Spaja dva niza u jedan a brojevi koji se nalaze u oba niza se ponavljaju

$array1 = array("color" => "red", 2, 3, 4);
print_r($array1);
echo "</br>";
$array2 = array("a", 3, "color" => "green", 4);
print_r($array2);
echo "</br>";

// u prvom nizu 'color' red je zamenjena sa green ostali clanovi oba niza idu redom jedan iza drugog
// bez obzira na to sto i u prvom i u drugom nizu imamo brojeve 3 i 4 oni ce se ponavljati u novom nizu !!!
$result = array_merge($array1, $array2);
print_r($result);

echo "</br></br>";


// Example 12 : Spaja dva niza u jedan a stringovi koji se nalaze u oba niza na istim pozicijama se ne ponavljaju vec se
              // zadrzava samo string iz prvog niza

$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');


// Ako zelimo da dodamo elem iz drugog niza u prvi niz koristimo + pri cemu ce se kljucevi sacuvati onako kako su definisani
// za sve elem izuzev ako se kljuc javlja i u prvom i u drugom nizu koristi se onaj kljuc i element na toj poziciji iz
// prvog niza a element iz drugog niza koji je na tom kljucu ce birti ignorisan ovde je to elem 'three_b'
$result = $array1 + $array2;
var_dump($result);

echo "</br></br>";


// Example 13 : Spaja dva niza u jedan a isti stringovi koji se nalaze u oba niza na razlicitim pozicijama se ponavljaju
              // jos je zanimljivo to da element koji se nalazio na poziciji 4 u drugom nizu nestaje tj zamenjen je elementom
              // iz prvog niza na istoj poziciji

$array1 = array(0 => 'zero_a', 2 => 'two_a', 4 => 'three_b');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');


$result = $array1 + $array2;
var_dump($result);

echo "</br></br>";


// Example 14 : Sortirati prost niz brojeva bez upotrebe gotovih funkcija

$arr = array(80, 90, 100, 10, 50, 3);

for($a = 0; $a < count($arr); $a++) {

    for($b = 0; $b < count($arr)-1; $b ++){

        if($arr[$b] > $arr[$b+1]) {
            $temp = $arr[$b+1];             // manji smesti u $temp

            $arr[$b+1] = $arr[$b];            // sada veci smesti umesto manjeg na poziciju $arr[$b+1]

            $arr[$b] = $temp;                 // zameni veci manjim
        }
    }
}

print_r($arr);


echo "</br></br>";


// Example 15: Sortirati prost niz brojeva bez upotrebe gotovih funkcija

$srtArray = array(80, 90, 100, 10, 50, 3);

for ($i = 0; $i < count($srtArray); $i++) {

    for ($j = 0; $j < count($srtArray); $j++) {

        // Compare two elements of array
        if ($srtArray[$j] > $srtArray[$i]){
            $tmp = $srtArray[$i];

            $srtArray[$i] = $srtArray[$j];
            $srtArray[$j] = $tmp;
        }
    }
}
//Print an array after sorting
for($i = 0; $i < count($srtArray); $i++){
    echo $srtArray[$i] . "<br>\n";
}

echo "</br></br>";


// Example 16 :

function odd($var)
{
    // returns whether the input integer is odd
    return($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return(!($var & 1));
}

$array1 = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "</br>";

echo "Even:\n";
print_r(array_filter($array2, "even"));

echo "</br></br>";

    /*
        $people - Nas niz

        $person - Nizovi 1, 2, 3 (prvi nivo u glavnom nizu)
    */
    foreach ($people as $person) {

        // $person['name'] - stampa SVA IMENA koja se nalaze u nizu pod ['name']
        echo $person['name'] . "</br>";
    }

echo "</br></br>";


    // stampa IME koje se nalazi u nizu $people, na [0] poziciji imamo prvi podniz,pa ['name'] => out: Bob
    echo $people[0]['name'];        // out: Bob


echo "</br></br> Na sledeci nacin pomocu for pretlje stampamo [0], [1], [2] 'key' svakog podniza </br></br>";

for($i= 0; $i < count($people); $i++) {
    echo '[' . $i . ']' . "</br>";
}

echo "</br></br>";


// Example 17 :

$brojDanauMesecu = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
echo "April ima " . $brojDanauMesecu[3] . " dana.";

echo "</br></br>";


// Example 18 : Izracunavanje srednje vrednosti niza brojeva.

$nizBrojeva = array(10.1, 11.2, 12.3, 13.4, 14.5);

function srednjaVrednost($nizBrojeva)
{
    $suma = 0;
    $rezultat = 0;

    for($i = 0; $i < count($nizBrojeva); $i++){

        $suma = $suma + $nizBrojeva[$i];
        $rezultat = $suma/count($nizBrojeva);
    }
    return $rezultat;
}
echo "Srednja vrednost niza je : " . srednjaVrednost($nizBrojeva);

echo "</br></br>";


// Example 19 : Niz punimo brojevima od 0-19 imamo matricu 4*5

$dvodimenzionalniNiz = array();

$k = 0;
for($i = 0; $i < 4; $i++){

    for($j = 0; $j < 5; $j++){

        $dvodimenzionalniNiz[][] = $k;
        $k++;
    }
}
var_dump($dvodimenzionalniNiz);

echo "</br></br>";

// Example 20 :



echo "</br></br>";