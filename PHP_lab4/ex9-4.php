<?php
$p = $_GET['n1text'];
$r = $_GET['n2text'];
$n = $_GET['n3text'];
$SI = ($p * $r * $n)/100;
echo "The calculated simple interest is $SI";
?>