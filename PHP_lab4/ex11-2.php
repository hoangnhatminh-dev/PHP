<html>
<head>
    <title>Grade details</title>
</head>
<body>
<?php
$myname = $_POST['myname'];
$mygrade = $_POST['mygrade'];
echo "<br>";

if($myname == ""){
    echo "Please enter your name";
}
else{
    switch($mygrade){
        case "":
            echo $myname;
            echo ", you did not enter your Grade";
            break;
        case "A":
            echo "Facilities for $myname (grade A)";
            echo "<br><br>";
            echo "Increment = 30% of basic salary";
            echo "<br>";
            echo "bonus = 20% of basic salary";
            echo "<br>";
            echo "Traveling allowance = $500";
            echo "<br>";
            echo "Medical allowance = $500";
            echo "<br>";
            break;
        case "B":
            echo "Facilities for $myname (grade B)";
            echo "<br><br>";
            echo "Increment = 20% of basic salary";
            echo "<br>";
            echo "bonus = 10% of basic salary";
            echo "<br>";
            echo "Traveling allowance = $300";
            echo "<br>";
            echo "Medical allowance = $300";
            echo "<br>";
            break;
        case "C":
            echo "Facilities for $myname (grade C)";
            echo "<br><br>";
            echo "Increment = 10% of basic salary";
            echo "<br>";
            echo "bonus = 5% of basic salary";
            echo "<br>";
            echo "Traveling allowance = $100";
            echo "<br>";
            echo "Medical allowance = $100";
            echo "<br>";
            break;
        default:
            echo "$myname, Please enter the correct grade (A, B or C)";
            break;


    }
}
?>
<a href = "ex11-2.html">Back</a>
</body>
</html>