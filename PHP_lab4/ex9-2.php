<?php
$a = $_GET['passtext'];
if($a == "pass"){
    echo "You are a valid user.";
}
else{
    echo "Sorry, you are an invalid User.";
}
?>