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
echo '<table>
      <tr>
		<th>Users</th>
		<th>Status</th>
	  </tr>';
	
	$querry = sprintf("SELECT * FROM Swimmer");
$result = mysql_query($querry);
while($rows = mysql_fetch_array( $result )){
  echo "<tr>";
  echo "<td>".$rows['User_Name']."</td>";
    echo "<td>".$rows['Status']."</td>";
  echo "</tr>";
}	
echo'</table>';
	echo '</section>';
	echo '</div>
	</body>
  </html>';
  ?>