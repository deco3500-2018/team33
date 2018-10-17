<?php
session_start();
if ($_SESSION['account'] != "receive"){
	header('Location: ' . $_SERVER['HTTP_REFERER']);
	
}
include_once("dbtools.inc.php");
$link = create_connection();

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
	<?php
		$sql = "SELECT * FROM noti WHERE receivename='receive' AND replied ='0'";
    	$result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
    	if (mysqli_num_rows($result) != 0){
    		foreach($result as $row) {
        		echo "You have a notifaction from sam. Please choose an action<br>";
        		echo "<form method='post' action='contact.php'>
    <input type='hidden' name='notiid' value=".$row['notino'].">
    <input type='submit' value='conatct'>
</form>";
        		echo "<button>Dismiss</button><br>";
    		}  
    	}
	?>

	<script type="text/javascript">
		
		function contact(notino) {
      		$.ajax({
           type: "POST",
           url: 'contact.php',
           data:{notino:'notino'},
           	success:function(html) {
             alert(html);
           }

      });
  	}
	</script>
</body>
</html>