<?php
include('pdoConn.php');
$query = 'Select name  from users';
$sqlquery = $conn->prepare($query);
$result = $sqlquery->execute();
$results = array();


$i = 0;
while($row = $sqlquery->fetch(PDO::FETCH_ASSOC))
{
   $results[$i] = $row;
   $i++;
}
?>
