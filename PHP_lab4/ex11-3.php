<html>
<head/>
<body>
<title>User Information</title>
<?php
$myname = $_POST['myname'];
$myage = $_POST['myage'];
if($myname == ""){
    echo "Please enter your name!";
}
else{
    $mesg = ($myage == "") ? "$myname, please enter your age!" :
        "Hi $myname. Your age is $myage.";
    echo $mesg;
}
?>
<br>
<a href = "ex11-3.html">Back</a>
</body>
</html>