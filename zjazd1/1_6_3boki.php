<?php

$a = 3;
$b = 4;
$c = 20;

$a *= $a;
$b *= $b;
$c *= $c; 

if($a +$b == $c || $a + $c == $b || $b + $c == $a){
	echo "mozna zbudowac\n";
} else {
	echo "nie mozna\n";
}
?>
