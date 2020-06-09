<html>
<body>
<?php
$x = "cat";
$y = "dog";
echo $x."<=>".$y, " //return ", $x <=> $y;
//this will output -1 because Cat is less than Dog.
echo "</br>";
$x = "PHP";
$y = "PHP";
echo $x."<=>".$y, " //return ", $x <=> $y;
//this will output 0 because both strings have same value
echo "</br>";
$x = "COMPUTE";
$y = "APPLE";
echo $x."<=>".$y, " //return ", $x <=> $y;
//this will output 1 because "COMPUTE" IS GREATER THAN APPLE
?>
</body>
</html>