<?php
session_start();
include("pdoConn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") //this is looking at the html and getting the username and password from form
{
	$username = ($_POST['username']) ;
	$password = ($_POST['password']);

	$sql = "SELECT * FROM users WHERE name = :username and password = :password";
	$stmt = $conn->prepare($sql);



	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $password);

	$stmt->execute();

	$result = $stmt->fetchAll();

if($result){

	echo "Login Successful";
	$_SESSION["username"]=$username;
	header("location: welcomepage.php");
}else{

	echo "Login Failed";	
}

	

}

?>
