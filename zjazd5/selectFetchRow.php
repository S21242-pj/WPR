<?php

$mysqli = new mysqli("localhost", "wprtest", "wprtest", "wprtest");

if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}

$sql = "SELECT id, FirstName, LastName FROM wprtest WHERE id = '1'";

if ($result=mysqli_query($mysqli, $sql))
{
	while ($row=mysqli_fetch_row($result))
	{
		printf ("%s : %s",$row[0],$row[1]);
		echo "<br>";
	}

	mysqli_free_result($result);
}

$mysqli -> close();
?>
