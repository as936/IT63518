<?php
include ('pdoConn.php');
$link = mysqli_connect($host,$user,$password);
	if(!$link)
	{
		die('Could not connect'.mysql_error());
		
	}
mysqli_select_db($link, "it63518")
if ($result = mysqli_query($link, "SELECT name FROM users")) {
    printf("Select returned %d rows.\n", mysqli_num_rows($result));

    /* free result set */
    mysqli_free_result($result);
}

?>
