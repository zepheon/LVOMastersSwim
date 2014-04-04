<HTML>
<BODY>
<?php
echo 'hello world! <br/>';
session_start();
$userdis = $_SESSION['user'];

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;
      charset=windows-1252">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title></title>
    <title>Edit/Update Profile</title>
  </head>
  <body>
    <br>
    <div id="wrap_div">
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

	echo'<section id="main_content">';
		echo 'user is '.$userdis.'!';
	  echo '<form action="handle_logs.php" method="post">
  User: <input type="text" name="user" required><br>
  Date: <input type="date" name="date" required><br>
  Time: <input type="time" name="time" required><b>(format for time is h:m[example 00:30])</b><br>
  <p><b>Type of Stroke: </b>
<select name="type">
<option value="free">Free</option>
<option value="fly">Fly</option>
<option value="back">Back</option>
<option value="breast">Breast</option>
<option value="im">IM</option>
</select></p>
<p><b>Distance: </b>
<select name="distance">
<option value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="400">400</option>
<option value="500">500</option>
<option value="1000">1000</option>
<option value="1650">1650</option>
</select>
<select name="measure">
<option value="meters">Meters</option>
<option value="yards">Yards</option>
</select>
</p>
  <input type="submit" name="Submit" value="Enter Log">
  </form>
	</section>
	</div>
	 
  </body>
</html>';

?>
</BODY>
</HTML>