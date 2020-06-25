<html>
<body>
<?php
require_once 'login_exam.php';
$connection = new mysqli($hn, $un, $pw, $db);
if($connection -> connect_error) {
    die ("Fatal Error");
}

////GET user data
$full_name = $_GET['full_name'];
$email = $_GET['email'];
$username = $_GET['username'];
$password = $_GET['password'];

//ENCRYPT PASSWORD
$hash = password_hash($password, PASSWORD_DEFAULT);

//INSERT user data into table
$insert = "INSERT INTO users(full_name, email, username, password)
VALUE ('$full_name', '$email', '$username', '$hash');";

$insert_r = $connection -> query($insert);
if(!$insert_r) die ("Fatal Error in Insert");

//
if(isset($_COOKIE['full_name'])) $test = $_COOKIE['full_name'];
echo "<p><b>Welcome: $full_name</b></p>";
echo "<br>";
echo "<p>Your username is: <b>$username</b>";
setcookie('full_name', $full_name);
setcookie('username', $username);
?>
</body>
</html>