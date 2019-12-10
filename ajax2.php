<?php


$people[]="real";

$people[]="inter";

$people[]="roma";

$people[]="barcelona";

$people[]="manchester city";

$people[]="Chelsea";

$people[]="Arsenal";
$people[]="Liverpool";

$people[]="Tottenham Hotspur";
$people[]="Juventus";
$people[]="Paris Saint-Germain";
$people[]="Atlético Madrid";

$people[]="Schalke 04";


$q= $_REQUEST["q"];

$suggestion="";

if($q !==""){
    $q=strtolower($q);
    $len=strlen($q);

    foreach ($people as $person) {
        if (strstr($q, substr($person,0,$len))){
            if($suggestion ===""){
                $suggestion =$person;
            }else {
                $suggestion .=", $person";
            }
        }
    }
}

echo  $suggestion=== "" ? "No Suggestion" :$suggestion;

