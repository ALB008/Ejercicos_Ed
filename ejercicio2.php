<?php

if(isset($_POST['submit'])){
    if(empty($lunes)){
        echo "<p class='error'>* Ingresa la temperatura del lunes </p>";
        $x+=1;
    } else{
        if(!is_numeric($lunes)){
            echo "<p class='error'>* La temperatura de lunes debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($martes)){
        echo "<p class='error'>* Ingresa la temperatura del martes </p>";
        $x+=1;
    } else{
        if(!is_numeric($martes)){
            echo "<p class='error'>* La temperatura de martes debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($miercoles)){
        echo "<p class='error'>* Ingresa la temperatura del miercoles </p>";
        $x+=1;
    } else{
        if(!is_numeric($miercoles)){
            echo "<p class='error'>* La temperatura de miercoles debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($jueves)){
        echo "<p class='error'>* Ingresa la temperatura del jueves </p>";
        $x+=1;
    } else{
        if(!is_numeric($jueves)){
            echo "<p class='error'>* La temperatura de jueves debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($viernes)){
        echo "<p class='error'>* Ingresa la temperatura del viernes </p>";
        $x+=1;
    } else{
        if(!is_numeric($viernes)){
            echo "<p class='error'>* La temperatura de viernes debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($sabado)){
        echo "<p class='error'>* Ingresa la temperatura del sabado </p>";
        $x+=1;
    } else{
        if(!is_numeric($sabado)){
            echo "<p class='error'>* La temperatura de sabado debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($domingo)){
        echo "<p class='error'>* Ingresa la temperatura del domingo </p>";
        $x+=1;
    } else{
        if(!is_numeric($domingo)){
            echo "<p class='error'>* La temperatura de domingo debe ser un numero </p>";
            $x+=1;
        }
    }

if($x<=0){
$promedio = ($lunes+$martes+$miercoles+$jueves+$viernes+$sabado+$domingo)/7;

print("<br><br>El promedio de la temperatura en la semana es de: ".$promedio."<br>");

if ($promedio>35){
    print ("Que semana tan calurosa!!!");
} else if ($promedio>=15 && $promedio<=35){
    print("Que clima tan delicioso!!!");
} else{
    print ("Que semana tan fría!!!");
}
}

}

?>