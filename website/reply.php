<?php
	include_once("dbtools.inc.php");
	$link = create_connection();
    $notino = $_POST['notiid'];
    $sql = "UPDATE noti SET replied ='1' WHERE notino = $notino";
    $result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
    header("Location: receive.php");
	exit();
?>
