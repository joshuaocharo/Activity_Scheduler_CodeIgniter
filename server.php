<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

$multi = mysqli_connect('localhost', 'root', '', 'activityscheduler');

// Check connection
if ($multi->connect_error) {
    die("Connection failed: " . $multi->connect_error);
} 
echo "Connected successfully";

// REGISTER USER AND GET THEIR TYPE
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($multi, $_POST['username']);
  $email = mysqli_real_escape_string($multi, $_POST['email']);
  $password_1 = mysqli_real_escape_string($multi, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($multi, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error onto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  //if (empty($user_type)) { array_push($errors, "Don't mess with the user types"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE Username='$username' OR Email='$email' LIMIT 1";
  $result = mysqli_query($multi, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    // attempt insert query execution
  
  	$query = "INSERT INTO user (Username, Email,Password) 
  			  VALUES('$username', '$email','$password')";
    if(mysqli_query($multi, $query) === true){
    echo "Records inserted successfully.";
    //header("Location: welcome.html");
  } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
  }
  //lEADS TO DOUBLE ENTRIES IN DB
  	//mysqli_query($multi, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($multi, $_POST['username']);
  $password = mysqli_real_escape_string($multi, $_POST['password']);


  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM user WHERE Username='$username' AND Password='$password'";
    //$query1 = "SELECT * FROM user WHERE Username='$username' AND Password='$password' ";
    //$query2 = "SELECT * FROM user WHERE Username='$username' AND Password='$password' ";
    //$query3 = "SELECT * FROM users WHERE username='$username' AND password='$password' AND user_type= 'Personal Trainer'";
    $results = mysqli_query($multi, $query);
    //$results1 = mysqli_query($multi, $query1);
    //$results2 = mysqli_query($multi, $query2);
    //$results3 = mysqli_query($multi, $query3);
    if (mysqli_num_rows($results) == 1) {
      header("Location: welcome.html");
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      
    }else {
      array_push($errors, "Wrong username/password combination");
    }
      /*if (mysqli_num_rows($results1) == 1) { echo "Welcome"; header("Location: index.html"); }
      elseif (mysqli_num_rows($results2) == 1) { echo "Welcome"; header("Location: index.html");}
      else {echo "Welcome"; header("Location: index.html"); }*/
  }
}
// LOG OUT USER

?>
