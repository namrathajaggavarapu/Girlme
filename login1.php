<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
    background-image: url('wings.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }
      form{
        margin:auto;
        border:3px solid #fff;
        margin:auto;
        margin-top:200px;
        text-align: center;
        width:200px;
        padding:20px;
        color: #fff;
      }
    </style>
  </head>
<body>
<form action="logincheck.php" method="post">
  <h1 style="text-align:center">Login</h1>
  <label for="fname">User ID:</label><br>
  <input type="text" id="fname" name="fname" class="form-control form-rounded"><br>
  <label for="lname">Password:</label><br>
  <input type="text" id="lname" name="lname" classs="form-control form-rounded"><br><br>
  <input type="Submit" value="submit" name="submit">
</form>
</body>
</html>

