<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "takas";

$nickname = $_POST["nickname"];
$email = $_POST["email"];
$pass = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user (nickname, email, pass)
VALUES ('".$nickname."', '".$email."', '".$pass."')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>