<?php

//Store the value ò the cooki logname
$logcookie = $_COOKIE['logname'];

//Display the various items available for sopping:
echo "<html>";
echo "<head>";
echo "<title>Homepage</title>";
echo "</head>";
echo "<body>";
echo "<align = 'right'>";

//display the value of the cookie logcookie
echo "Welcome $logcookie";
echo "<br><a href = 'ex20-1(logout).php'>Logout</a>";
echo "<center>";
echo "<h3> Shopper's Paradise</h3>";
echo "<h5> Shop till you drop !!!</h5>";
echo "<hr>";
echo "<br>";
echo "<table>";
echo "<tr align = 'center'>";
echo "<td><a href = 'ex20-1(conf).php'>Confectionery</a></td>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td><a href = 'ex20-1(flowers).php'>Flowers</a></td>";
echo "<tr>";
echo "<tr align = 'center'>";
echo "<td><a href = 'ex20-1(access).php'>Accessories</a></td>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td><a href = 'ex20-1(perf).php'>Perfumes</a></td>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td><a href = 'ex20-1(apparel).php'>Apparel</a></td>";
echo "</tr>";
echo "</table>";
echo "</center>";
echo "</body>";
echo "</html>";
?>
