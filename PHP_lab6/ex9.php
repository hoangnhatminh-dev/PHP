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

$sql_delete = ("DELETE FROM User_contact WHERE User_ID = '101'");

$result = mysqli_query($connect_mysql, $sql_delete);
if($result){
    echo "Records Deleted: $result<br>";
}else{
    echo "Records not found in the table <br>";
    printf("Error message: %s\n", mysqli_error($connect_mysql));
}

?>