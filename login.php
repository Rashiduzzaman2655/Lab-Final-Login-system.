<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$email=$_POST['email'];
$passwrod=$_POST['password'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT email, password FROM info WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    header("Location: home.php");
    
} else {
  echo "your user name or password are not matched";
}
$conn->close();
?>