<?php

if(isset($_POST['submit'])){
    if(empty($llanta)){
        echo "<p class='error'>* Ingresa la cantidad de llantas </p>";
        $x+=1;
    } else{
        if(!is_int($llanta) && $llanta<0){
            echo "<p class='error'>* La cantidad debe ser un numero entero positivo </p>";
            $x+=1;
        }
    }


if($x<=0){
if ($llanta<5){
    $precio = 30000;
} elseif ($llanta>=5 && $llanta<=10){
    $precio = 25000;
} elseif ($llanta>10){
    $precio = 20000;
}
$total = $llanta*$precio;
echo "<br>Debido a que compra ".$llanta." llantas, el
    precio por cada una es de: ".$precio.
    "<br> Por lo que el total a pagar es de: ".$total;
}

}

?>