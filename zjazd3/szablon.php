<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szablon Rezerwacji</title>
</head>
	<style type="text/css">
	
		body {
			background-color: gray;
		}

		div.ppl {
    		display: flex;
            justify-content: left;
			align-items: center;
            border-radius: 40px;
	   		padding: 0;
		}

		</style>
</head>
<?php
    if(isset($_POST['accept'])){
        
        $numOfPpl = $_POST["number"] ?? "";

        echo"<form method = \"post\" action = \"zaprez.php\">";
        echo"<input name=\"numOfPpl\" value=\"$numOfPpl\" hidden>";
        echo"<div class=\"people\">";

        for($i = 0; $i < $numOfPpl; $i++){
            echo ('
            <div>
            <label for = "firstPodaj imie"> Podaj imie </label>
            <input type = "text" name = "name$i">
            <label for = "lastPodaj imie"> Podaj nazwisko </label>
            <input type = "text" name="surname$i">
            </div>
            ');
        }
       	echo (' 
        </div>
	<br>
	<label for = "numerKarty"> Podaj nr kardy kredytowej </label>
	<br>
        <input type = "text" name = "numerKarty">
        <br>
        <br>
        <label for = "Podaj email"> Podaj email </label>
        <br>
        <input type = "Podaj email" name = "Podaj email">
        <br>
        <br>
        <label for = "przyjazd"> Data przyjazdu </label>
        <br>
        <input type = "date" name = "przyjazd">
        <br>
        <br>
        <label for = "wyjazd"> Data wyjazdu </label>
        <br>
        <input type = "date" name = "wyjazd"> 
        <br>
        <input type = "submit" name = "accept" value="accept">
        ');
    }
?>
</body>

