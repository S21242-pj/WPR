<?php

$num1 = rand(1,99);
$num2 = rand(1,99);

echo "Liczba nr 1 to: $num1<br/>";
echo "Liczba nr 2 to: $num2<br/>";

echo '<br/>Prosty kalkulator:<br/>';

$sum = $num1+$num2;
echo "Dodawanie: $sum<br/>";

$sub = $num1-$num2;
echo "Odejmowanie: $sub<br/>";

$mul = $num1 * $num2;
echo "Mnożenie: $mul<br/>";

$div = round(($num1 / $num2), 2); 
echo "Dzielenie: $div<br/>";

$mod = $num1 % $num2;
echo "Modulo: $mod<br/>";

?>
