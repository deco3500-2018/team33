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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/index.css">


</head>

<body>
    <div class="container centerdiv">
	<form action="reply.php" method="post">
        <h1 style="text-align: center;">Please confirm a time that you are available</h1>
    Contact date:<input id="date" type="date" value="2017-06-01"><br>
    Contact method:<br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="Call" value="Call" checked>
      <label class="form-check-label" for="exampleRadios1">
        Phone call
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="Message" value="Message">
      <label class="form-check-label" for="exampleRadios2">
        Message
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="other" value="other">
      <label class="form-check-label" for="exampleRadios3">
        other
      </label>
      <input type='hidden' name='notiid' value="<?php echo  $notino;?>">
    <button class="btn btn-primary" type="submit">Contact</button>
    </div>
    </form>
    </div>
</body>
</html>