<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
  <link rel="stylesheet" href="css/index.css">

</head>
<body>

<div class="container centerdiv">
		<h2 style="font-weight: bold;">User Login</h2>
	<form class="login animate" action="login.php" name="myForm" method="post">
                <div class="form-group">  
                <input type="text" placeholder="Enter Username" name="username">
            	</div>
            	<div class="form-group">
                <input type="password" placeholder="Enter Password" name="password">
                </div>        
                <button class="btn btn-primary" type="submit" value="Login">Login</button>

              
    </form>
</div>

</body>
</html>