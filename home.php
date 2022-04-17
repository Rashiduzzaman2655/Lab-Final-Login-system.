<?php
session_start();
$email= $_SESSION["email"];  
$password=$_SESSION["password"];
echo "Email: " . $email . "<br/>";
echo "Your pass: " . $password ;

?>