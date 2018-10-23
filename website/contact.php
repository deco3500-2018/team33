<?php
    include_once("dbtools.inc.php");
    $link = create_connection();
    $notino = $_POST['notiid'];


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
        <span class="bp-header__present">Bridging33</span>
        <h1 class="bp-header__title">Please confirm your available time</h1>

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
  <form action="reply.php" method="post">
    Contact date: <br><input id="date" type="date" value="2017-06-01"><br><br>
    Contact method:<br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="Call" value="Call" checked>
      <label class="form-check-label" for="inlineRadios1">
        Phone call
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="Message" value="Message">
      <label class="form-check-label" for="inlineRadios2">
        Meal
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="method" id="other" value="other">
      <label class="form-check-label" for="inlineRadios3">
        Video Call
      </label>
      <input type='hidden' name='notiid' value="<?php echo  $notino;?>"><br>
    <button class="btn btn-primary" type="submit">Contact</button>
    </div>
    </form>
    </div>
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
