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
  <!-- Extra -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- menu -->
  <!-- demo styles -->
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <!-- menu styles -->
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr-custom.js"></script>
  <link rel="stylesheet" type="text/css" href="css/index.css" />



</head>
<body>
  
<!-- <div class="container centerdiv">
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
</div> -->

<div class="login-box">
    <div class="login-logo">
      
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body back">
        <div class="bp-header__main">
        <span class="bp-header__present">Bridging33</span>
        <h1 class="bp-header__title" style="padding-bottom: 10px; color: white">LOGIN</h1>
      </div>
        <form action="home.php" method="post" accept-charset="utf-8">        <div class="form-group has-feedback">
            <input type="text" name="login" value="" placeholder="Username" class="form-control" id="login" maxlength="80" size="30">            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" value="" placeholder="Password" class="form-control" id="password" size="30">            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span><font color="red"></font></span>
        </div>
                <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;">
                        <input type="checkbox" name="remember" value="" id="remember" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"
                        ><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins>
                        </div>                   
                        </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button class="btn btn-primary" type="submit" value="Login">Login</button>          
            </div><!-- /.col -->
        </div>
        </form>        
            </div><!-- /.login-box-body -->
</div>

</body>
</html>