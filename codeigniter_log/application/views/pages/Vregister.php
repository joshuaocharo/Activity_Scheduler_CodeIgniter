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
        
        <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>home">Home</a></li>
        
        
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
<?=form_open(base_url()."home")?>
<table cellspacing="3" cellpadding="3">
<tr>
	<td>
	Email<td><?=form_input(array("name"=>"email","value"=>set_value("email")))?>
	<td><?form_error("email")?>	
	</td>
</tr>
<tr>
	<td>
	Password<td><?=form_password(array("name"=>"password"))?>
	<td><?form_error("password")?>	
	</td>
</tr>
<tr>
	<td>
	Name <td><?=form_input(array("name"=>"username","value"=>set_value("username")))?>
	<td><?form_error("username")?>	
	</td>
</tr>
<tr>
	<td>
		<?=form_submit(array("name"=>"submit","value"=>"Register"))?>
	</td>
</tr>
</table>


<?=form_close()?>