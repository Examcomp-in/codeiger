 <?php
$servername = "localhost";
$username = "Codeiger";
$password = "Codeiger@11804188";
$dbname = "Codeiger";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
