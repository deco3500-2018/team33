<?php
session_start();
$page = $_SERVER['PHP_SELF'];
 $sec = "10";
 header("Refresh: $sec; url=$page");
  

include_once("dbtools.inc.php");
$link = create_connection();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blueprint: Multi-Level Menu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.1.9/jquery.datetimepicker.min.js"></script>
  <!-- demo styles -->
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <!-- menu styles -->
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <script src="js/modernizr-custom.js"></script>
</head>

<body>
  <!-- Main container -->
  <div class="container">
    <!-- Blueprint header -->
    <header class="bp-header cf">
      <div class="bp-header__main">
        <span class="bp-header__present">Bridging33 </span>
        <h1 class="bp-header__title">Your Notificaiton</h1>

      </div>
    </header>
    <button class="action action--open" aria-label="Open Menu"><span class="glyphicon glyphicon-align-justify" style="color: grey;"></span></button>
    <nav id="ml-menu" class="menu">
      <button class="action action--close" aria-label="Close Menu"><span class="glyphicon glyphicon-remove"></span></button>
      <div class="menu__wrap">
        <ul data-menu="main" class="menu__level" tabindex="-1" role="menu" aria-label="Menu">
          <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-1" aria-owns="submenu-1" href="home.php">Home</a></li>
          <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-2" aria-owns="submenu-2" href="sender.php">Contact</a></li>
          <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-3" aria-owns="submenu-3" href="receive.php">My Invitation</a></li>
          <li class="menu__item" role="menuitem"><a class="menu__link" data-submenu="submenu-4" aria-owns="submenu-4" href="senderre.php">My Schedule</a></li>
        </ul>
        </div>
        
        </nav>
      </div>
   <div class="container centerdiv">
  <?php
    $sql = "SELECT * FROM noti WHERE receivename='receive' AND replied ='0'";
      $result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
      if (mysqli_num_rows($result) != 0){
        foreach($result as $row) {
		echo "<img src='img/5.jpg' width='100px'>";
        	echo "<div class='container'>You have a notifaction from sam. Please choose an action<br>";
        	echo "<form method='post' action='contact.php'>
            <span style='display: inline;'>
    <input type='hidden' name='notiid' value=".$row['notino'].">
    <button class='btn btn-primary d-inline-block' type='submit' value='conatact'>Contact</button>
</form>";
	echo "<form method='post' action='delete.php'>
            <span style='display: inline;'>
    	<input type='hidden' name='notiid' value=".$row['notino'].">
    <button class='btn btn-danger d-inline-block' id='dismiss'>Dismiss</button></form>";

            echo "</span></div><br>";
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
  <!-- /view -->
  <script src="js/classie.js"></script>

  <script src="js/main.js"></script>
  <script>
  (function() {
    var menuEl = document.getElementById('ml-menu'),
      mlmenu = new MLMenu(menuEl, {
        // breadcrumbsCtrl : true, // show breadcrumbs
        // initialBreadcrumb : 'all', // initial breadcrumb text
        backCtrl : false, // show back button
        // itemsDelayInterval : 60, // delay between each menu item sliding animation
      });

    // mobile menu toggle
    var openMenuCtrl = document.querySelector('.action--open'),
      closeMenuCtrl = document.querySelector('.action--close');

    openMenuCtrl.addEventListener('click', openMenu);
    closeMenuCtrl.addEventListener('click', closeMenu);

    function openMenu() {
      classie.add(menuEl, 'menu--open');
      closeMenuCtrl.focus();
    }

    function closeMenu() {
      classie.remove(menuEl, 'menu--open');
      openMenuCtrl.focus();
    }

    // simulate grid content loading
    var gridWrapper = document.querySelector('.content');

    function loadDummyData(ev, itemName) {
      ev.preventDefault();

      closeMenu();
      gridWrapper.innerHTML = '';
      classie.add(gridWrapper, 'content--loading');
      setTimeout(function() {
        classie.remove(gridWrapper, 'content--loading');
        gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
      }, 700);
    }
  })();
  </script>
</body>

</html>
