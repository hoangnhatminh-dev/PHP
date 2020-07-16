<?php
$logcookie = $_COOKIE['logname'];

//delete logname cookie
setcookie("logname");

//redirects users to the main ex20-1.html for login
header("Location: ex20-1.html");
?>
