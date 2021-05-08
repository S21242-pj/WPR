<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


 <style type="text/css">
	body {
		background-color: gray;
	}

</style>


</head>
<body>

<form method="post">
        <input type="submit" name="loadValues" value="Load">
</form>
<?php
    if(isset($_POST["wczytajRez"])) {
        $row = 1;
        if (($fp = fopen("iCykRezerwacja.csv", "r")) !== FALSE) {
            $colName = fgetcsv($fp, 1000, ";");
            while (($num = fgetcsv($fp, 1000, ";")) !== FALSE) {
                $col = count($colName);
                $row++;
                echo "<p>Rezerwacja: $row</p>";
                for ($x=0; $x < $colName; $x++)
                {
                    echo $colName[$x] ?? "".": ".$num[$x] ?? "";
                }
            }

            fclose($fp);
        }
    }
    ?>



</body>
</html>
