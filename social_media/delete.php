<?php
include("includes/connection.php");
include("insert_user.php");
$link = mysqli_connect("localhost", "root", "", "social_network"); 
$user_email = htmlentities(mysqli_real_escape_string($con,$_POST['user_email']));
if($link === false){ 
	die("ERROR: Could not connect. " . mysqli_connect_error()); 
} 

$check_user_email_query = "select user_name from users where user_email='$user_email'";
if(mysqli_query($link, $check_user_email_query)){ 
	echo "Record was deleted successfully."; 
} 
else{ 
	echo "ERROR: Could not able to execute $check_user_email_query. " 
								. mysqli_error($link); 
} 
mysqli_close($link); 
?> 
