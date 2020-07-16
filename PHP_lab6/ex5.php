<?php
$connect_mysql = mysqli_connect ("localhost", "root", "");
$result = mysqli_query($connect_mysql, "SELECT * FROM Employees");
while ($row = mysqli_fetch_row($result)){
    printf ("%s (%s) \n", $rows[0], $row[1]);
}
?>