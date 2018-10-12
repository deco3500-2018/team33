<?php
session_start();
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
	<form class="login animate" action="login.php" name="myForm" method="post">
                  

              <div class="container">
                <input type="username" placeholder="Enter Username" name="username">
                <input type="password" placeholder="Enter Password" name="password">        
                <input type="button" value="Login" onClick="submit" class="popbutton">    
              </div>
              
            </form>
</body>
</html>