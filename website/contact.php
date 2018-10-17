<?php
    include_once("dbtools.inc.php");
    $link = create_connection();
    $notino = $_POST['notiid'];


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
	<form action="reply.php" method="post">
    Choose the contact date:<input id="date" type="date" value="2017-06-01"><br>
    Choose the contact method:<br>
    <input type="radio" name="method" value="Call" checked> Call<br>
    <input type="radio" name="method" value="Message"> Message<br>
    <input type="radio" name="method" value="other"> Other
    <input type='hidden' name='notiid' value="<?php echo  $notino;?>">
    <input type="submit">
    </form>
</body>
</html>