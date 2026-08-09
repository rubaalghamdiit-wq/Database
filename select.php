<?php
$servername = "sql211.infinityfree.com";
$username = "if0_42489986";
$password = "a1212123Aaaa";
$dbname = "if0_42489986_myfrist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, age FROM user";
// Execute the SQL query
$result = $conn->query($sql);

// Process the result set
if ($result->num_rows > 0) {
  // Output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>