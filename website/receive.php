<?php
session_start();
if ($_SESSION['account'] != "receive"){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>


</head>

<body>
	You have receive a notifaction from "username". Please choose an action.<br>
	<button>Plan Contact</button>
	<button>Dismiss</button>

</body>
</html>