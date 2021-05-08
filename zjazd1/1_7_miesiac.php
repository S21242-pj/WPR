<?php

$miesiac = rand(1,12);
echo "nr miesiaca to: $miesiac<br/>";

$thirtyDays="30";
$thirtyOne="31";
$feb="28";
switch ($miesiac) {
case 2:
	echo $feb;
	break;
case 4:
case 6: 
case 9: 
case 11: 
echo $thirtyDays;
break;

case 1:
case 3:
case 5:
case 7:
case 8:
case 10:
case 12:
	echo $thirtyOne;
	break;

default: 
	echo $ERROR; 
	break;

}

?>
