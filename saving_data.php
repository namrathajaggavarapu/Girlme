<?php
$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "login_details";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}
$user=$_POST['fname'];
$pass=$_POST['lname'];

$sql = "INSERT INTO cred (useremail,password)
VALUES ('$user','$pass')";

  
if ($conn->query($sql) === TRUE) {
  echo "user created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>