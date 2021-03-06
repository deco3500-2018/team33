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
    $sql = "SELECT * FROM noti WHERE receivename='receive' AND replied ='1'";
      $result = execute_sql($link, "deco3500", $sql) or die(mysqli_error($link));
      if (mysqli_num_rows($result) != 0){
        foreach($result as $row) {
            echo "<div class='centerdiv' id='dis'>Mum has replied you<br>";
            echo "Contact detail<br> Date: 2018-10-15 <br> Method:Phone Call<br>";
            echo "<button class='btn btn-primary d-inline-block' type='submit' value='Confirm' style='margin-right: 3px;'>Confirm</button>";
            echo "<button class='btn btn-danger' id='dismiss'>Dismiss</button></div><br>";
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
  <script type="text/javascript">
    
    function contact(notino) {
          $.ajax({
           type: "POST",
           url: 'contact.php',
           data:{notino:'notino'},
            success:function(html) {
             alert("Your schedule has been confirmed!");
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
