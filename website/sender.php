<?php
session_start();
// if ($_SESSION['account'] != "sender"){
//   header('Location: ' . $_SERVER['HTTP_REFERER']);
// }
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
  <h1 style="text-align: center;"> Choose the person you want to contact</h1>
	 <table style="width:100%">
    <tr>
      <td align="center"><img src="img/1.jpg" width="100px"> <br>Jill<br><button class="btn btn-primary" onclick="ajax()"> Contact</button></td>
      <td align="center"><img src="img/2.jpg" width="100px"> <br>Sam<br><button class="btn btn-primary" onclick="ajax()"> Contact</button></td>

    </tr>
    <tr>
      <td align="center"><img src="img/3.jpg" width="100px"> <br>Kelvin<br><button class="btn btn-primary" onclick="ajax()"> Contact</button></td>
      <td align="center"><img src="img/4.jpg" width="100px"> <br>James<br><button class="btn btn-primary" onclick="ajax()"> Contact</button></td>
    </tr>
  </table>
  <script type="text/javascript">
    function ajax() {
      $.ajax({
           type: "POST",
           url: 'send.php',
           data:{action:'send'},
           success:function(html) {
             alert(html);
           }

      });
  } 
  </script>
  
</body>
</html>