<?php
//an Array with names

$a[] = "Aaron";
$a[] = "Albert";
$a[] = "Berta";
$a[] = "Bertil";
$a[] = "Caesar";
$a[] = "Celine";
$a[] = "Corinna";
$a[] = "David";
$a[] = "Dennis";
$a[] = "Duckwald";
$a[] = "Ebba";
$a[] = "Ebbe";
$a[] = "Erich";
$a[] = "Erik";
$a[] = "Erique";
$a[] = "Fabian";
$a[] = "Felix";
$a[] = "Folke";
$a[] = "Gerald";
$a[] = "Gerhard";
$a[] = "Gunnar";
$a[] = "Heidi";
$a[] = "Hilde";
$a[] = "Hong";
$a[] = "Isolde";
$a[] = "Joachim";
$a[] = "Joakim";
$a[] = "Kurt";
$a[] = "Lavinia";


//get the 'q' parameter from the URL

$q = $_REQUEST["q"];
$hint = "";


//look up all hints from array if $q is different than "";
if($q != ""){
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}


//Output 'no suggestion' if nothing was found
echo $hint === "" ? "no suggestion" : $hint;

