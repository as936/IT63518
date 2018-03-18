<?php

session_start();
include("pdoConn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$ticketID = ($_POST['ticketID']);
        $comments = ($_POST['comments']);
	$status = ($_POST['status']);
	$assignedTo = ($_POST['assignedTo']);

		
	$sql = "UPDATE tickets SET status= :status, comments= :comments, assignedTo= :assignedTo WHERE ticketID= :ticketID";
 
        $stmt = $conn->prepare($sql);

	$stmt->bindParam(':ticketID', $ticketID);
        $stmt->bindParam(':comments', $comments);
        $stmt->bindParam(':status', $status);
	$stmt->bindParam(':assignedTo', $assignedTo);



	
        $stmt->execute();

header("location: welcomepage.php");
}

?>
