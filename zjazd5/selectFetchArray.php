<?php

$mysqli = new mysqli("localhost", "wprtest", "wprtest", "wprtest");

if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}

$sql = "SELECT id, FirstName, LastName FROM wprtest ORDER by id";
$result = $mysqli -> query($sql);

// Numeric array
$row = $result -> fetch_array(MYSQLI_NUM);
printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array
$row = $result -> fetch_array(MYSQLI_ASSOC);
printf ("%s (%s)\n", $row["LastName"], $row["FirstName"]);

// Free result set
$result -> free_result();

$mysqli -> close();
?>
