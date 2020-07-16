<HTML>
<BODY>
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

echo "<TABLE BORDER BGCOLOR = 'WHITE'>";
echo "<TR><TH>User_id</TH>
<TH>User_Name</TH>
<TH>User_email_ID</TH>";

echo "<DBQUERY q>SELECT * FROM User_contact";

echo "<DBROW><TR>
<TD><? q.User_id></TD>
<TD><? q.User_name></TD>
<TD><? q.User_email_ID></TD>
</TR>";

echo "</DBQUERY>";
echo "</TR>";
echo "</TABLE>";
?>
</BODY>
</HTML>




