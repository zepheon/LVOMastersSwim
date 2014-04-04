<?php
require 'connectdb.php';

session_start();
$userinfo = $_REQUEST['user'];

$passinfo = $_REQUEST['pass'];

$info = sprintf("SELECT * FROM Account WHERE User_Name = '%s' AND Password = '%s';", $userinfo, $passinfo);
$userdata = mysql_query($info);
$result = mysql_fetch_array( $userdata );
$show_user = $result['User_Name'];

$show_pass = $result['Password'];

$show_type = $result['Account_Type'];

$_SESSION['user'] = $show_user;

switch($show_type){
case "Coach":
header("Location: index_coach.php");
break;
case "Swimmer":
header("Location: index_swimmer.php");
break;
default:
echo "Please enter a valid username and/or password!";
header("Location: login.php");
}
?>