<?php

$num = $_POST['num'];
$n = 1;
$total = 1;

while ($n<=$num){
    $total *=$n;
    $n = $n+1;
}

print $total;


?>