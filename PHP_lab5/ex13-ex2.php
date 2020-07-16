<?php
$number = $_GET['age'];
if($age <= 5){
    echo "The user is minor";
}
else if($age <= 22){
    echo "The user is youth";
}
else if($age <= 65){
    echo "The user is adult";
}
else{
    echo "The user is senior";
}
?>