<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <title>Welcome User</title>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
  <div class="container">
  <div class="navbar">
        <a class="mainNav" href="index.html">Home</a>
        <a class="mainNav" href="aboutus.html">About Us</a>
        <a class="mainNav" href="contact.html">Contact</a><br>
        <a id="addbtn" href="<?php echo base_url();?>posts">List</a>
        <a id="addbtn" href="<?php echo base_url();?>signup">Sign Up</a>
        <a id="addbtn" href="<?php echo base_url();?>login_page">Log In</a>
    </div>
    <style>
      .navbar{
        background-color: #ffe;
        height:45px;
      }
    #addbtn{
      float: right; 
      text-decoration: none;
      padding-right:20px;
      color: #888;
    }
    .mainNav{
        float:left;
        font-size:17px;
        text-decoration: none;
        text-align: center;
        padding:20px 16px;
        display:block;
        color: #00a;
     }
  </style>
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
            <div> <p><a href="client_sign_up.php" class="" target="blank" align="center">GO<i class=""></i></a></p>
          </div>
            </div>
            <div class="module">
            <!--<span><img class="img-responsive" src="images/exercise.svg" alt=""></span>-->
            <h3 align="center">Goals</h3>
            <p align="center">Set new goals and we will help you achieve them.</p>
            <div> <p><a href="client_sign_up.php" class="" target="blank" align="center">GO<i class=""></i></a></p>
          </div>
            </div>
            <!--<span><img class="img-responsive" src="images/yoga-carpet.svg" alt=""></span>-->
            <div class="module">
            <h3 align="center">To Do List</h3>
            <p align="center">Create a To Do list and keep your focus intact .</p>
            <div> <p><a href="client_sign_up.php" class="" target="blank" align="center">GO<i class=""></i></a></p>
          </div>
          </div>
        </div>