<?php
include_once("dbtools.inc.php");
$link = create_connection();
	if($_POST['action'] == 'send') {
  
   	$sql = "INSERT INTO noti (sendername, receivename) 
            VALUES ('sender','receive')";
    $result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
}

?>