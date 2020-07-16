<?php
require_once 'login.php';
//$connect_mysql = mysqli_connect($hn, $un, $pw, $db);
//$mysqli_db = mysqli_select_db($connect_mysql, "Current");
$conn = new mysqli($hn, $un, $pw, $db);
if($conn -> connect_error) die ("Fatal Error");

