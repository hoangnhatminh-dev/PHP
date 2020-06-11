<?php
$a = $_GET['Name'];
if($a>60){
    echo "Congrast";
    echo "You have got grade 1.";
}
else if($a < 60 and $a > 40){
    echo "Congrast";
    echo "You have got grade 2.";
}
else{
    echo "Sorry, You have failed";
}
?>
