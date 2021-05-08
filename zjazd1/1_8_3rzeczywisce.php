<?php

$a=rand(1,99);
$b=rand(1,99);
$c=rand(1,99);

echo "Wylosowany liczby to</br>";
echo "a = $a </br>";
echo "b = $b </br>";
echo "c = $c </br>";

if($a<$b && $b<$c){
	echo "Od najmniejszej $a $b $c </br>";
	echo "Od najwiekszej $c $b $a";
} else if($c<$a && $a<$b){
	echo "Od najmniejszej $c $a $b </br>";
	echo "Od najwiekszej $b $a $c";
} else if($b<$c && $c<$a){
	echo "Od najmniejszej $b $c $a </br>";
	echo "Od najwiekszej $a $c $b";
} else if($c<$b && $b<$a){
	echo "Od najmniejszej $c $b $a </br>";
	echo "Od najwiekszej $a $b $c </br>";
} else if($a<$c && $c<$b){
	echo "Od najmniejszej $a $c $b </br>";
	echo "Od najwiekszej $b $c $a";
} else if($b<$a && $a<$c){
	echo "Od najmniejszej $b $a $c </br>";
	echo "Od najwiekszej $c $a $b";
}


?>
