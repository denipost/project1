<?php
/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $subject = test_input($_POST["subject"]);
  $noptions = test_input($_POST["noptions"]);
  $ndimesions = test_input($_POST["ndimesions"]); 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//echo $subject." ".$noptions." ".$ndimesions;

echo $_POST["subject"]." ".$_POST["noptions"]." ".$_POST["ndimesions"];
*/
?>

<?php
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "takas";

$name = $_POST["nickname"];
$password1 = $_POST["pass"];

/*
$name = "x' or '1=1";//Form'dan girecek deger yapisi
$password1 = "x' or '1=1";//Form'dan girecek deger yapisi
*/


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nickname, email, pass FROM user where nickname = '".$name."' and pass = '".$password1."'";
//echo $sql;
//$sql = "SELECT id, username, password FROM member where username = 'deniz' or password = 'denizpass'";
//$sql = "SELECT id, username, password FROM member";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br><br>id: " . $row["id"]. " <br>Name: " . $row["nickname"]. " <br>Password: " . $row["pass"]. "<br>";
    header('Location: 1index.php');
  }
} else {
  echo "0 results";
}
$conn->close();
?>
