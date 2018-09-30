<?php
$user ='root';
$pass ='';
$db = 'activityscheduler';

$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect to database");
echo "Connected to database";

?>