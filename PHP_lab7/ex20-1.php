<?php
$val1 = $_GET['logname'];
$val2 = $_GET['pass'];

//Enter the following code to set a cookie for logname that does not expire
//for a week. The code shown earlier sets a cookie named logname that
//expires as soon as the user closes the browser. The value that gets stored
//in the $val variable is assigned to the cookie.

setcookie("logname", $val1);

//Enter the following code to validate whether the login name
//and password fields are left blank

if($val1 == ""){
    echo "Please enter the name!";
    echo "<html>";
    echo "<head>";
    echo "<title> Validate</title>";
    echo "</head>";
    echo "<body>";
    echo "<a href = 'ex20-1.html'>Back</a>";
    echo "</body>";
    echo "</html>";
}
else if($val2 == ""){
    echo "Please enter the password!";
    echo "<html>";
    echo "<head>";
    echo "<title>Validate</title>";
    echo "</head>";
    echo "<body>";
    echo "<br>";
    echo "<a href = 'ex20-1.html'>Back</a>";
    echo "</body>";
    echo "</html>";
}

//The code snippet use the header() function to redirect the information
//to homepage.php that is the home page of the website.
else{
    Header("Location: ex20-1(homepage).php");
}
?>
