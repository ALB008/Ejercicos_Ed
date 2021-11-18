<?php

if(isset($_POST['submit'])){
    if(empty($num)){
        echo "<p class='error'>* Ingresa un numero </p>";
        $x+=1;
    } else{
        if(!is_numeric($num)){
            echo "<p class='error'>* El dato ingresado debe ser un numero </p>";
            $x+=1;
        }
    }

    if($x<=0){
while ($n<=10){
    $res = $n*$num;
    print $num." x ".$n." = ".$res."<br>";
    $n=$n+1;
}
    }

}

?>