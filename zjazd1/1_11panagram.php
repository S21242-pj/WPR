<?php



$someWord=strtoupper("ABECDALO");
$someWord1=str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");

$alphabet=$someWord1;
#echo $alphabet;

#for i in
foreach($alphabet as $char){
	if($strpos(strtoupper($someWord), $char) == false){ 
		echo "to nie jest panagram";
	} else {
		echo "to jest panagram!";
}
?>
