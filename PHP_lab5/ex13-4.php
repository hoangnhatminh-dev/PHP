<?php
$number = $_GET['num'];
if($number == 0){
    exit;
}
$ans = 1/$number;
echo "<BR>Inverse of the entered number is 1/$number";
echo "<BR>Its decimal equivalent is $ans";
echo "<BR><a href = ex13-4.html>Go back </a>";
?>