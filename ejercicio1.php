<?php

if (isset($_POST['submit'])){
    if(empty($valor)){
        echo "<p class='error'>* Ingresa el valor de la hora  </p>";
        $x+=1;
    } else{
        if(!is_numeric($valor)){
            echo "<p class='error'>* El valor de la hora debe ser un numero </p>";
            $x+=1;
        }}
    if(empty($horae)){
        echo "<p class='error'>* Ingresa el valor de la hora extra </p>";
        $x+=1;
    } else{
        if(!is_numeric($horae)){
            echo "<p class='error'>* El valor de la hora extra debe ser un numero </p>";
            $x+=1;
        }}
    if(empty($horat)){
        echo "<p class='error'>* Ingresa el valor de las horas trabajadas</p>";
        $x+=1;
    } else{
        if(!is_numeric($horat)){
            echo "<p class='error'>* El valor de las horas trabajadas debe ser un numero </p>";
            $x+=1;
        }
    }    



if($x<=0){
    if ($horat>40){
        $extra=$horat-40;
        $h=$extra*$horae;
        $salario =(40*$valor)+$h;
    } else {
        $salario=$horat*$valor;
    }

    $pen=$salario/100*10;
    $salu=$salario/100*15;
    $salario=$salario-$pen-$salu;

    print "<br><br>Descontando el 10% por concepto de pension <br>y el 15% por concepto de salud <br>";
    print "<br>El salario del emplado es de: ".$salario;
}
}
        
?>