<?php
$n = 30;
$sum = 0;
$prod = 1;
for($i = 0;$i<$n;$i++){
    $sum += $i+1;
    $prod *= $i+1;
    echo(" $i +");
    
}
echo(" $n = $sum");
echo(" \n$prod ");
?>
