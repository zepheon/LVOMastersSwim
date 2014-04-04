<?php
require 'connectdb.php';
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;
      charset=windows-1252">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title></title>
    <title>Registration</title>
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
</nav>


	<section id="main_content">
	 <form action="handlenewuser.php" method="post">
	  <table>
	  <tr>
  <td align="left">User: </td><td align="right"><input type="text" name="user"></td>
  </tr>

  <tr>
  <td align="left">Password: </td><td align="right"><input type="text" name="pass"><td></tr>

  <tr>
  <td align="left">First Name: </td><td align="right"><input type="text" name="fname" required><td></tr>

  <tr>
  <td align="left">Last Name: </td><td align="right"><input type="text" name="lname" required><td></tr>

  <tr>
  <td align="left">Email: </td><td align="right"><input type="text" name="email" required><td></tr>


  <tr>
  <td align="left"><u>Home Address:</u><td></tr>
  <tr>
  <td align="left">Street: </td><td align="right"><input type="text" name="street"><td></tr>

  <tr>
  <td align="left">City: </td><td align="right"><input type="text" name="city"><td></tr>

  <tr>
  <td align="left">State: 
</td><td align="right"><select name="state">
<option value="MA">Massachusetts</option>
<option value="NH">New Hampshire</option>
<option value="RI">Rhode Island</option>
<option value="CT">Connecticut</option>
</select><td></tr>

  <tr>
  <td align="left">Zip: </td><td align="right"><input type="text" name="zip"><td></tr>

  <tr>
  <td align="left">Subscription Date: </td><td align="right"><input type="date" name="sdate"><td></tr>

  <tr>
  <td align="left">Gender: </td><td align="right"><input type="radio" name="gender" value="male" />Male<input type="radio" name="gender" value="female" />Female<td></tr>

  <tr>
  <td align="left">Date of Birth: </td><td align="right"><input type="date" name="dob" required><td></tr><br>

  <tr>
  <td align="left"><input type="submit" name="Create" value="Create"><td></tr>
  </table>
  </form>
	</section>
	</div>
	 
  </body>
</html>';

?>
</BODY>
</HTML>