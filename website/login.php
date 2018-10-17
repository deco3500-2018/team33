<?php
session_start();
 $username = $_POST["username"]; 	
 $password = $_POST["password"];
 	echo $username;
	if ($username = null || $password = null) {
		echo "2";
	 	header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

	 else if ($username = "sender" && $password ="sender") {
	  	$_SESSION['account'] = "sender";
	 	header("Location: sender.php");
	 	exit();
 	}
 	else if ($username = "receive" && $password ="receive") {
 		echo "1";
	 	$_SESSION['account'] = "receive";
	 	echo $_SESSION['account'];
	 	header("Location: receive.php");
	 	exit();
	 }

  	else if ($username = "sender" && $password ="sender") {
	  	$_SESSION['account'] = "sender";
	 	header("Location: sender.php");
	 	exit();
 	}
?>

