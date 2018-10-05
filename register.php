<?php
session_start();
// connect to db
$db =mysql_connect("localhost","root","","activityscheduler");
if (isset($_POST['register_btn'])) {
$username = mysql_real_escape_string($_POST['username']);
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$password2 = mysql_real_escape_string($_POST['password2']);

if ($password==$password2) {
  // create user
  $password= md5($password);// hash passweord before storing
  $sql ="INSERT INTO user(Username, Email, Password) VALUES('$username','$email','$password')";
  mysqli_query($db, $sql);
  $_SESSION['message'] = "Registered succesfully";
  $_SESSION['username'] = $username;
  header("location : index.html"); //redirect to home page

}else{
$_SESSION['message'] = "The two passwords do not match";
}

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Client</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 	
  <form method="post" action="register.php">
  	<table>
      <tr>
        <td>Username: </td>
        <td>input  type="text" name= "username"  class="textInput"></td>
      </tr>
      <tr>
        <td>Email: </td>
        <td>input  type="email" name= "email"  class="textInput"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td>input  type="password" name= "password"  class="textInput"></td>
      </tr>
      <tr>
        <td>Password: </td>
        <td>input  type="password" name= "password2"  class="textInput"></td>
      </tr>
      <tr>
        <td></td>
        <td>input  type="submit" name= "register_btn"  value="Register"></td>
      </tr>
    </table>
  	
  </form>
</body>
</html>