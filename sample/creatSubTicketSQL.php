<?php

session_start();
include("pdoConn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$ticketID = ($_POST['ticketID']);
        $subject = ($_POST['subject']);
        $assignedTo = ($_POST['assignedTo']);
	$status = ($_POST['status']);
	$description = ($_POST['description']);
		
	$sql = "INSERT INTO subTickets(ticketID, subject, description, status, assignedTo) VALUES(:ticketID, :subject, :description, :status, :assignedTo)";
 
        $stmt = $conn->prepare($sql);


	$stmt->bindParam(':ticketID', $ticketID);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':assignedTo', $assignedTo);
	$stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
		
        $stmt->execute();

//        $result = $stmt->fetchAll();

header("location: welcomepage.php");
}

?>
