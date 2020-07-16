<html>
<head>
    <title>Apparel Details</title>
</head>
<body>
<?php
$logcookie = $_COOKIE['logname'];

echo "<body>";
echo "<centre>";
echo "<align = 'right'>";
echo "Welcome $logcookie";
echo "<br><a href = 'ex20-1(logout).php'>Logout</a>";
echo "<center>";
echo "<h3>Shopper's Paradise</h3>";
echo "<h5>Shop till you drop!!!</h5>";
echo "<hr>";
echo "<br>";
echo "<table border = '1'>";
echo "<tr align = 'center'>";
echo "<th>Code</th>";
echo "<th>Name</th>";
echo "<th>Price</th>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td>A001</td>";
echo "<td><a href = ''>Apparel1</a></td>";
echo "<td>$5.00</td>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td>A002</td>";
echo "<td><a href = ''>Apparel2</a></td>";
echo "<td>$7.00</td>";
echo "</tr>";
echo "<tr align = 'center'>";
echo "<td>A003</td>";
echo "<td><a href = ''>Apparel3</a></td>";
echo "<td>$9.00</td>";
echo "</tr>";
echo "</table>";
echo "</center>";


?>
</body>
</html>