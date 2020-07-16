<?php
$cookieval = $_COOKIE['uname'];
?>
<html>
<body>
<?php
if(isset($cookieval)){
    echo " Welcome $cookieval";
}
else{
    echo "You need to login";
}

?>
</body>
</html>
