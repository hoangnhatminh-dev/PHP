<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$db = "User";
$connect_mysql = mysqli_connect($server, $username, $password, $db);
if($connect_mysql){
    echo "Connection established <br>";

}else{
    die ("Unable to connect<br>");
}

$mysql_db = mysqli_select_db($connect_mysql, $db);

if($mysql_db){
    echo "<br><br> Connected to the database.";
}
else{
    die("Unable to connect to the database");
}

$sql_update = ("UPDATE User_contact SET User_name = 'David'
WHERE User_ID = '102'");

$result = mysqli_query($connect_mysql, $sql_update);
if($result){
    echo "Records Updated: $result<br>";
}else{
    echo "Unable to update Records<br>";
    printf("Error message: %s\n", mysqli_error($connect_mysql));
}



?>