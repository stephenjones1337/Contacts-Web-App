<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Login system using PHP and stuff." />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link rel="stylesheet" href="style.css">

  <script src="javascript/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="javascript/jquery-1.12.4.min.js" type="text/javascript"></script>

  <script src="javascript/Listbox Widget/jqxcore.js" type="text/javascript"></script>
  <script src="javascript/Listbox Widget/jqxbuttons.js" type="text/javascript"></script>
  <script src="javascript/Listbox Widget/jqxlistbox.js" type="text/javascript"></script>
  <script src="javascript/Listbox Widget/jqxscrollbar.js" type="text/javascript"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.15.1/d3.min.js"></script> -->
  <!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script> -->
</head>
<body>
  <header>
    <nav class="nav-header-main">
      <!-- <a class="header-logo" href="index.php">
        <img src="images/glasses.png" alt="Deal Wit it">
      </a> -->
      <ul>
        <li><a href="index.php">    Home</a></li>
        <li><a href="#">        Portfolio</a></li>
        <li><a href="#">        About Me</a></li>
        <li><a href="#">        Contact</a></li>
      </ul>


      <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])){
          echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
        } else {
          echo '<form action="includes/login.inc.php" method="post">
                  <input  type="text"     name="mailuid"  placeholder="Username/Email...">
                  <input  type="password" name="pwd"      placeholder="Password...">
                  <button type="submit"   name="login-submit">Login</button>
                </form>
                <a href="signup.php" class="header-signup">Signup</a>';
        }
         ?>
      </div>
      </nav>
  </header>
</body>
</html>
