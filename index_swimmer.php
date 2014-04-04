<?php 
session_start();
$userdis = $_SESSION['user'];

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;
      charset=ISO-8859-1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Welcome Swimmer!</title>
  </head>
  <body>
  <div id="wrap_div">
  <header id="Header"><h1>LVO-YNS Masters Swim-and-Fit Online Tracking System</h1></header>
<nav id="horizonal_menu">
 <ul>
	  <li><a href="index_swimmer.php">Home</a></li>
      <li><a href="profile.php">Profile</a></li>
	  <li><a href="currentlog.php">Current Logs</a></li>
	  <li> <a href="logout.php">Logout</a></li>
	  <li> Welcome '.$userdis.'!</li>
	</ul>
	</nav>';


echo '<section id="main_content">';
	print "<h1>I'm a Swimmer!</h1>";
echo 'User is '.$userdis.'!';

echo '</section>
	</div>
	</body>
  </html>';
  ?>