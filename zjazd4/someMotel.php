<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Motel Reservation </title>
</head>
<body>
    <form action="somePHP_File.php" method="post">
        <div>
            <label for="pplNum">How many ppl will be there?</label>
            <select id="pplNum" name="numberOfPeople">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
		<option value="5">5</option>
	    	<option value="6">6</option>
		<option value="7">7</option>
	    </select>
            <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

<?php
session_start();
if(isset($_COOKIE["last_page_hit"])) {
$last_page_hit = $_COOKIE["last_page_hit"];
}
else {
$last_page_hit = date("Y-m-d h:i:sa  ", time());
}
echo "<p>Last Page Hit: $last_page_hit</p>";

if (isset($_SESSION["pageHits"])) {
$_SESSION["pageHits"]++;
}
else {
$_SESSION["pageHits"] = 0;
}
setcookie("last_page_hit", date("Y-m-d h:i:sa", time()));
echo "Page Hits:"; echo $_SESSION["pageHits"];

?>


