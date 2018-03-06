<?php
include('pdoConn.php');

$query = 'Select * from subTickets';
$sqlquery = $conn->prepare($query);
$result = $sqlquery->execute();
$results = array();

//$nRows = $result->rowCount();
$i = 0;
while($row = $sqlquery->fetch(PDO::FETCH_ASSOC))
{
   $results[$i] = $row;
   $i++;
}
?>
