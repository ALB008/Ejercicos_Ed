<?php

$hora = 00;
$min = 0;
$seg = 0;

while ($hora<=23){
    print $hora.":".$min.":".$seg."<br>";
    $seg=$seg+1;
    
    if ($seg==60){
        $seg=0;
        $min=$min+1;
    }
    if ($min==60){
        $min=0;
        $hora=$hora+1;
    } 
    
}

?>