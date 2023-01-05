<?php

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "takas";


$name = $_POST["nickname"];
//$email = $_POST["email"];
$password1 = $_POST["pass"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nickname, email, pass FROM user where nickname = '".$name."' and pass = '".$password1."'";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nickname"]. " Password: " . $row["pass"]. " Email: " . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
