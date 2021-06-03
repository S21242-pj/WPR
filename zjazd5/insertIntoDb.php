<?php

$mysqli = new mysqli("localhost", "wprtest", "wprtest", "wprtest");

if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
}

$sql = "INSERT INTO wprtest (id, FirstName, LastName)
VALUES ('6', 'insertTest', 'insertSurname')";

if (mysqli_query($mysqli, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$mysqli->close();
?>
