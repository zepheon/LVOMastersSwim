<?php
require 'connectdb.php';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;
      charset=windows-1252">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Login</title>
  </head>
  <body>
  <div id="wrap_div">
  <header id="Header"><h1>LVO-YNS Masters Swim-and-Fit Online Tracking System</h1></header>
<nav id="horizonal_menu">
 <ul>
      <li><a href="index.php">Home</a></li>
    </ul>
	</nav>
	<section id="main_content">
	<form action="login_validate.php" method="post">
  Username: <input type="text" name="user" required><br>
  Password: <input type="password" name="pass" required><br>
  <input type="submit" name="login" value="Login">
  </form>
  </section>
	</div>

  </body>
</html>';
?>