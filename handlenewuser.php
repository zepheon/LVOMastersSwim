<?php
require 'connectdb.php';
echo 'hello world again! <br/>';

$firstn = $_REQUEST['fname'];
$lastn = $_REQUEST['lname'];
echo "The Full Name is ".$firstn.' '.$lastn."<br />";

$newuser = $_REQUEST['user'];

if(!empty($newuser))
{
echo "The User is ".$newuser."<br />";
}
else{
$newuser = $firstn."_".$lastn;
echo "The User is ".$newuser."<br />";
}

$newpass = $_REQUEST['pass'];
if(!empty($newpass))
{
echo "The Password is ".$newpass."<br />";
}
else{
$cdate = date("Y");
$newpass = "newpass$cdate";
echo "The Password is ".$newpass."<br />";
}

$em = $_REQUEST['email'];
echo "The Email is ".$em."<br />";

$street = $_REQUEST['street'];
echo "The Street is ".$street."<br />";

$city = $_REQUEST['city'];
echo "The City is ".$city."<br />";

$state= $_REQUEST['state'];
echo "The State is ".$state."<br />";

$zip= $_REQUEST['zip'];
echo "The Zip Code is ".$zip."<br />";

$homeaddress = "$street, $city, $state, $zip";
echo $homeaddress."<br />";
$old_sDate = $_REQUEST['sdate'];
if(!empty($old_sDate))
{
$old_sDate = $_REQUEST['sdate'];
$hash_sDate = explode("/", $old_sDate); 
$sDate = "$hash_sDate[2]-$hash_sDate[0]-$hash_sDate[1]";
echo "The subscription Date is ".$sDate."<br />";
}
else
{
$sDate = date("Y-m-d");
echo "The subscription Date is ".$sDate."<br />";
}


$gen = $_REQUEST['gender'];
echo "The Gender is ".$gen."<br />";

$old_dOb = $_REQUEST['dob'];
$hash_dOb = explode("/", $old_dOb); 
$dOb = "$hash_dOb[2]-$hash_dOb[0]-$hash_dOb[1]";
echo "The DoB is ".$dOb."<br />";

$info1 = "INSERT INTO Account(User_Name, Password,Account_Type)
VALUES('$newuser', '$newpass', 'Swimmer')";
$rquerry1 = mysql_query($info1);;
$result1 = mysql_fetch_array( $rquerry1 );

$info2 = "INSERT INTO Swimmer(User_Name, Fname, Lname, Email, Home_Address, Subscription_Date, Gender, DoB, Status)
VALUES('$newuser','$firstn','$lastn','$em','$homeaddress','$sDate','$gen','$dOb', 'Active')";
$rquerry2 = mysql_query($info2);
$result2 = mysql_fetch_array( $rquerry2 );

?>
</BODY>
</HTML>