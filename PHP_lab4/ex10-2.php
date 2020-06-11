<?php
$sal = $_GET['sal'];
echo "salary before bonus : $";
echo $sal;
echo "<br>";
if($sal > 850){
    $bonus = $sal * .1;
    echo "Bonus : $$bonus";
    echo "<br>";
    $sal += $bonus;
    echo "Total salary : $$sal";
}
?>