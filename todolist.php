<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset= "utf-8">
	<meta http-equiv= "X-ua- Compatible" content="IE=edge">
	<meta name= "Viewport" content="width=device-width, initial-scales=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <title> TO DO LIST </title>
    </head>
    <body>        
           <?php
    $db=mysqli_connect("localhost", "root","")  or die ("Could not connect to database");
    mysqli_select_db($db,'activityscheduler') or die('Error selecting database : ' . mysqli_error());
    
    $query = "SELECT taskName, tStart, tEnd, tPriority FROM to-do-list";
    $result = mysqli_query($db,$query) or die(mysql_error());
    
    echo "<table border=\"0\">";
    $x=1;
    echo "<tr>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        if($x <=5)
        {
            
            $x = $x +1;
            $taskName = $row['taskName'];
            $dirname = "tasks/";
            $tasks = $dirname.$taskName;
            extract($row);
            echo "<td style=\"padding-right:15px;\">";
             echo "<td style=\"padding-right:15px;\">";
        echo "<b>Task Name:</b><br/> ";
        echo $taskName .'<br/>';
        echo "<b>Task Start:</b><br/> ";
        echo $tStart .'<br/>';
        echo "<b>Task End:</b><br/> ";
        echo $tEnd .'<br/>';
        echo "<b>Priority</b><br/> ";
        echo $tPriority .'<br/>';     
            
            echo "</td>";
        }
        else
        {
            $x=1;
            echo "</tr><tr>";
        }
    }
    echo "</table>";

?> 
           </div>
    </body>
</html>