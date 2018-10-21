<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome User</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
</head>
<body>
  <div class="container">
  <div class="navbar-header">
    <ul class="nav nav-pills">
        <li class="nav-item"><a class="mainNav" href="index.html">Home</a></li>
        <li class="nav-item"><a class="mainNav" href="aboutus.html">About Us</a></li>
        <li class="nav-item"><a class="mainNav" href="contact.html">Contact</a></li>
        <li class="nav-item"><a class="addbtn" href="<?php echo base_url();?>posts">List</a></li>
        <li class="nav-item"><a id="addbtn" href="<?php echo base_url();?>signup">Sign Up</a></li>
        <li class="nav-item"><a id="addbtn" href="<?php echo base_url();?>login_page">Log In</a></li>
      <ul class="nav nav-pills">
    </div>
  </div>
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
<div class="module">
            <!--<span><img class="img-responsive" src="images/dumbbell.svg" alt=""></span>-->
            <h3 align="center">Important Dates</h3>
            <p align="center">Mark important dates and never miss out on the big moments.</p>
            
            </div>
            <div class="module">
            <!--<span><img class="img-responsive" src="images/exercise.svg" alt=""></span>-->
            <h3 align="center">Goals</h3>
            <p align="center">Set new goals and we will help you achieve them.</p>
           
            </div>
            <!--<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>-->
            <div class="module">
            <h3 align="center">To Do List</h3>
            <p align="center">Create a To Do list and keep your focus intact .</p>
           
          </div>
        </div>