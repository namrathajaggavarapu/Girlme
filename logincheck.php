<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="styles.css"/>
  </head>
<body>

<?php
$servername = "localhost";
$username = "newuser";
$password = "gagan45";
$db = "login_details";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$a = $_POST['fname'];
$b = $_POST['lname'];
$sql= "SELECT * FROM cred";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row['password']==$b && $row['useremail']=$a){
      include("main1.php");
    }
  }
}
  else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>