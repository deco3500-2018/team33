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


</head>

<body>
	 <table style="width:100%">
    <tr>
      <td><img src="img/1.jpg" width="100px"> <br>Jill<br><button onclick="ajax()"> Contact</button></td>
      <td><img src="img/2.jpg" width="100px"> <br>Sam<br><button onclick="ajax()"> Contact</button></td>

    </tr>
    <tr>
      <td><img src="img/3.jpg" width="100px"> <br>Kelvin<br><button onclick="ajax()"> Contact</button></td>
      <td><img src="img/4.jpg" width="100px"> <br>James<br><button onclick="ajax()"> Contact</button></td>
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