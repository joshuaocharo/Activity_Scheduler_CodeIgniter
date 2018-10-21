
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Sign up Page</title>
        <meta name="TO-DO-LIST" content="TO-DO-LIST TO KEEP YOU UPDATED ON TASKS  YET TO BE EXECUTED">
    </head>
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
    
    <body>
 <div >
          <ul >
            <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>homel">Home</a></li>
            <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>todolist">To Do List</a></li>
        <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>aboutus">Important Dates</a></li>
        <li class="nav-item"><a class="mainNav" href="<?php echo base_url();?>posts/create">Goals</a></li>
          </ul>
        </div>
       
        
           <center><h3>TO-DO-LIST</h3></center>
            <center><p>On this day I want to:</p></center>
            <center>
            <form name = "activityscheduler" action = "act.php" method="POST" >
            <fieldset>
                <legend> TASKS </legend>
            <label>Task Name</label>    
                <input type="text" name="taskName"><br>
            <label>Start:</label> 
                <input type="date" name="tStart"><br>
            <label>End:</label>
                <input type="date" name="tEnd"><br>
            <label>PRIORITY:</label><br>
                <input type="radio" name="tPriority" value="1">P1<br>
                <input type="radio" name="tPriority" value="2">P2<br>
                <input type="radio" name="tPriority" value="3">P3<br>
                <input type="radio" name="tPriority" value="4">P4<br>
                <button type="submit" class="submitbtn">Submit</button>
                <button type="reset" class="cancelbtn">Cancel</button><br>
            </fieldset>    
            </form>
                </center>
        </div>
        </body>
=======
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Sign up Page</title>
        <meta name="TO-DO-LIST" content="TO-DO-LIST TO KEEP YOU UPDATED ON TASKS  YET TO BE EXECUTED">
    </head>
    <style>
        /*form style*/
        form{ align-items: center;
            align-content: center; 
            background-image: url("bg1.jpg"); 
            background-repeat: repeat;
            height: 800px;
         }
         form.button{
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
         }
         body{
            padding: 10px 50px 200px;
            background-color: #add8e6;
            background-size: 300px 300px;
         }
    </style>
    
    <body>

       
        
           <center><h3>TO-DO-LIST</h3></center>
            <center><p>On this day I want to:</p></center>
            <center>
            <form name = "activityscheduler" action = "act.php" method="POST" >
            <fieldset>
                <legend> TASKS </legend>
            <label>taskName</label>    
                <input type="text" name="taskName"><br>
            <label>tStart:</label> 
                <input type="date" name="tStart"><br>
            <label>tEnd:</label>
                <input type="date" name="tEnd"><br>
            <label>PRIORITY:</label><br>
                <input type="radio" name="tPriority" value="1">P1<br>
                <input type="radio" name="tPriority" value="2">P2<br>
                <input type="radio" name="tPriority" value="3">P3<br>
                <input type="radio" name="tPriority" value="4">P4<br>
                <button type="submit" class="submitbtn">Submit</button>
                <button type="reset" class="cancelbtn">Cancel</button><br>
            </fieldset>    
            </form>
                </center>
        </div>
        </body>
>>>>>>> 228b078499597004d60f5583c1789d16eeebde02
</html>