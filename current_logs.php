<?php


echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;
      charset=ISO-8859-1">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Current Users</title>
  </head>
  <body>';
  session_start();
$userdis = $_SESSION['user'];
require 'connectdb.php';
  echo '<div id="wrap_div">
  <header id="Header"><h1>LVO-YNS Masters Swim-and-Fit Online Tracking System</h1></header>
<nav id="horizonal_menu">
 <ul>
	  <li><a href="index_coach.php">Home</a></li>
      <li><a href="enternewuser.php">Establish a New Swimmer</a></li>
	  <li><a href="current_users.php">Existing Swimmer Status</a></li>
	  <li><a href="enternewlog.php">Create Log for Swimmer</a></li>
	  <li><a href="current_logs.php">View Swimmer Logs</a></li>
	  <li> <a href="logout.php">Logout</a></li>
	  <li> Welcome '.$userdis.'!</li>
 </ul>
</nav>';

	echo '<section id="main_content">';
echo '<form action="handle_logs.php" method="post">';
		  
echo '<select name="users">';
echo '<option selected>Select a Swimmer</option>';

$querry1 = sprintf("SELECT Swimmer_ID, User_Name, Fname, Lname FROM Swimmer");
$result1 = mysql_query($querry1);
while($row1 = mysql_fetch_array( $result1 )){
 echo '<option value="'.$row1['User_Name'].'">'.$row1['Fname']." ".$row1['Lname'].'</option>';
}	
echo '</select><br>
  <input type="submit" name="submit" value="submit">
</form>';

	echo '</section>';
	echo '</div>
	</body>
  </html>';
  ?>