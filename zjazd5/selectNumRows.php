<?php

$mysqli = new mysqli("localhost", "wprtest", "wprtest", "wprtest");

if ($mysqli -> connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	exit();
}

$sql = "SELECT id, FirstName, LastName FROM wprtest WHERE id = '1'";

if ($result=mysqli_query($mysqli, $sql)){

    $row_cnt = $result->num_rows;

    printf("Result set has %d rows.\n", $row_cnt);

    $result->close();
}


$mysqli -> close();
?>
