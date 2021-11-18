<?php

$num = $_POST['num'];
$n = 1;
$a = 0;
$b = 1;
$c = 0;

while ($n<=$num){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    $n +=1;
}

print $c;

?>