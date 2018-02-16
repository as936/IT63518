<?php
include("pdoConn.php")
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") //this is looking at the html and getting the username and password from form
{
	$username = mysqli_real_escape_string($db,$_POST['username']
	$password = mysqli_real_escape_string($db,$_POST['password']
	
	$sqlquery = "Select * from users where name = '$username' and password = '$password'";
	$result = mysqli_query($db,$sqlquery)
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	
	$count = mysqli_num_rows($result);
	
	if($count == 1)
	{
		session_register("myusername");
		$_SESSION['login_user'] = $username;
		
		$success = "Successfully Logged In";
		printf $success
		header("location: welcomepage.php"); //sending to the landing page after you log in
	}
		
	else {
		$error = "Your Login Name or Password is invalid";
	}
}

?>
