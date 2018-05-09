<?php
session_start();
include("pdoConn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") //this is looking at the html and getting the username and password from form
{
	$username = ($_POST['username']) ;
	$password = ($_POST['password']);

//	$sql = "SELECT name, password, role  FROM users WHERE name = :username and password = :password";

	$sql = 'CALL get_users2(?,?)';
	$stmt = $conn->prepare($sql);
	

//	$stmt->bindParam(':username', $username);
//	$stmt->bindParam(':password', $password);

	$stmt->bindParam(1, $username, PDO::PARAM_STR|PDO::PARAM_STR, 20);
	$stmt->bindParam(2, $password, PDO::PARAM_STR, 100);
	$stmt->execute();
		

	$result = $stmt->fetchAll();



	
if($result){

	echo "Login Successful";
	$_SESSION["username"]=$username;

	if($result[0]["role"] == "admin"){
	header("location: welcomepage.php");

	}
	else{
	header("location: welcompageEmployee.php");
	}
  	
}
else{

	echo "Login Failed";
	echo $username;
	echo $password;	
	echo $sql;
}

	

}

?>
