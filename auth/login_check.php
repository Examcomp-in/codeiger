<?php
session_start(); 
include'../db_conn.php';

	$email = htmlspecialchars($_POST['phone']);
	$pass = md5(htmlspecialchars($_POST['password']));



$sql = "SELECT email from users where email='$email' and password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
$_SESSION['user_token']=$row['token'];
header("location:../dashboard");
} else {
header("location:login.php?error=Invalid phone number  and password");
 
}
mysqli_close($conn);

?> 