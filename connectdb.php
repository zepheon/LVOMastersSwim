<?php
$db_host = 'localhost';
$db_user = 'bocapstone1';
$db_pass = 'mycap1';
$db_name = 'bocapstone1';
mysql_connect($db_host, $db_user, $db_pass) or die(db_error('Connection failed!'));
mysql_select_db($db_name) or die(db_error('Connection failed!'));

?>