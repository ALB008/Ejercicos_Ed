<?php

if(isset($_POST['submit'])){
    if(empty($cod)){
        echo "<p class='error'>* Ingresa el codigo del estudiante </p>";
        $x+=1;
    } else{
        if(!is_numeric($cod)){
            echo "<p class='error'>* El codigo debe ser un numero </p>";
            $x+=1;
        }
    }
    if(empty($nombre)){
        echo "<p class='error'>* Ingresa el nombre del estudiante </p>";
        $x+=1;
    } else{
        if(!is_string($nombre)){
            echo "<p class='error'>* El nombre del estudiante debe ser solo letras </p>";
            $x+=1;
        }
    }
    if(empty($materia)){
        echo "<p class='error'>* Ingresa el nombre de la materia </p>";
        $x+=1;
    } else{
        if(!is_string($materia)){
            echo "<p class='error'>* El nombre de la materia debe ser solo letras </p>";
            $x+=1;
        }
    }
    if(empty($n1)){
        echo "<p class='error'>* Ingresa la primera nota </p>";
        $x+=1;
    } else{
        if(is_float($n1)){
            echo "<p class='error'>* La primera nota debe ser un numero entre 0 y 5 </p>";
            $x+=1;
        }
    }
    if(empty($n2)){
        echo "<p class='error'>* Ingresa la segunda nota </p>";
        $x+=1;
    } else{
        if(is_float($n2) && $n2<=0 && $n2>=5){
            echo "<p class='error'>* La segunda nota debe ser un numero entre 0 y 5</p>";
            $x+=1;
        }
    }
    if(empty($n3)){
        echo "<p class='error'>* Ingresa la tercera nota </p>";
        $x+=1;
    } else{
        if(is_float($n3)){
            echo "<p class='error'>* La tercera nota debe ser un numero entre 0 y 5</p>";
            $x+=1;
        }
    }




if($x<=0){
    $prom = ($n1+$n2+$n3)/3;
    if ($prom>=4){
        $res = "APROBADO";
    }else{
        $res = "REPROBADO";
    }
    echo "El estudiante: ".$nombre.
        "<br>Con codigo: ".$cod.
        "<br>En la materia: ".$materia.
        "<br>Tiene un promedio de: ".$prom.
        "<br>Por lo que esta: ".$res;
}

}

?>