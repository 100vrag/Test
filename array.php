<?php
/**
 * Created by PhpStorm.
 * User: Stovrag
 * Date: 17.2.2019
 * Time: 21:28
 */
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
echo '<pre>', print_r ($fruits), '</pre>';
echo "<br><br>";
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
echo '<pre>', print_r($array,true), '</pre>';
echo "<br><br>";

// multidimenzionalni

$osoba = array (
    'ime' => 'Edin',
    'prezime' => 'Stovrag',
    'godine' => 'dosta',
    'lokacija' => array (
        'Bukovica',
        'Pljevlja',
        'Podgorica')
);
echo '<pre>', print_r($osoba,true),'</pre>';
echo "<br><br>";
echo "Moje ime  je {$osoba['ime']} {$osoba['prezime']} i imam {$osoba['godine']} godina. Osnovnu skolu sam zavrsio u {$osoba['lokacija'][0]}, 
srednju skolu u {$osoba['lokacija'][1]} a fakultet u {$osoba['lokacija'][2]}.";