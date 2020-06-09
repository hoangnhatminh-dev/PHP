<?php
error_reporting(0);
$A = $_POST("empid");
$B = $_POST("name");
$C = $_POST("dept");
$D = $_POST("email");
echo "YOUR PERSONAL DETAILS";
echo "<BR><BR>";
echo "EmpID: $A <br>";
echo "Name: $B <br>";
echo "Department name: $C <br>";
echo "Email: $D <br>";
?>