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

$mysql_db = mysqli_select_db($connect_mysql, "User");
if($mysql_db){
    echo "Connected to the database<br>";
}else{
    die("Unable to connect to the database<br>");
}

$sql_table = "CREATE TABLE user_contact
("."User_ID INT NOT NULL PRIMARY KEY, 
"."User_name CHAR(25) NOT NULL,
"."User_email_ID CHAR(25)".")";

if(mysqli_query($connect_mysql, $sql_table)){
    echo "Table is created <br>";
}else{
    die ("Unable to create the table <br>");
}

