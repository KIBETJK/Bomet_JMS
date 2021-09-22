<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bjms";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];


// database insert SQL code
$sql = "INSERT INTO `signup` (`id`, `email`, `password`, `password_repeat`) VALUES ('0', '$email', '$password', '$password_repeat')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>