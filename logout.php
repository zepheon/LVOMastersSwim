<HTML>
<BODY>
<?php
echo 'hello world! <br/>';
session_start();
session_destroy();
echo "Thank you for logging out of the website!";

mysql_close();
header('Location: index.php');
?>
</BODY>
</HTML>