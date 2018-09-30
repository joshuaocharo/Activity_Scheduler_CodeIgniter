<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
      <div >
          <ul >
            <li><a href="index.html">Home</a></li>
            <li><a href="php/login.php">Sign In</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#review">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div>
  </div>
<div class="container">
  <h2 style="">Welcome back</h2>
  <p style=""> </p>
</div>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>

</body>
</html>