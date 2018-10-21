<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<title>Jipange Activity Scheduler</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	</head>
	<body>
		<style>
    body {
  padding: 10px 50px 200px;
  margin: 20px;
  background-color: #add8e6 ;
  background-size: 300px 300px;
}

p, a {
    /*font-family: "Times New Roman", Times, serif;*/
    font-family: "Comic Sans MS", cursive, sans-serif;
} 

.module{
   width: 80%;
   margin-top: 20px;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}
/*Navigation bar*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #e7e7e7;
    background-color: #f3f3f3;
}

li {
    float: left;
}

li a {
    display: block;
    color: #7d6;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ddd;
}

li a.active {
    color: white;
    background-color: #4CAF50;
}
    </style>
      <div >
          <ul >
            <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>home">Home</a></li>
        <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>aboutus">About Us</a></li>
        <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>contact">Contact</a></li>
          </ul>
        </div>
        <div class="module">
          <h2 align="center">Contact Us Today</h2>
          <p align="center">Our help line services are online 24/7</p>
      </div>
						<div class="module">
						<!--<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>-->
						<h3 align="center">Phone Number</h3>
						<p align="center">+254707993847</p>
						<h3 align="center">Email</h3>
						<p align="center">jipange@gmail.com</p>
						<h3 align="center">Facebook</h3>
						<p align="center">Jipange Activity Scheduler</p>
				</div>
    </body>
</html>