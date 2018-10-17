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


</head>

<body>
	<?php
		$sql = "SELECT * FROM noti WHERE receivename='receive' AND replied ='1'";
    	$result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
    	if (mysqli_num_rows($result) != 0){
    		foreach($result as $row) {
        		echo "Sam has replied you<br>";
        		echo "Contact detail<br> Date: 2018-10-15 <br> Method:Phone Call";
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