<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Calculator</h1>

<form  method="post">
<input name="first">
<input name="second">
<br><br>
<select name="method">
	<option value="add"> Addition </option>
	<option value="sub"> Subtraction</option>
	<option value="mul"> Multiplication </option>
	<option value="div"> Division </option>
</select>
<input type=submit value="calculate" name="calculate">
</form>



<?php

if(isset($_POST["operator"])) {
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
include("func.php");

    switch ($operator) {
        case "Add":
           echo addNum($first_num, $second_num);
	   break;

        case "Sub":
           echo subNum($first_num, $second_num);
	   break;

        case "Mul":
            echo mulNum($first_num, $second_num);
	    break;

        case "Div":
            echo divNum($first_num, $second_num);
    }
}

?>


</body/
</html>
