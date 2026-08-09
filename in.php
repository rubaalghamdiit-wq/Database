<?php

$servername = "sql211.infinityfree.com";
$username = "if0_42489986";
$password = "a1212123Aaaa";
$dbname = "if0_42489986_myfrist";
$name =$_GET['name'];
$age =$_GET['age'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user ( id ,name ,age)
VALUES ('','$name', '$age')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>