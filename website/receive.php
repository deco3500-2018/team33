<?php
session_start();
$page = $_SERVER['PHP_SELF'];
 $sec = "10";
 header("Refresh: $sec; url=$page");
	

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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/template.css">
<link rel="stylesheet" href="css/index.css">


</head>

<body style="font-size: 25px;">
  <div class="container centerdiv">
  <h2>Your Notifications</h2>
	<?php
		$sql = "SELECT * FROM noti WHERE receivename='receive' AND replied ='0'";
    	$result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
    	if (mysqli_num_rows($result) != 0){
    		foreach($result as $row) {
        		echo "<div class='container'>You have a notifaction from sam. Please choose an action<br>";
        		echo "<form method='post' action='contact.php'>
            <span style='display: inline;'>
    <input type='hidden' name='notiid' value=".$row['notino'].">
    <button class='btn btn-primary d-inline-block' type='submit' value='conatct'>Contact</button>
</form>";
        		echo "<button class='btn btn-danger d-inline-block'>Dismiss</button></span></div><br>";
    		}  
    	}
	?>
</div>
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