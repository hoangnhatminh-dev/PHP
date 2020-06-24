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

$sql_disp = ("SELECT * FROM User_contact;");
echo "<br>Displaying Records from the User_contact table: <br>";
$result = mysqli_query($connect_mysql, $sql_disp);
while($row = mysqli_fetch_array($result)){
    echo "$row[User_ID] ";
    echo "$row [User_name]";
    echo "$row [User_email_ID]<br>";
}
?>