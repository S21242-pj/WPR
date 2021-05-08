
<?php

$a=rand(1,99);
$b=rand(1,99);

echo "a=$a, b=$b</br>";

$a = [$a];
$b = [$b];
$someCalc = 0;
		    
if(count($a) == count($b)) {
	for ($i = 0; $i < sizeof($a); $i++) {
		$someCalc += (int)$a[$i] * (int)$b[$i];
	} 
		echo $someCalc;
	} else {
		echo "BLAD";
	 }
?>
