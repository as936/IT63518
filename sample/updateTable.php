<?php

session_start();
include("pdoConn.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
	$ticketID = ($_POST['ticketID']);
        $subject = ($_POST['subject']) ;
        $comments = ($_POST['comments']);
	$status = ($_POST['status']);
	$description = ($_POST['description']);
		
	$sql = "INSERT INTO tickets(ticketID, subject, description, status, comments) VALUES(:subject, :description, :status, :comments) ON DUPLICATE KEY UPDATE subject= :subject, description=:description, status=:status, comments=:comments";
 
        $stmt = $conn->prepare($sql);


	$stmt->bindParam(':ticketID', $ticketID);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':comments', $comments);
	$stmt->bindParam(':description', $description);
        $stmt->bindParam(':status', $status);
		
        $stmt->execute();

//        $result = $stmt->fetchAll();

header("location: welcomepage.php");
}

?>
