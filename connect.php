<?php
$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$Email =$_POST['Email'];
$UserPassword =$_POST['Password'];
$confirmPassword=$_POST['ConfirmPassword'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
/$sql = "INSERT INTO registration VALUES ($Email, $UserPassword, $FirstName, $LastName)";

$stmt = $conn->prepare("INSERT INTO registration  VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $Email, $UserPassword, $FirstName, $LastName);

$stmt->execute();
echo "registration successfully....";
$stmt->close();
$conn->close();


?>